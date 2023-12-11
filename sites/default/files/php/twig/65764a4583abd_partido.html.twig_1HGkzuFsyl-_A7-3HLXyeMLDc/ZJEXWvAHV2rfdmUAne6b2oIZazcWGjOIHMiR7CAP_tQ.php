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

/* @partidos/partido.html.twig */
class __TwigTemplate_c2c6bff19fd74efee3e7f2bf652e5282 extends Template
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
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("partidos/datosPartidos"), "html", null, true);
        echo "

<section class=\"cont container mt-4 p-0 pb-2\">
\t";
        // line 10
        echo "\t<section class=\"cabecera d-flex align-items-center flex-row p-3\">
\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["local"]);
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 12
            echo "\t\t\t";
            $context["id"] = twig_get_attribute($this->env, $this->source, $context["local"], "id", [], "any", false, false, true, 12);
            // line 13
            echo "\t\t\t<img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl((("modules/partidos/assets/images/" . twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "competicion", [], "any", false, false, true, 13), 13, $this->source), [" " => ""])) . ".png")), "html", null, true);
            echo "\" width=\"150\" height=\"150\">
\t\t\t<div class=\"ps-3\">
\t\t\t\t<p class=\"fw-light m-0 h4\">";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "competicion", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t<p class=\"fw-bold h2\">";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "local", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "
\t\t\t\t\tvs
\t\t\t\t\t";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "visitante", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t<p class=\"m-0 h6\">";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "dia", [], "any", false, false, true, 19), 19, $this->source) . "/") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "mes", [], "any", false, false, true, 19), 19, $this->source)) . "/") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "anio", [], "any", false, false, true, 19), 19, $this->source)) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "hora", [], "any", false, false, true, 19), 19, $this->source)), "html", null, true);
            echo "</p>
\t\t\t\t<p class=\"m-0 h4\">";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "estadio", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
\t\t\t\t\t(";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "ciudad", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo ",
\t\t\t\t\t";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "pais", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo ")</p>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t</section>


    ";
        // line 36
        echo "
\t<section class=\"d-md-flex pt-4\">
\t\t<section class=\"mapa col-md-5 mb-3 ps-4 pe-4 col col-12\">
\t\t\t<div class=\"estadio\">
\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["local"]);
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 41
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["local"], "svg", [], "any", false, false, true, 41) == true)) {
                // line 42
                echo "\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"><image href=\"http://localhost";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl((("modules/partidos/templates/estadios/" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "local2", [], "any", false, false, true, 42), 42, $this->source)) . ".svg")), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } else {
                // line 44
                echo "\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"><image href=\"http://localhost";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/templates/estadios/advertencia.svg"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t\t</svg>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t</div>
\t\t\t\t<article class=\"mt-3\">
\t\t\t\t\t<p class=\"fw-bold h3\">Important</p>
\t\t\t\t\t<div class=\"notas\">
\t\t\t\t\t\t<ul class=\"notasLista mb-0\">
\t\t\t\t\t\t\t<li class=\"lh-sm\">All sales are final.</li>
\t\t\t\t\t\t\t<li class=\"lh-sm\">Age restrictions may be apply. For more information, contact the venue where the event is being held.</li>
\t\t\t\t\t\t\t<li class=\"lh-sm\">The date and time of events may change, so it is up to you to check your local schedule for changes.</li>
\t\t\t\t\t\t\t<li class=\"lh-sm\">After your purchase, you will receive a confirmation e-mail with the information and time of delivery of your ticket.</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t</section>

\t\t\t<section class=\"entradas col-md-7 pt-3 mb-3 ps-4 pe-4 col col-12\">
\t\t\t\t<p class=\"info text-center\">
\t\t\t\t\t<i class=\"i-ok-sign align-items-center\"></i>&nbsp;
\t\t\t\t\t\t                If you buy two or more tickets, we guarantee that the seats will be together.
\t\t\t\t</p>
\t\t\t\t<div class=\"d-grid\">
\t\t\t\t\t<div class=\"d-flex flex-column f-list\">
\t\t\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["local"]);
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 70
            echo "\t\t\t\t\t\t\t";
            $this->displayBlock('estadio', $context, $blocks);
            // line 77
            echo "\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</section>
\t</section>
\t<script>
        // Muestra el texto oculto cuando el usuario pasa el ratón por encima de los iconos de información.
\t\t\$(document).ready(function () {
            \$('.hover').hover(function () {
                \$(this).next().css({\"display\": \"block\"});
            }, function () {
                \$(this).next().css({\"display\": \"none\"});
            });
        });
\t</script>
";
    }

    // line 70
    public function block_estadio($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["local"] ?? null), "secciones", [], "any", false, false, true, 71) == true)) {
            // line 72
            echo "\t\t\t\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, (("@partidos/estadios/" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["local"] ?? null), "local2", [], "any", false, false, true, 72), 72, $this->source)) . ".twig")));
            echo "
\t\t\t\t\t\t\t\t";
        } else {
            // line 74
            echo "\t\t\t\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@partidos/estadios/default.twig"));
            echo "
\t\t\t\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "@partidos/partido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 76,  222 => 74,  216 => 72,  213 => 71,  209 => 70,  190 => 78,  176 => 77,  173 => 70,  156 => 69,  133 => 48,  126 => 46,  120 => 44,  114 => 42,  111 => 41,  107 => 40,  101 => 36,  96 => 25,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  66 => 16,  62 => 15,  56 => 13,  53 => 12,  49 => 11,  46 => 10,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@partidos/partido.html.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\partidos\\templates\\partido.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 11, "set" => 12, "if" => 41, "block" => 70);
        static $filters = array("escape" => 2, "replace" => 13);
        static $functions = array("attach_library" => 2, "file_url" => 13, "include" => 72);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'block'],
                ['escape', 'replace'],
                ['attach_library', 'file_url', 'include']
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
