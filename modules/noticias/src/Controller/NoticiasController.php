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

        // Cargar la primera plantilla
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render();

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

    /*
        public function pTipoNoticia($tipo,$id){
                return [
                    '#markup' => $this->t('El valor de la variable es: @variable', ['@variable' => $var]),
                ];
        }
    */
    
    public function tipoNoticia($tipo, $id)
    {

        // Cargar la primera plantilla
        $template1 = $this->twig->load('@general/cabecera.html.twig');
        $html1 = $template1->render();

        //obtener el id y el tipo de noticia
        if($tipo = 'video'){
            // Cargar la segunda plantilla
            $template2 = $this->twig->load('@noticias/video.html.twig');
            $html2 = $template2->render();
        } else {
            // Cargar la segunda plantilla
            $template2 = $this->twig->load('@noticias/noticia.html.twig');
            $html2 = $template2->render();
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

    /*
    public function custom($var){

        global $ruta;
        // echo 'TestController: 246 paso '.$var;
        $var = $this->preparaURL($var);
       
        if ($var!==false){
            if($var == 'menu.php'){
                $template3 = $this->twig->load('@test/body.html.twig');
                $html3 = $template3->render();

                $archivo = $this->ruta.'master/configmenudrupal.php';
                ob_start();
                require $archivo;
                $content = ob_get_contents();
                ob_end_clean();
                
                $contenido = $html3 . $content. $this->html2;
                
            } else {
                
                if (file_exists($ruta.'custom/omesa/controllers/'.$var.'.php')){
                    require $ruta.'custom/omesa/controllers/drupalomesa.php';
                    require $ruta.'custom/omesa/controllers/'.$var.'.php';
                    $var=str_replace('.php','',$var);
                    $fichero='\\custom\\omesa\\controllers\\'.$var;
                    $drupal = new $fichero($sel);
                    $content = $drupal->render($var, $drupal->ejecuta(),0); 
                }
                else { //es por aqui
                    $dir = str_replace("deportes_2.0v2", "deportes2.0", $var);

                    $base = dirname($var);
                    $var=explode('/',$var);

                    $var=end($var);
                    $var=explode('?',$var);
                    $var=$var[0];
                    
                    //estas lineas son para la parte del contenido de la pagina
                    ob_start();
                    $ruta=$this->generaRuta($this->ruta);
                    require 'C:/web_desarrollo/deportes2.0/'.$var;
                    $content = ob_get_contents();
                    ob_end_clean();
                    
                    //estas lineas son para la parte de la cabecera de la pagina
                    require_once 'c:\Web_Desarrollo\deportes2.0\funciones\funcionesportada.php';
                    $ref = explode('/',$_SERVER["REQUEST_URI"]);
                    $resul = enlacesHeader(99, cargaFichero(99,'',''), '');
                    echo $resul;

                    $tagToRemove = 'nav';
                    $contentWithoutTag = preg_replace("/<$tagToRemove.*?<\/$tagToRemove>/s", "", $content);
                    $tagToRemove = 'aside';
                    $contentWithoutTag = preg_replace("/<$tagToRemove.*?<\/$tagToRemove>/s", "", $contentWithoutTag);

                }
                
                $data = [
                    'menu' => $this->menu_tree2,
                    'sel' => '$ultimaPalabra',
                    'base' => $base
                ];
                
                $data2 = [
                    'contenido' => $contentWithoutTag
                ];

                $template1 = $this->twig->load('@test/header.html.twig');
                $this->html1 = $template1->render($data);
                
                $template2 = $this->twig->load('@test/body.html.twig');
                $this->html3 = $template2->render($data2);
                $contenido = $this->html1 . $this->html3 . $this->html2;
            }
        }
        $content = [
            '#markup' => Markup::create($contenido),
        ];

        $build['main_page_content']['#markup'] = $content['#markup'];
        return $build;
    }
    */

    /*
    use Drupal\Core\Menu\MenuLinkTreeInterface;

class TestController extends ControllerBase {
    protected $twig;
    protected $general;
    protected $renderer;
    protected $menuController;
    protected $menuLinkTree;
    protected $menu_tree2;
    protected $html1;
    protected $html2;
    protected $html3;
    protected $ruta;
  
    public function __construct(TwigEnvironment $twig, RendererInterface $renderer, MenuLinkTreeInterface $menuLinkTree) {
        $this->general = new GeneralController($twig);
      
        $this->twig = $twig;
        $this->renderer= $renderer;
        $this->menuLinkTree = $menuLinkTree;
        $this->cargaMenu('1');
        $this->cargaMenu('2');
        
        $data = [
            'menu' => $this->menu_tree2
        ];

        $template1 = $this->twig->load('@test/header.html.twig');
        $this->html1 = $template1->render($data);
        echo $this->html1;
        exit;

        $template2 = $this->twig->load('@test/footer.html.twig');
        $this->html2 = $template2->render();

        $ruta="C:/web_desarrollo/deportes2.0/";
        $this->ruta=$ruta;
     
    }
    
    public static function create(ContainerInterface $container) {
        return new static(
            $container->get('twig'),
            $container->get('renderer'),
            $container->get('menu.link_tree'),
            // $container->get('menu.controller')
        );
    }
    
    public function content() {
        //Get drupal menu
       
        
        $_SESSION['drupal']=1;
       

        ob_start();
        require $this->ruta.'index.php';
        $data	= ob_get_contents();
        ob_end_clean();
 
        $combinado = $this->html1 . $data . $this->html2;

        $content = [
            '#markup' => Markup::create($combinado),
        ];
       
        // Agrega el contenido de la plantilla al bloque "Main page content"
        $build['main_page_content']['#markup'] = $content['#markup'];
        return $build;
        
    }

    public function preparaURL($var){
        // buscar $var en la tabla menu_link_content_data y devolver la url, de la cual se cargara el contenido
        // si no existe en la tabla, se cargara redirigira al index.php 
        if($var === 'index.php' || $var === 'zonaabo.php'){
            return 'https://www.ofi.omesa.es/dev/deportes_2.0v2/'.$var;
        }
        $database = Database::getConnection();

        // Realizamos una consulta usando PDO.
        $query = $database->select('menu_link_content_data', 'menu')
        ->fields('menu', ['description','link__uri'])
        ->condition('menu.menu_name', ['1','2'], 'IN');
        $result = $query->execute()->fetchAll();

        foreach($result as $row){
            if($row->description === $var){
                return $row->link__uri;
            }
            $paso = false;
        }

        if($paso === false){
            return false;
        }
    }

    public function dameDatos($var){
        $database = Database::getConnection();

        // Realizamos una consulta usando PDO.
        $query = $database->select('menu_link_content_data', 'menu')
        ->fields('menu', ['description','title','link__uri'])
        ->condition('menu.menu_name', ['1','2'], 'IN');
        $result = $query->execute()->fetchAll();

        foreach($result as $row){
            if($row->link__uri === 'https://www.ofi.omesa.es'.$var){
                $datos = [$row->title, $row->description];
                return $datos;
            }
            $paso = false;
        }

        if($paso === false){
            return false;
        }
    }
    
    public function master() {
        $template3 = $this->twig->load('@test/master.html.twig');
        $html3 = $template3->render();

        // Envuelve el contenido de la plantilla en un objeto renderizable
        $content = [
            '#markup' => Markup::create($html3),
        ];
    
        // Agrega el contenido de la plantilla al bloque "Main page content"
        $build['main_page_content']['#markup'] = $content['#markup'];
    
        return $build;
    }
    //function to read a url and put the get params in an array
    public function getParams($url){
        $url = explode('?', $url);
        $params = [];
        if ($url[1] == '')
            return $params;
        $url = $url[1];
        $url = explode('&', $url);
       
        foreach ($url as $key => $value) {
            $value = explode('=', $value);
            $params[$value[0]] = $value[1];
        }
        return $params;
    }
    function generaRuta($url){
        $params=$this->getParams($url);
        $params['session_id']=session_id();
 
        $cadena='';
        foreach ($params as $key=>$value){
            $cadena.=$value;
        }
        $cadena = md5('COMESA' . $cadena);
        $params['control']=$cadena;
        $this->addParams($params);
        return $url;

    }
    //function to add the get params to the url
    public function addParams($params){
        $_GET=$params;
    }

    public function custom($var){

        global $ruta;
        // echo 'TestController: 246 paso '.$var;
        $var = $this->preparaURL($var);
       
        if ($var!==false){
            if($var == 'menu.php'){
                $template3 = $this->twig->load('@test/body.html.twig');
                $html3 = $template3->render();

                $archivo = $this->ruta.'master/configmenudrupal.php';
                ob_start();
                require $archivo;
                $content = ob_get_contents();
                ob_end_clean();
                
                $contenido = $html3 . $content. $this->html2;
                
            } else {
                
                if (file_exists($ruta.'custom/omesa/controllers/'.$var.'.php')){
                    require $ruta.'custom/omesa/controllers/drupalomesa.php';
                    require $ruta.'custom/omesa/controllers/'.$var.'.php';
                    $var=str_replace('.php','',$var);
                    $fichero='\\custom\\omesa\\controllers\\'.$var;
                    $drupal = new $fichero($sel);
                    $content = $drupal->render($var, $drupal->ejecuta(),0); 
                }
                else { //es por aqui
                    $dir = str_replace("deportes_2.0v2", "deportes2.0", $var);

                    $base = dirname($var);
                    $var=explode('/',$var);

                    $var=end($var);
                    $var=explode('?',$var);
                    $var=$var[0];
                    
                    //estas lineas son para la parte del contenido de la pagina
                    ob_start();
                    $ruta=$this->generaRuta($this->ruta);
                    require 'C:/web_desarrollo/deportes2.0/'.$var;
                    $content = ob_get_contents();
                    ob_end_clean();
                    
                    //estas lineas son para la parte de la cabecera de la pagina
                    require_once 'c:\Web_Desarrollo\deportes2.0\funciones\funcionesportada.php';
                    $ref = explode('/',$_SERVER["REQUEST_URI"]);
                    $resul = enlacesHeader(99, cargaFichero(99,'',''), '');
                    echo $resul;

                    $tagToRemove = 'nav';
                    $contentWithoutTag = preg_replace("/<$tagToRemove.*?<\/$tagToRemove>/s", "", $content);
                    $tagToRemove = 'aside';
                    $contentWithoutTag = preg_replace("/<$tagToRemove.*?<\/$tagToRemove>/s", "", $contentWithoutTag);

                }
                
                $data = [
                    'menu' => $this->menu_tree2,
                    'sel' => '$ultimaPalabra',
                    'base' => $base
                ];
                
                $data2 = [
                    'contenido' => $contentWithoutTag
                ];

                $template1 = $this->twig->load('@test/header.html.twig');
                $this->html1 = $template1->render($data);
                
                $template2 = $this->twig->load('@test/body.html.twig');
                $this->html3 = $template2->render($data2);
                $contenido = $this->html1 . $this->html3 . $this->html2;
            }
        }
        $content = [
            '#markup' => Markup::create($contenido),
        ];

        $build['main_page_content']['#markup'] = $content['#markup'];
        return $build;
    }

    public function customDrupal(){

        global $ruta;
        $ref = explode('/',$_SERVER["REQUEST_URI"]);
        $fichero = $ref[4];
        $fichero = str_replace(' ', '_', $fichero);

        $dir = str_replace("deportes_2.0v2", "deportes2.0", 'https://www.ofi.omesa.es/dev/deportes_2.0v2/index.php');
        $base = dirname(str_replace('custom','',$_SERVER["REQUEST_URI"]));
        //estas lineas son para la parte del contenido de la pagina
        ob_start();
        require 'C:/web_desarrollo/deportes2.0/index.php';
        $content = ob_get_contents();
        ob_end_clean();
        
        //cojo el codigo de la cabecera y el footer
        $posicion = strpos($content, '<div id="pie"');
        $posicion1 = strpos($content, '<head>');
        $posicion2 = strpos($content, '</head>');

        if($posicion !== false){
            $footer = substr($content, $posicion);
        }
        
        if($posicion1 !== false && $posicion2 !== false){
            $head = substr($content, $posicion1, $posicion2);
        }

        $cookie = '
        <div id="cookieNoticeContent">
            Utilizamos cookies para hacer la navegación en nuestra web de Gestión Deportiva más personalizada y eficiente. Para más información consulta 
            <a href="https://mrie.es/politica-de-cookies/">nuestra política de cookies</a>
            <br>
            <button class="btn btn-cookie" onclick="OcultaAviso();h(\'cookieNotice\')">Cerrar </button>
        </div>';
        
        //arreglo los enlaces a las imagenes
        $pos = strpos($footer, 'src="clientes');
        if($pos !== false){
            $footer = preg_replace('/src="clientes/', 'src="https://www.ofi.omesa.es/dev/deportes2.0/clientes', $footer);
        }

        //estas lineas son para la parte de la cabecera de la pagina
        require_once 'c:\Web_Desarrollo\deportes2.0\funciones\funcionesportada.php';
        $datos = $this->dameDatos($_SERVER["REQUEST_URI"]);
        $resul = enlacesHeaderV2(99, cargaFichero(99,'',''), '', [$datos[1] ,$datos[0], 'datos/uploads/02032023012518.jpg']);
        echo $resul;
                
        //tratamiento de datos
        $dataHeader = [
            'menu' => $this->menu_tree2,
            'sel' => '$ultimaPalabra',
            'base' => $base
        ];
        
        $dataBody = [
            'fichero' => $fichero.'.html.twig',
            'head' => $head,
            'cookie' => $cookie
        ];

        $dataFooter = [
            'footer' => $footer
        ];

        $template1 = $this->twig->load('@test/header.html.twig');
        $this->html1 = $template1->render($dataHeader);
        
        $template3 = $this->twig->load('@test/bodyDrupal.html.twig');
        $this->html3 = $template3->render($dataBody);

        $template2 = $this->twig->load('@test/footerDrupal.html.twig');
        $this->html2 = $template2->render($dataFooter);

        //renderizado de datos
        $contenido = $this->html1 . $this->html3 . $this->html2;
            
        $content = [
            '#markup' => Markup::create($contenido),
        ];

        $build['main_page_content']['#markup'] = $content['#markup'];
        return $build;
    }

    //hay que ir a los var.php
    public function cargaMenu($menu){
        $menuController = new MenuController(\Drupal::database());
        $sub_nav = \Drupal::menuTree()->load($menu, new \Drupal\Core\Menu\MenuTreeParameters());
        $menuController->generateSubMenuTree($this->menu_tree2[$menu], $sub_nav);
    }

    public function generico(){
        $content = [
            '#markup' => Markup::create('Hola mundo'),
        ];
        $build['main_page_content']['#markup'] = $content['#markup'];

        return $build;
    }

    public function prueba(){
        return 'hola desde testController';
    }

    public function bbdd() {
        // Obtenemos la conexión a la base de datos.
        $database = Database::getConnection();

        // Realizamos una consulta usando PDO.
        $query = $database->select('menu_link_content_field_revision', 'menu')
        ->fields('menu', ['title']);
        // ->condition('condicion', 'valor');
        
        $result = $query->execute()->fetchAll();

        // Hacer algo con el resultado.
        foreach ($result as $row) {
        // Acceder a los valores de las columnas.
        $columnValue = $row->title;
        echo $columnValue;
        }

        return 'Entro';
    }
}
    */
}
