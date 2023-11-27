<?php

/**
 * @file
 * Contains Drupal\equipos\Controller\EquiposController.
 *
 * Defines a controller for the Equipos module.
 */

namespace Drupal\equipos\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Connection;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Render\RendererInterface;
use Drupal\Core\Template\TwigEnvironment;
use Drupal\Core\Render\Markup;

/**
 * Class EquiposController.
 *
 * Defines a controller for the Equipos module.
 */
class EquiposController extends ControllerBase
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
     * Devuleve una lista con los los jugadores del equipo indicado.
     *
     * @param string $equipo
     *   Nombre del equipo del que se obtendran los jugadores.
     *
     * @return array
     *   El array de los jugadores.
     */
    public function listaJugadores($equipo)
    {
        // Realizar una consulta a la base de datos.
        $query = $this->database->select('jugadores', 'jug')
            ->fields('jug', ['idJugador'])
            ->condition('nombreEquipo', $equipo, '=')
            ->execute()
            ->fetchAll(\PDO::FETCH_OBJ);


        $jugadores = array();
        foreach ($query as $row) {
            $jugadores[] = [
                'idJugador' => $row->idJugador
            ];
        }
        return $jugadores;
    }


    public function agregarEspacios($cadena)
    {
        // Aplicar expresión regular para agregar espacios antes de mayúsculas después de minúsculas
        $cadenaFormateada = preg_replace('/([a-z])([A-Z])/', '$1 $2', $cadena);

        return $cadenaFormateada;
    }

    /**
     * Devuelve el contenido, obtenido de renderizar las plantillas, que aparecera en el bloque 'contenido', el cual sera el listado de equipos.
     *
     * @return array
     *   Codigo del listado de equipos.
     */
    public function equipos()
    {
        $parts = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
        $titulo = end($parts);

        $data = [
            'titulo' => $titulo,
        ];

        // Cargar la primera plantilla
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render($data);

        // Cargar la segunda plantilla
        $template2 = $this->twig->load('@equipos/listaEquipos.html.twig');
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

    /**
     * Devuelve el contenido, obtenido de renderizar las plantillas, que aparecera en el bloque 'contenido', el cual sera la informacion del equipo.
     *
     * @param string $nombre
     *   Nombre del equipo del que se obtendran los jugadores.
     *
     * @return array
     *   Codigo de los detalles del equipo.
     */
    public function jugadores($nombre)
    {
        $nombre = $this->agregarEspacios($nombre);
        $jugadores = $this->listaJugadores($nombre);

        $parts = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
        $titulo = end($parts);

        $data = [
            'titulo' => $titulo
        ];

        $data2 = [
            'nombre' => $nombre,
            'jugadores' => $jugadores
        ];

        // Cargar la primera plantilla
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render($data);

        // Cargar la segunda plantilla
        $template2 = $this->twig->load('@equipos/equipo.html.twig');
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
