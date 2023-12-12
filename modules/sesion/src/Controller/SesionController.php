<?php
/**
 * @file
 * Contains the SesionController class.
 *
 * This class is responsible for handling user sessions, including login and registration functionality.
 * It interacts with the database to validate user credentials and perform necessary operations.
 *
 * @ingroup sesion
 */

namespace Drupal\sesion\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
use Drupal\Core\Template\TwigEnvironment;

use Drupal\Core\Render\Markup;
use Drupal\Core\Block\BlockPluginInterface;
use Symfony\Component\HttpFoundation\RequestStack;


/**
 * Class SesionController
 *
 * This class is responsible for handling session-related functionality such as user login, registration, and logout.
 */
class SesionController extends ControllerBase
{
    // Class properties
    protected $twig;
    protected $request;

    /**
     * SesionController constructor.
     *
     * @param TwigEnvironment $twig The Twig environment object for rendering templates.
     * @param RequestStack $requestStack The request stack object for accessing the current request.
     */
    public function __construct(TwigEnvironment $twig, RequestStack $requestStack)
    {
        $this->twig = $twig;
        $this->request = $requestStack->getCurrentRequest();
    }

    /**
     * Crear una nueva instancia de la clase SesionController.
     *
     * @param ContainerInterface $container La interfaz del contenedor para la inyección de dependencia.
     * @return SesionController La nueva instancia creada de la clase SesionController.
     */
    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get('twig'),
            $container->get('request_stack'),
        );
    }

    /**
     * Maneja el proceso de login del usuario.
     *
     * @param string $mail Correo electrónico del usuario.
     * @param string $passwd La contraseña del usuario.
     * @return bool Devuelve true si el login es exitoso, false en caso contrario.
     */
    public function inicioSesion($mail, $passwd)
    {
        // Database connection
        $mysql = mysqli_connect("localhost", "root", "");
        $mysql->select_db("alltickets");

        // Check if there is a user with the given credentials and retrieve their data
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

    /**
     * Maneja el proceso de registro de usuarios.
     *
     * @param string $nombre El nombre del usuario.
     * @param string $surname El apellido del usuario.
     * @param string $passwd La contraseña del usuario.
     * @param string $email Correo electrónico del usuario.
     * @param string $phone Número de teléfono del usuario.
     * @return bool Devuelve true si el registro se ha realizado correctamente, false en caso contrario.
     */
    public function registro($name, $surname, $passwd, $email, $phone)
    {
        // Database connection
        $mysql = mysqli_connect("localhost", "root", "");
        $mysql->select_db("alltickets");

        // Insertar informacion en la tabla
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

    /**
     * Manejar la página de sesión.
     *
     * @return array El contenido renderizado de la página de sesión.
     */
    public function sesion()
    {
        // Comprobar si se reciben datos vía POST y realizar la acción correspondiente
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
                    'redireccion' => '<script>window.location.href = "'.$_SERVER["HTTP_HOST"].'/inicio"</script>'
                ];
            } else {
                $dataSesion = [
                    'fallo' => '<div class="error mb-3 p-3 d-flex flex-row"><img src="https://i.imgur.com/GnyDvKN.png" width="30" height="30"><p class="m-0">Incorrect email or password.</p></div>'
                ];
            }
        }

        if ($this->request->request->get('SignUp') !== null) {
            if ($this->registro($this->request->request->get('name'), $this->request->request->get('surname'), $this->request->request->get('pass'), $this->request->request->get('email'), $this->request->request->get('phone'))) {
                // Go to the home page and send email
                $dataSesion = [
                    'redireccion' => '<script>window.location.href = "'.$_SERVER["HTTP_HOST"].'/inicio"</script>'
                ];
            } else {
                $dataSesion = [
                    'fallo' => '<div class="error mb-3 p-3 d-flex flex-row"><img src="https://i.imgur.com/GnyDvKN.png" width="30" height="30"><p class="m-0">This user already exists in our page.</p></div>'
                ];
            }
        }

        // Load the first template
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render($data);

        // Load the second template
        $template2 = $this->twig->load('@sesion/sesion.html.twig');
        $html2 = $template2->render($dataSesion);

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
     * Maneja el proceso de cierre de sesión.
     *
     * @return array El contenido renderizado después de cerrar la sesión.
     */
    public function finsesion()
    {
        if (isset($_SESSION['IDuser'])) {
            session_destroy();
            $dataSesion = [
                'redireccion' => '<script>window.location.href = "'.$_SERVER["HTTP_HOST"].'/inicio"</script>',
                'fallo' => '',
                'pass' => '',
                'email' => ''
            ];
        }
        // Load the second template
        $template2 = $this->twig->load('@sesion/sesion.html.twig');
        $html2 = $template2->render($dataSesion);
        // Wrap the template content in a renderable object
        $content = [
            '#markup' => Markup::create($html2),
        ];

        // Add the template content to the "Main page content" block
        $build['main_page_content']['#markup'] = $content['#markup'];

        return $build;
    }
}
