<?php

namespace Drupal\prueba\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Connection;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Render\RendererInterface;
use Drupal\Core\Template\TwigEnvironment;
use Drupal\Core\Render\Markup;

/**
 * Class PruebaController.
 */
class PruebaController extends ControllerBase
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
        $this->renderer= $renderer;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(ContainerInterface $container) {
        return new static(
            $container->get('database'),
            $container->get('twig'),
            $container->get('renderer')
        );
    }

    /**
     * Método de ejemplo para leer datos de la base de datos.
     */
    public function prueba()
    {
        // Realizar una consulta a la base de datos.
        // $query = $this->database->select('prueba', 'pr')
        //     ->fields('pr', ['nombre', 'apellidos'])
        //     ->execute();

        // Obtener los resultados.
        // $results = $query->fetchAll();

        // $data = [
        //     'results' => $results
        // ];

        $data = [
            'datos' => 'funciona'
        ];

        $template = $this->twig->load('@prueba/prueba.html.twig');
        // $html = $template->render();
        $html = $template->render($data);

        // Devuelve el HTML renderizado como respuesta.
        return [
            '#markup' => Markup::create($html),
        ];
    }
}
