<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/alltickets/template/block--alltickets_header.html.twig */
class __TwigTemplate_18bd0e72e07df51d5a4e1e77925f4d8d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("alltickets/header"), "html", null, true);
        echo "
";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("alltickets/general"), "html", null, true);
        echo "

<header>
\t<div class=\"logo\">
\t\t<a href=\"#top\">
\t\t\t<img src=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("themes/alltickets/assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
\t\t</a>
\t</div>
\t<ul class=\"menu\">
\t\t<li>
\t\t\t<a class=\"nav-link\" href=\"#home\">Partidos</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"nav-link\" href=\"#feature\">Noticias</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"nav-link\" href=\"#doc\">Equipos</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"nav-link\" href=\"#support\">Directo</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"nav-link d-md-none\" href=\"#support\">Inicio / Registro</a>
\t\t</li>
\t</ul>
\t<div>
\t\t<a href=\"sesion\" class=\"sesion\">Inicio / Registro</a>
\t</div>
\t<div class=\"header-bar d-md-none\">
\t\t<span></span>
\t\t<span></span>
\t\t<span></span>
\t</div>
</header>
";
    }

    public function getTemplateName()
    {
        return "themes/alltickets/template/block--alltickets_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/alltickets/template/block--alltickets_header.html.twig", "C:\\xampp\\htdocs\\AllTickets\\themes\\alltickets\\template\\block--alltickets_header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "file_url" => 7);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library', 'file_url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
