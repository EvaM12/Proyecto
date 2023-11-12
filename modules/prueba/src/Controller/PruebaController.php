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
     * Método de ejemplo para leer datos de la base de datos.
     */

    public function datos(){
        //probar a meter el codigo js aqui y despues los resultados meterlos en variables o arrays
    }

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
        // URL de la API de ESPN
        // $api_url = "https://site.api.espn.com/apis/site/v2/sports/soccer/esp.1/teams";

        // // Realizar la solicitud GET a la API
        // $response = file_get_contents($api_url);

        // // Verificar si la solicitud fue exitosa
        // if ($response === FALSE) {
        //     die('Error al hacer la solicitud a la API');
        // }

        // // Decodificar la respuesta JSON a un array asociativo
        // $datos = json_decode($response, true);

        // // Verificar si la decodificación fue exitosa
        // if ($datos === NULL) {
        //     die('Error al decodificar la respuesta JSON');
        // }

        // $data = [
        //     'datos' => $datos
        // ];

        $template = $this->twig->load('@prueba/prueba.html.twig');
        $html = $template->render();
        // $html = $template->render($data);

        // Devuelve el HTML renderizado como respuesta.
        return [
            '#markup' => Markup::create($html),
        ];
    }
}
