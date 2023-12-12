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
";
        // line 4
        echo "<header class=\"d-flex flex-row text-wrap position-fixed\">
\t<div class=\"logo\">
\t\t<a href=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "inicio\">
\t\t\t<img src=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("themes/alltickets/assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
\t\t</a>
\t</div>
\t<ul class=\"menu\">
\t\t<li>
\t\t\t<a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "matches\">Matches</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "news\">News</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "teams\">Teams</a>
\t\t</li>
\t\t<li>
            ";
        // line 21
        if ( !twig_test_empty(($context["email"] ?? null))) {
            // line 22
            echo "                <a class=\"nav-link d-md-none d-block\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            echo "finsesion\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 22, $this->source), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 24
            echo "                <a class=\"nav-link d-md-none d-block\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            echo "session\">Login / Sign up</a>
            ";
        }
        // line 26
        echo "\t\t</li>
\t</ul>
\t<div>
        ";
        // line 29
        if ( !twig_test_empty(($context["email"] ?? null))) {
            // line 30
            echo "            <a class=\"nav-link d-md-block d-none sesion\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            echo "finsesion\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 30, $this->source), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 32
            echo "            <a class=\"nav-link d-md-block d-none sesion\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            echo "sesion\">Login / Sign up</a>
        ";
        }
        // line 34
        echo "\t</div>
\t<div class=\"header-bar d-md-none d-block\">
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
        return array (  118 => 34,  112 => 32,  104 => 30,  102 => 29,  97 => 26,  91 => 24,  83 => 22,  81 => 21,  75 => 18,  69 => 15,  63 => 12,  55 => 7,  51 => 6,  47 => 4,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/alltickets/template/block--alltickets_header.html.twig", "C:\\xampp\\htdocs\\AllTickets\\themes\\alltickets\\template\\block--alltickets_header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "url" => 6, "file_url" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library', 'url', 'file_url']
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
