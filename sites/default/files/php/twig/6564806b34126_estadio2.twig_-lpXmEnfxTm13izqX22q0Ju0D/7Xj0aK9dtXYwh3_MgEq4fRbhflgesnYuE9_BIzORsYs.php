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

/* @partidos/estadios/estadio2.twig */
class __TwigTemplate_62b51f514b1916e8bfaa1873e20587f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'estadio' => [$this, 'block_estadio'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('estadio', $context, $blocks);
    }

    public function block_estadio($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div>
        <h1>Contenido del bloque Estadio2</h1>
        ";
        // line 5
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@partidos/estadios/estadio2.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@partidos/estadios/estadio2.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\partidos\\templates\\estadios\\estadio2.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                [],
                []
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
