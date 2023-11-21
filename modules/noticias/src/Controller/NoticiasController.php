<?php

namespace Drupal\noticias\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Config\ConfigFactoryInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Render\Element\Template;
use Drupal\Core\Render\RendererInterface;
use Symfony\Component\HttpFoundation\Response;
use Drupal\Core\Template\TwigEnvironment;
use Drupal\Core\Render\Markup;
use Drupal\general\Controller\GeneralController;

use Drupal\Core\Database\Database;
use Drupal\Core\Block\BlockPluginInterface;

class NoticiasController extends ControllerBase
{

    protected $twig;

    public function __construct(TwigEnvironment $twig)
    {
        $this->twig = $twig;
    }

    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get('twig'),
        );
    }

    // public function noticias()
    // {
    //     //ver como hacerlo con todas, aunque sean 2 de cada sin que se exceda el tiempo
    //     // URL de la API de ESPN
    //     $url = "https://site.api.espn.com/apis/site/v2/sports/soccer/esp.1/news";

    //     // Crear una conexión cURL
    //     $curl = curl_init($url);

    //     // Establecer opciones cURL
    //     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    //     // Realizar la solicitud HTTP GET
    //     $response = curl_exec($curl);

    //     // Verificar errores en la solicitud cURL
    //     if ($response === false) {
    //         echo "Error en la solicitud cURL: " . curl_error($curl);
    //         // Puedes manejar el error según tus necesidades
    //     } else {
    //         // Procesar la respuesta (decodificar el JSON)
    //         $newsData = json_decode($response, true);

    //         $news = $newsData['articles'];
    //         for ($i = 0; $i < sizeOf($news); $i++) {
    //             //obtener las categorias
    //             $categoria = '';
    //             for($j = 0; $j< sizeOf($news[$i]['categories']); $j++){
    //                 if(isset($news[$i]['categories'][$j]['description'])){
    //                     $categoria .= $news[$i]['categories'][$j]['description'] . ', ';
    //                 }
    //             }
    //             $categoria = substr($categoria, 0, -2);

    //             //obtener las noticias
    //             $noticia[$i] = [
    //                 'titular' => $news[$i]['headline'],
    //                 'descripcion' => $news[$i]['description'],
    //                 'enlace' => $news[$i]['links']['api']['news']['href'],
    //                 'categoria' => $categoria,
    //                 'imagen' => $news[$i]['images'][0]['url'],
    //                 'height' => $news[$i]['images'][0]['height'],
    //                 'width' => $news[$i]['images'][0]['width'],
    //                 'fecha' => $news[$i]['published']
    //             ];
    //             // titulo, descripcion, imagen(url, ancho y alto), categorias, fecha y enlace
    //             //pensar si necesito el ancho y el alto
    //         }
    //     }

    //     // Cerrar la conexión cURL
    //     curl_close($curl);

    //     //ordena el array en funcion de la fecha
    //     usort($noticia, function ($a, $b) {
    //         return $a['fecha'] <=> $b['fecha'];
    //     });

    //     return $noticia;
    // }

    // public function notGeneral()
    // {
    //     $data = [
    //         'noticias' => self::noticias()
    //     ];

    //     $parts = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
    //     $titulo = end($parts);

    //     $data2 = [
    //         'titulo' => $titulo
    //     ];
    //     // Cargar la primera plantilla
    //     $template1 = $this->twig->load('@general/cabecera.html.twig');
    //     $html1 = $template1->render($data2);

    //     // Cargar la segunda plantilla
    //     $template2 = $this->twig->load('@noticias/noticias.html.twig');
    //     $html2 = $template2->render($data);

    //     // Combinar el contenido de ambas plantillas
    //     $combinedHtml = $html1 . $html2;

    //     // Envuelve el contenido de la plantilla en un objeto renderizable
    //     $content = [
    //         '#markup' => Markup::create($combinedHtml),
    //     ];

    //     // Agrega el contenido de la plantilla al bloque "Main page content"
    //     $build['main_page_content']['#markup'] = $content['#markup'];

    //     return $build;
    // }

    public function notGeneral()
    {
        // $data = [
        //     'noticias' => self::noticias()
        // ];

        $parts = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
        $titulo = end($parts);

        $data2 = [
            'titulo' => $titulo
        ];
        // Cargar la primera plantilla
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render($data2);

        // Cargar la segunda plantilla
        $template2 = $this->twig->load('@noticias/noticias.html.twig');
        $html2 = $template2->render();

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

    public function tipoNoticia($tipo, $id)
    {
        $parts = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
        $titulo = end($parts);

        $data = [
            'titulo' => $titulo
        ];
        // Cargar la primera plantilla
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render($data);

        //obtener el id y el tipo de noticia
        if ($tipo == 'video') {
            // Cargar la segunda plantilla
            $template2 = $this->twig->load('@noticias/video.html.twig');
            $html2 = $template2->render(['id' => $id]);
        } elseif ($tipo == 'noticia') {
            // Cargar la segunda plantilla
            $template2 = $this->twig->load('@noticias/noticia.html.twig');
            $html2 = $template2->render(['id' => $id]);
        }

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
