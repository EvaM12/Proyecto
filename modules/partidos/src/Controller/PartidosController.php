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

    /**
     * Constructor.
     *
     * @param \Drupal\Core\Database\Connection $database
     *   La conexión a la base de datos.
     * @param \Drupal\Core\Template\TwigEnvironment $twig
     *   El entorno Twig.
     * @param \Drupal\Core\Render\RendererInterface $renderer
     *   El renderizador.
     */
    public function __construct(Connection $database, TwigEnvironment $twig, RendererInterface $renderer)
    {
        $this->database = $database;
        $this->twig = $twig;
        $this->renderer = $renderer;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get('database'),
            $container->get('twig'),
            $container->get('renderer')
        );
    }

    /**
     * Devuleve una lista con los proximos partidos.
     *
     * @return array
     *   El array de los proximos partidos.
     */
    public function listaPartidos()
    {
        //seleccionar de la bbdd los partidos cuya fecha sea mayor a la actual
        //si no hay partidos, mostrar un mensaje de que no hay partidos
        //si hay partidos, mostrarlos en una tabla

        $fechaActual = date("Y-m-d\TH:i\Z");

        // Realizar una consulta a la base de datos.
        $query = $this->database->select('partidos', 'par')
            ->fields('par', ['idPartido', 'idLiga', 'fecha'])
            ->condition('fecha', $fechaActual, '>=')
            ->orderBy('fecha', 'ASC') // Ordenar por fecha de forma ascendente
            ->range(0, 30) // Mostrar solo los primeros 20 resultados
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
     * Devuelve el equipo que juega como local en el partido asociado con ese identtificador.
     *
     * @param int $id
     *   El ID del partido a buscar.
     *
     * @return array
     *   El array con los datos del partido.
     */
    public function local($id)
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

                        "fecha" => $partidosData["date"],
                    ];
                }
            }
        }
        return $listaPartidos;
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
        $local = $this->local($id);

        $parts = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
        $titulo = end($parts);

        $data = [
            'titulo' => $titulo
        ];

        $data2 = [
            'id' => $id,
            'local' => $local
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
}
