<?php

namespace Drupal\sesion\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
use Drupal\Core\Template\TwigEnvironment;

use Drupal\Core\Render\Markup;
use Drupal\Core\Block\BlockPluginInterface;
use Symfony\Component\HttpFoundation\RequestStack;


class SesionController extends ControllerBase
{

    protected $twig;
    protected $request;

    public function __construct(TwigEnvironment $twig, RequestStack $requestStack)
    {
        $this->twig = $twig;
        $this->request = $requestStack->getCurrentRequest();
    }

    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get('twig'),
            $container->get('request_stack'),
        );
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

    public function sesion()
    {
        // si existe el datos que recibo por post hago la funcion, sino nada

        $parts = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
        $titulo = end($parts);

        $data = [
            'titulo' => $titulo
        ];

        $dataSesion = [
            'redireccion' => '',
            'fallo' => ''
        ];

        if ($this->request->request->get('SignIn') !== null) {
            if ($this->inicioSesion($this->request->request->get('userIn'), $this->request->request->get('passIn'))) {
                $dataSesion = [
                    'redireccion' => '<script>window.location.href = "http://localhost/AllTickets/inicio"</script>'
                ];
            } else {
                $dataSesion = [
                    'fallo' => '<div class="error mb-3 p-3 d-flex flex-row"><img src="https://i.imgur.com/GnyDvKN.png" width="30" height="30"><p class="m-0">Incorrect email or password.</p></div>'
                ];
            }
        }

        if ($this->request->request->get('SignUp') !== null) {
            if ($this->registro($this->request->request->get('name'), $this->request->request->get('surname'), $this->request->request->get('pass'), $this->request->request->get('email'), $this->request->request->get('phone'))) {
                //ir a pagina de inicio y enviar mail
                $dataSesion = [
                    'redireccion' => '<script>window.location.href = "http://localhost/AllTickets/inicio"</script>'
                ];
            } else {
                $dataSesion = [
                    'fallo' => '<div class="error mb-3 p-3 d-flex flex-row"><img src="https://i.imgur.com/GnyDvKN.png" width="30" height="30"><p class="m-0">This user already exists in our page.</p></div>'
                ];
            }
        }

        // Cargar la primera plantilla
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render($data);

        // Cargar la segunda plantilla
        $template2 = $this->twig->load('@sesion/sesion.html.twig');
        $html2 = $template2->render($dataSesion);

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

    public function finsesion()
    {
        if (isset($_SESSION['IDuser'])) {
            session_destroy();
            $dataSesion = [
                'redireccion' => '<script>window.location.href = "http://localhost/AllTickets/inicio"</script>',
                'fallo' => '',
                'pass' => '',
                'email' => ''
            ];
        }
        // Cargar la segunda plantilla
        $template2 = $this->twig->load('@sesion/sesion.html.twig');
        $html2 = $template2->render($dataSesion);
        // Envuelve el contenido de la plantilla en un objeto renderizable
        $content = [
            '#markup' => Markup::create($html2),
        ];

        // Agrega el contenido de la plantilla al bloque "Main page content"
        $build['main_page_content']['#markup'] = $content['#markup'];

        return $build;
    }
}
