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

/* @equipos/listaEquipos.html.twig */
class __TwigTemplate_a119dddb550fdaff589aee3679541893 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("equipos/listaEquipos"), "html", null, true);
        echo "
";
        // line 11
        echo "<div class=\"container bWht p-2 mt-3 pb-3\">
    <div class=\"d-block d-md-flex\">
        <div class=\"col-md-7 col-lg-8 col col-12 bWht pe-md-2\">
            <select name=\"liga\" id=\"liga\">
                <option value=\"esp.1\">Spanish LaLiga</option>
                <option value=\"eng.1\">English Premier League </option>
                <option value=\"ita.1\">Italian Serie A </option>
                <option value=\"ger.1\">German Bundesliga </option>
                <option value=\"fra.1\">French Ligue 1 </option>
                <option value=\"uefa.champions\">UEFA Champions League</option>
                <option value=\"uefa.europa\">UEFA Europa League</option>
                <option value=\"uefa.europa.conf\">UEFA Conference League</option>
            </select>
            <section class=\"equipos \"></section>
        </div>
        <section class=\"col-md-5 col-lg-4 col col-12 float-start bWht ps-md-2\">
            <h4>Points Table</h4>
            <div class=\"point-table w-100 overflow-hidden float-start text-center\">
            </div>
        </section>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@equipos/listaEquipos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@equipos/listaEquipos.html.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\equipos\\templates\\listaEquipos.html.twig");
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
