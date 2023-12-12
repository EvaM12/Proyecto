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

/* @noticias/noticias.html.twig */
class __TwigTemplate_eb256df1b979bf50c76812ccd91b50d5 extends Template
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
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("noticias/listaNoticias"), "html", null, true);
        echo "

";
        // line 5
        echo "<div class=\"container d-flex flex-lg-row flex-column p-4\">
    <div class=\"float-start col col-12 \">
        <select name=\"liga\" id=\"liga\" class=\"m-3\">
            <option value=\"todas\">All leagues</option>
            <option value=\"eng.1\">English Premier League</option>
            <option value=\"esp.1\">Spanish LaLiga EA Sports </option>
            <option value=\"ita.1\">Italian Serie A</option>
            <option value=\"ger.1\">German Bundesliga</option>
            <option value=\"fra.1\">French Ligue 1</option>
            <option value=\"uefa.champions\">UEFA Champions League</option>
            <option value=\"uefa.europa\">UEFA Europa League</option>
            <option value=\"uefa.europa.conf\">UEFA Conference League</option>
        </select>
        <section class=\"col col-12 ps-lg-2 pe-lg-2\" id=\"articles\"></section>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@noticias/noticias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@noticias/noticias.html.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\noticias\\templates\\noticias.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array("attach_library" => 2);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library']
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
