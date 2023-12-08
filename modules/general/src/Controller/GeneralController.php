<?php

namespace Drupal\general\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Connection;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Render\RendererInterface;
use Drupal\Core\Template\TwigEnvironment;
use Drupal\Core\Render\Markup;
use Symfony\Component\HttpFoundation\RequestStack;

class GeneralController extends ControllerBase
{
    protected $database;
    protected $renderer;
    protected $twig;

    public function __construct(Connection $database, TwigEnvironment $twig, RendererInterface $renderer)
    {
        $this->twig = $twig;
        $this->database = $database;
        $this->renderer = $renderer;
    }

    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get('database'),
            $container->get('twig'),
            $container->get('renderer')
        );
    }

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
            ->range(0, 10) // Mostrar solo los primeros 20 resultados
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
                        "local" => $partidosData["competitions"][0]["competitors"][0]["team"]["shortDisplayName"],
                        "logoLocal" => $partidosData["competitions"][0]["competitors"][0]["team"]["logo"],
                        "visitante" => $partidosData["competitions"][0]["competitors"][1]["team"]["shortDisplayName"],
                        "logoVisitante" => $partidosData["competitions"][0]["competitors"][1]["team"]["logo"],
                        "anio" => $anio,
                        "mes" => date("F", mktime(0, 0, 0, $mes, 1)),
                        "dia" => $dia,
                        "hora" => $hora
                    ];
                }
            }
        }
        return $listaPartidos;
    }

    public function noticias()
    {
        //ver como hacerlo con todas, aunque sean 2 de cada sin que se exceda el tiempo
        // URL de la API de ESPN
        $url = "https://site.api.espn.com/apis/site/v2/sports/soccer/esp.1/news";

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
            $newsData = json_decode($response, true);

            $news = $newsData['articles'];
            for ($i = 0; $i < 3; $i++) {
                //obtener las categorias
                $categoria = '';
                for ($j = 0; $j < sizeOf($news[$i]['categories']); $j++) {
                    if (isset($news[$i]['categories'][$j]['description'])) {
                        $categoria .= $news[$i]['categories'][$j]['description'] . ', ';
                    }
                }

                $trozos = explode('/', $news[$i]['links']['api']['news']['href']);
                $id = end($trozos);

                if (strpos($news[$i]['links']['api']['news']['href'], 'video') !== false) {
                    $enlace = 'http://localhost/AllTickets/news/video/' . $id;
                } else {
                    $enlace = 'http://localhost/AllTickets/news/news/' . $id;
                }

                $fechaOriginal = $news[$i]['published'];
                $fechaObjeto = date_create($fechaOriginal);
                $fecha = date_format($fechaObjeto, 'j F Y H:i');


                //obtener las noticias
                $noticia[$i] = [
                    'titular' => $news[$i]['headline'],
                    'enlace' => $enlace,
                    'imagen' => $news[$i]['images'][0]['url'],
                    'height' => $news[$i]['images'][0]['height'],
                    'width' => $news[$i]['images'][0]['width'],
                    'fecha' => $fecha
                ];
                // titulo, descripcion, imagen(url, ancho y alto), categorias, fecha y enlace
                //pensar si necesito el ancho y el alto
            }
        }

        // Cerrar la conexión cURL
        curl_close($curl);

        //ordena el array en funcion de la fecha
        usort($noticia, function ($a, $b) {
            return $a['fecha'] <=> $b['fecha'];
        });

        return $noticia;
    }

    public function inicio()
    {
        $data = [
            'titulo' => 'AllTickets'
        ];

        $partidos = $this->listaPartidos();
        $dataLista = [
            'partidos' => $partidos,
            'noticias' => $this->noticias()
        ];

        // Cargar la primera plantilla
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render($data);

        // Cargar la segunda plantilla
        $template2 = $this->twig->load('@general/inicio.html.twig');
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
}
