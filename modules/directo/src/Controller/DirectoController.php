<?php

namespace Drupal\directo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
use Drupal\Core\Template\TwigEnvironment;

use Drupal\Core\Render\Markup;
use Drupal\Core\Block\BlockPluginInterface;

class DirectoController extends ControllerBase
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

    public function listado()
    {

        $parts = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
        $titulo = end($parts);

        $data = [
            'titulo' => $titulo
        ];
        // Cargar la primera plantilla
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render($data);

        // Cargar la segunda plantilla
        $template2 = $this->twig->load('@directo/listado.html.twig');
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

    public function directo()
    {
        // Realizar una consulta a la base de datos.
        // $query = $this->database->select('partidos', 'pr')
        //     ->fields('pr', ['nombre', 'apellidos'])
        //     ->condition()
        //     ->execute();

        // Obtener los resultados.
        // $results = $query->fetchAll();

        // $data = [
        //     'results' => $results
        // ];


        $parts = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
        $titulo = end($parts);

        $data = [
            'titulo' => $titulo
        ];
        // Cargar la primera plantilla
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render($data);

        // Cargar la segunda plantilla
        $template2 = $this->twig->load('@general/inicio.html.twig');
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
}
