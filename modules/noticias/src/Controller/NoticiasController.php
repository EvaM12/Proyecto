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

    public function notGeneral()
    {
        $data2 = [
            'titulo' => 'news'
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
        $data = [
            'titulo' => 'news'
        ];
        // Cargar la primera plantilla
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render($data);

        //obtener el id y el tipo de noticia
        if ($tipo == 'video') {
            // Cargar la segunda plantilla
            $template2 = $this->twig->load('@noticias/video.html.twig');
            $html2 = $template2->render(['id' => $id]);
        } elseif ($tipo == 'news') {
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
