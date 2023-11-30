<?php

/**
 * @file
 * Contains Drupal\partidos\Controller\PartidosController.
 *
 * Defines a controller for the Partidos module.
 */

namespace Drupal\partidos\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Connection;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Render\RendererInterface;
use Drupal\Core\Template\TwigEnvironment;
use Drupal\Core\Render\Markup;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Class PartidosController.
 *
 * Defines a controller for the Partidos module.
 */
class PartidosController extends ControllerBase
{

    /**
     * La conexión a la base de datos.
     *
     * @var \Drupal\Core\Database\Connection
     */
    protected $database;

    /**
     * El entorno Twig.
     *
     * @var \Drupal\Core\Template\TwigEnvironment
     */
    protected $twig;

    /**
     * El renderizador.
     *
     * @var \Drupal\Core\Render\RendererInterface
     */
    protected $renderer;

    protected $request;

    /**
     * Constructor.
     *
     * @param \Drupal\Core\Database\Connection $database
     *   La conexión a la base de datos.
     * @param \Drupal\Core\Template\TwigEnvironment $twig
     *   El entorno Twig.
     * @param \Drupal\Core\Render\RendererInterface $renderer
     *   El renderizador.
     * @param \Symfony\Component\HttpFoundation\RequestStack $requestStack
     *   El stack de solicitud.
     */
    public function __construct(Connection $database, TwigEnvironment $twig, RendererInterface $renderer, RequestStack $requestStack)
    {
        $this->database = $database;
        $this->twig = $twig;
        $this->renderer = $renderer;
        $this->request = $requestStack->getCurrentRequest();
    }

/**
     * {@inheritdoc}
     */
    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get('database'),
            $container->get('twig'),
            $container->get('renderer'),
            $container->get('request_stack')
        );
    }

    /**
     * Devuleve una lista con los proximos partidos.
     *
     * @return array
     *   El array de los proximos partidos.
     */

    // si la conexion a internet es lenta esto falla
    public function listaPartidos()
    {
        $fechaActual = date("Y-m-d\TH:i\Z");
        $hora = substr($fechaActual, 11, 2);
        $hora = strval(intval($hora) - 1);
        $hora = str_pad($hora, 2, '0', STR_PAD_LEFT);
        $fechaActual = substr_replace($fechaActual, $hora, 11, 2);

        // Realizar una consulta a la base de datos.
        $query = $this->database->select('partidos', 'par')
            ->fields('par', ['idPartido', 'idLiga', 'fecha'])
            ->condition('fecha', $fechaActual, '>=')
            ->orderBy('fecha', 'ASC') // Ordenar por fecha de forma ascendente
            ->range(0, 25) // Mostrar solo los primeros 20 resultados
            ->execute()
            ->fetchAll(\PDO::FETCH_OBJ);


        $partidos = array();
        foreach ($query as $row) {
            $partidos[] = [
                'idPartido' => $row->idPartido,
                'idLiga' => $row->idLiga
            ];
        }
        $listaPartidos = $this->datosPartidos($partidos);
        return $listaPartidos;
    }

    /**
     * Devuelve el equipo que juega como local en el partido asociado con ese identtificador.
     *
     * @param int $id
     *   El ID del partido a buscar.
     *
     * @return array
     *   El array con los datos del partido.
     */
    public function eqLocal($id)
    {
        $query = $this->database->select('partidos', 'par')
            ->fields('par', ['idPartido', 'idLiga'])
            ->condition('idPartido', $id, '=')
            ->execute()
            ->fetchAll(\PDO::FETCH_OBJ);

        $partidos = array();
        foreach ($query as $row) {
            $partidos[] = [
                'idPartido' => $row->idPartido,
                'idLiga' => $row->idLiga
                //'fecha' => $row->fecha
            ];
        }

        $listaPartidos = $this->datosPartidos($partidos);
        return $listaPartidos;
    }

    /**
     * Retrieves data for a list of soccer matches from ESPN API.
     *
     * @param array $partidos
     *  Un array con los partidos a buscar.
     *
     * @return array
     *  Array con los datos de los partidos seleccionados.
     */
    public function datosPartidos($partidos)
    {
        $listaPartidos = array();
        for ($i = 0; $i < sizeOf($partidos); $i++) {
            $url = "https://site.api.espn.com/apis/site/v2/sports/soccer/esp.1/scoreboard/" . $partidos[$i]['idPartido'];

            // Crear una conexión cURL
            $curl = curl_init($url);

            // Establecer opciones cURL
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            // Realizar la solicitud HTTP GET
            $response = curl_exec($curl);

            // Verificar errores en la solicitud cURL
            if ($response === false) {
                echo "Error en la solicitud cURL: " . curl_error($curl);
                // Puedes manejar el error según tus necesidades
            } else {
                // Procesar la respuesta (decodificar el JSON)
                $partidosData = json_decode($response, true);

                $fechaCompleta = $partidosData["date"];

                list($fecha, $hora) = explode('T', $fechaCompleta);
                list($anio, $mes, $dia) = explode('-', $fecha);
                $hora = str_replace('Z', '', $hora);
                $hora = explode(':', $hora);
                $hora[0] = strval(intval($hora[0]) + 1);
                $hora = implode(':', $hora);

                $fechaObjetivo = strtotime($fecha);
                $hoy = time();
                $diferenciaEnSegundos = $fechaObjetivo - $hoy;
                $dif = floor($diferenciaEnSegundos / (60 * 60 * 24)) + 1;

                // filtrar si el partido no ha empezado (solo por verificar)
                if ($partidosData["competitions"][0]["status"]["type"]["name"] == "STATUS_SCHEDULED") {
                    $listaPartidos[] = [
                        "id" => $partidos[$i]["idPartido"],
                        "competicion" => $partidos[$i]["idLiga"],
                        "estadio" => $partidosData["competitions"][0]["venue"]["fullName"],
                        "ciudad" => $partidosData["competitions"][0]["venue"]["address"]["city"],
                        "pais" => $partidosData["competitions"][0]["venue"]["address"]["country"],
                        "local" => $partidosData["competitions"][0]["competitors"][0]["team"]["displayName"],
                        "visitante" => $partidosData["competitions"][0]["competitors"][1]["team"]["displayName"],
                        "anio" => $anio,
                        "mes" => date("M", mktime(0, 0, 0, $mes, 1)),
                        "mesComp" => date("F", mktime(0, 0, 0, $mes, 1)),
                        "dia" => $dia,
                        "diaSem" => date("l", strtotime($fecha)),
                        "hora" => $hora,
                        "dif" => $dif
                    ];
                }
            }
        }
        return $listaPartidos;
    }

    public function inicioSesion($mail, $passwd)
    {
        $mysql = mysqli_connect("localhost", "root", "");
        $mysql->select_db("alltickets");

        //extraigo cuantos usuarios hay con estas credanciales y si hay alguno extraigo sus datos
        $query2 = "SELECT count(*) as num_usuario FROM usuarios WHERE email='$mail' and passwd='$passwd'";
        $resultado2 = $mysql->query($query2);
        $result2 = $resultado2->fetch_assoc();

        if ($result2["num_usuario"] == false) {
            return false;
        } else {
            session_start();

            $query1 = "SELECT email FROM usuarios WHERE email='$mail' and passwd='$passwd'";
            $resultado1 = $mysql->query($query1);
            $result1 = $resultado1->fetch_assoc();
            $_SESSION['IDuser'] = $result1["email"];
            return true;
        }
    }

    public function registro($name, $surname, $passwd, $email, $phone)
    {
        $mysql = mysqli_connect("localhost", "root", "");
        $mysql->select_db("alltickets");

        $query = "INSERT INTO `usuarios`(`id`,`name`, `surname`, `passwd`, `email`, `phone`) VALUES ('0','$name','$surname','$passwd','$email','$phone')";
        $resultado = $mysql->query($query);

        if ($resultado) {
            session_start();

            $query1 = "SELECT email FROM usuarios WHERE email='$email' and passwd='$passwd'";
            $resultado1 = $mysql->query($query1);
            $result1 = $resultado1->fetch_assoc();
            $_SESSION['IDuser'] = $result1["email"];
            return true;
        } else {
            return false;
        }
    }

    /**
     * Devuelve el contenido, obtenido de renderizar las plantillas, que aparecera en el bloque 'contenido', el cual sera el listado de partidos.
     *
     * @return array
     *   Codigo del listado de partidos.
     */
    public function listado()
    {
        $parts = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
        $titulo = end($parts);

        $data = [
            'titulo' => $titulo,
        ];

        $partidos = $this->listaPartidos();
        $dataLista = [
            'partidos' => $partidos
        ];

        // Cargar la primera plantilla
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render($data);

        // Cargar la segunda plantilla
        $template2 = $this->twig->load('@partidos/listaPartidos.html.twig');
        $html2 = $template2->render($dataLista);

        // Combinar el contenido de ambas plantillas
        $combinedHtml = $html1 . $html2;

        // Envuelve el contenido de la plantilla en un objeto renderizable
        $content = [
            '#markup' => Markup::create($combinedHtml),
        ];

        // Agrega el contenido de la plantilla al bloque "Main page content"
        $build['main_page_content']['#markup'] = $content['#markup'];

        return $build;
    }

    /**
     * Devuelve el contenido, obtenido de renderizar las plantillas, que aparecera en el bloque 'contenido', el cual sera la informacion del partido.
     *
     * @param int $id
     *   Identificador del partido.
     *
     * @return array
     *   Codigo de los detalles del partido.
     */
    public function partido($id)
    {
        $eqLocal = $this->eqLocal($id);

        $parts = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
        $titulo = end($parts);

        $data = [
            'titulo' => $titulo
        ];

        $data2 = [
            'id' => $id,
            'local' => $eqLocal
        ];

        // Cargar la primera plantilla
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render($data);

        // Cargar la segunda plantilla
        $template2 = $this->twig->load('@partidos/partido.html.twig');
        $html2 = $template2->render($data2);

        // Combinar el contenido de ambas plantillas
        $combinedHtml = $html1 . $html2;

        // Envuelve el contenido de la plantilla en un objeto renderizable
        $content = [
            '#markup' => Markup::create($combinedHtml),
        ];

        // Agrega el contenido de la plantilla al bloque "Main page content"
        $build['main_page_content']['#markup'] = $content['#markup'];

        return $build;
    }

    /**
     * Devuelve el contenido, obtenido de renderizar las plantillas, que aparecera en el bloque 'contenido', el cual sera la informacion del partido.
     *
     * @param int $id
     *   Identificador del partido.
     *
     * @return array
     *   Codigo de los detalles del partido.
     */
    public function compra($id)
    {
        $eqLocal = $this->eqLocal($id);
        $titulo = 'Entradas ' . $eqLocal[0]['local'];

        $data = [
            'titulo' => $titulo,
            'subtitulo' => '
                <div class="p-1 m-0 fw-normal lh-sm">
                    <div class="p-2 text-center fs-5">
                        <div class="d-flex flex-column align-items-center text-center d-inline">
                            <div class="d-inline">
                                <span>
                                    Prices include an approximate VAT and also a booking fee, shipping fee is not included.
                                </span>
                                <span>
                                    <span class="hover">&nbsp;
                                        <i class="i-info-sign align-items-center"></i>
                                    </span>
                                    <div class="text-center fw-light lh-1 abajo">
                                        <p class="fs-6 m-0 text-wrap">
                                            Delivery and handling fees will be calculated later during the checkout process, when you select your preferred payment process, when you select your preferred delivery method and (if applicable) location. location.
                                        </p>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>'
        ];

        $entradas = $this->request->request->get('entradas');
        $seccion = $this->request->request->get('seccion');
        $precio = $this->request->request->get('precio');
        $data2 = [
            'id' => $id,
            'eqLocal' => $this->eqLocal($id),
            'entradas' => $entradas,
            'seccion' => $seccion,
            'precio' => $precio,
            'presesion' => 'hide',
            'conf' => 'hide',
            'sesion' => '',
            'pago' => '',
            'fallo' => ''
        ];

        if ($this->request->request->get('SignIn') !== null) {
            if ($this->inicioSesion($this->request->request->get('userIn'), $this->request->request->get('passIn'))) {
                $data2 = [
                    'sesion' => 'hide',
                    'presesion' => '',
                    'id' => $id,
                    'eqLocal' => $this->eqLocal($id),
                    'entradas' => $entradas,
                    'seccion' => $seccion,
                    'precio' => $precio,
                    'conf' => 'hide',
                    'pago' => '',
                    'fallo' => ''
                ];
            } else {
                $data2 = [
                    'id' => $id,
                    'eqLocal' => $this->eqLocal($id),
                    'entradas' => $entradas,
                    'seccion' => $seccion,
                    'precio' => $precio,
                    'presesion' => 'hide',
                    'conf' => 'hide',
                    'sesion' => '',
                    'pago' => '',
                    'fallo' => '<div class="error mb-3 p-3 d-flex flex-row"><img src="https://i.imgur.com/GnyDvKN.png" width="30" height="30"><p class="m-0">Incorrect email or password.</p></div>'
                ];
            }
        }

        if ($this->request->request->get('SignUp') !== null) {
            if ($this->registro($this->request->request->get('name'), $this->request->request->get('surname'), $this->request->request->get('pass'), $this->request->request->get('email'), $this->request->request->get('phone'))) {
                //ir a pagina de inicio y enviar mail
                $data2 = [
                    'sesion' => 'hide',
                    'presesion' => '',
                    'id' => $id,
                    'eqLocal' => $this->eqLocal($id),
                    'entradas' => $entradas,
                    'seccion' => $seccion,
                    'precio' => $precio,
                    'conf' => 'hide',
                    'pago' => '',
                    'fallo' => ''
                ];
            } else {
                $data2 = [
                    'id' => $id,
                    'eqLocal' => $this->eqLocal($id),
                    'entradas' => $entradas,
                    'seccion' => $seccion,
                    'precio' => $precio,
                    'presesion' => 'hide',
                    'conf' => 'hide',
                    'sesion' => '',
                    'pago' => '',
                    'fallo' => '<div class="error mb-3 p-3 d-flex flex-row"><img src="https://i.imgur.com/GnyDvKN.png" width="30" height="30"><p class="m-0">This user already exists in our page.</p></div>'
                ];
            }
        }

        if ($this->request->request->get('pago') !== null) {
            $data2 = [
                'pago' => 'hide',
                'eqLocal' => $this->eqLocal($id),
                'conf' => '',
                'id' => $id,
                'entradas' => $entradas,
                'seccion' => $seccion,
                'precio' => $precio,
                'presesion' => 'hide',
                'sesion' => '',
                'fallo' => ''
            ];
        }
        // Cargar la primera plantilla
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render($data);

        // Cargar la segunda plantilla
        $template2 = $this->twig->load('@partidos/compra.html.twig');
        $html2 = $template2->render($data2);

        // Combinar el contenido de ambas plantillas
        $combinedHtml = $html1 . $html2;

        // Envuelve el contenido de la plantilla en un objeto renderizable
        $content = [
            '#markup' => Markup::create($combinedHtml),
        ];

        // Agrega el contenido de la plantilla al bloque "Main page content"
        $build['main_page_content']['#markup'] = $content['#markup'];

        return $build;
    }
}
