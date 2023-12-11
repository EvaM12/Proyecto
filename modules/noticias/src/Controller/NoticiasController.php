<?php

/**
 * @file
 * Contains the NoticiasController class.
 *
 * This controller handles the display of noticias (news) content.
 */

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

/**
 * Defines a controller for noticias (news) content.
 */
class NoticiasController extends ControllerBase
{

    protected $twig;

    /**
     * Constructs a NoticiasController object.
     *
     * @param \Drupal\Core\Template\TwigEnvironment $twig
     *   The Twig environment service.
     */
    public function __construct(TwigEnvironment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * Crea un objeto NoticiasController.
     *
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     * La interfaz del contenedor.
     *
     * @return \Drupal\noticias\Controller\NoticiasController
     * El objeto NoticiasController.
     */
    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get('twig'),
        );
    }

    /**
     * Muestra el contenido de noticias sin ningún tipo específico.
     *
     * @return array
     * Un array renderizado que contiene el contenido de noticias.
     */
    public function notGeneral()
    {
        $data2 = [
            'titulo' => 'news'
        ];
        // Load the first template
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render($data2);

        // Load the second template
        $template2 = $this->twig->load('@noticias/noticias.html.twig');
        $html2 = $template2->render();

        // Combine the content of both templates
        $combinedHtml = $html1 . $html2;

        // Wrap the template content in a renderable object
        $content = [
            '#markup' => Markup::create($combinedHtml),
        ];

        // Add the template content to the "Main page content" block
        $build['main_page_content']['#markup'] = $content['#markup'];

        return $build;
    }

    /**
     * Muestra el contenido de noticias de un tipo específico.
     *
     * @param string $tipo
     * El tipo de contenido de noticias.
     * @param int $id
     * ID del contenido de noticias.
     *
     * @return array
     * Un array renderizado que contiene el contenido de noticias.
     */
    public function tipoNoticia($tipo, $id)
    {
        $data = [
            'titulo' => 'news'
        ];
        // Load the first template
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render($data);

        // Get the ID and type of noticias content
        if ($tipo == 'video') {
            // Load the second template
            $template2 = $this->twig->load('@noticias/video.html.twig');
            $html2 = $template2->render(['id' => $id]);
        } elseif ($tipo == 'news') {
            // Load the second template
            $template2 = $this->twig->load('@noticias/noticia.html.twig');
            $html2 = $template2->render(['id' => $id]);
        }

        // Combine the content of both templates
        $combinedHtml = $html1 . $html2;

        // Wrap the template content in a renderable object
        $content = [
            '#markup' => Markup::create($combinedHtml),
        ];

        // Add the template content to the "Main page content" block
        $build['main_page_content']['#markup'] = $content['#markup'];

        return $build;
    }
}
