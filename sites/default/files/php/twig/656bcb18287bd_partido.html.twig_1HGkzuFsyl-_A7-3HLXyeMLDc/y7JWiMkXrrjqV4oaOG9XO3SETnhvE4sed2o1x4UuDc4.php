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
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("partidos/datosPartidos"), "html", null, true);
        echo "

<section class=\"cont container mt-4 p-0 pb-2\">
    <section class=\"cabecera d-flex align-items-center flex-row p-3\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["local"]);
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 6
            echo "        ";
            $context["id"] = twig_get_attribute($this->env, $this->source, $context["local"], "id", [], "any", false, false, true, 6);
            // line 7
            echo "        <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl((("modules/partidos/assets/images/" . twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "competicion", [], "any", false, false, true, 7), 7, $this->source), [" " => ""])) . ".png")), "html", null, true);
            echo "\" width=\"150\" height=\"150\">
        <div class=\"ps-3\">
            <p class=\"fw-light m-0 h4\">";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "competicion", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</p>
            <p class=\"fw-bold h2\">";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "local", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo " vs ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "visitante", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</p>
            <p class=\"m-0 h6\">";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "dia", [], "any", false, false, true, 11), 11, $this->source) . "/") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "mes", [], "any", false, false, true, 11), 11, $this->source)) . "/") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "anio", [], "any", false, false, true, 11), 11, $this->source)) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "hora", [], "any", false, false, true, 11), 11, $this->source)), "html", null, true);
            echo "</p>
            <p class=\"m-0 h4\">";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "estadio", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo " (";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "ciudad", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo ", ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "pais", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo ")</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </section>

    <section class=\"d-md-flex pt-4\">
        <section class=\"mapa col-md-5 mb-3 ps-4 pe-4 col col-12\">
            <div class=\"estadio\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["local"]);
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 21
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["local"], "svg", [], "any", false, false, true, 21) == true)) {
                // line 22
                echo "                        <svg xmlns=\"http://www.w3.org/2000/svg\"><image href=\"http://localhost";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl((("modules/partidos/templates/estadios/" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "local", [], "any", false, false, true, 22), 22, $this->source)) . ".svg")), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 24
                echo "                        <svg xmlns=\"http://www.w3.org/2000/svg\"><image href=\"http://localhost";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/templates/estadios/advertencia.svg"), "html", null, true);
                echo "\">
                    ";
            }
            // line 26
            echo "                </svg>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>
            <article class=\"mt-3\">
                <p class=\"fw-bold h3\">Important</p>
                <div class=\"notas\">
                    <ul class=\"notasLista mb-0\">
                        <li class=\"lh-sm\">All sales are final.</li>
                        <li class=\"lh-sm\">Age restrictions may be apply. For more information, contact the venue where the event is being held.</li>
                        <li class=\"lh-sm\">The date and time of events may change, so it is up to you to check your local schedule for changes.</li>
                        <li class=\"lh-sm\">After your purchase, you will receive a confirmation e-mail with the information and time of delivery of your ticket.</li>
                    </ul>
                </div>
            </article>
        </section>

        <section class=\"entradas col-md-7 pt-3 mb-3 ps-4 pe-4 col col-12\">
            <p class=\"info text-center\">
                <i class=\"i-ok-sign align-items-center\"></i>&nbsp;
                If you buy two or more tickets, we guarantee that the seats will be together.
            </p>
            <div class=\"d-grid\">
                <div class=\"d-flex flex-column f-list\">
                    ";
        // line 49
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
            // line 50
            echo "                        ";
            $this->displayBlock('estadio', $context, $blocks);
            // line 57
            echo "                    ";
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
        // line 58
        echo "                </div>
            </div>
        </section>
    </section>
</section>
<script>
    \$(document).ready(function () {
        \$('.hover').hover(
            function () {
                \$(this).next().css({ \"display\": \"block\" });
            },
            function () {
                \$(this).next().css({ \"display\": \"none\" });
            }
        );
    });
</script>";
    }

    // line 50
    public function block_estadio($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["local"] ?? null), "secciones", [], "any", false, false, true, 51) == true)) {
            // line 52
            echo "                                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, (("@partidos/estadios/" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["local"] ?? null), "local", [], "any", false, false, true, 52), 52, $this->source)) . ".twig")));
            echo "
                            ";
        } else {
            // line 54
            echo "                                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@partidos/estadios/default.twig"));
            echo "
                            ";
        }
        // line 56
        echo "                        ";
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
        return array (  216 => 56,  210 => 54,  204 => 52,  201 => 51,  197 => 50,  177 => 58,  163 => 57,  160 => 50,  143 => 49,  120 => 28,  113 => 26,  107 => 24,  101 => 22,  98 => 21,  94 => 20,  87 => 15,  74 => 12,  70 => 11,  64 => 10,  60 => 9,  54 => 7,  51 => 6,  47 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@partidos/partido.html.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\partidos\\templates\\partido.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5, "set" => 6, "if" => 21, "block" => 50);
        static $filters = array("escape" => 1, "replace" => 7);
        static $functions = array("attach_library" => 1, "file_url" => 7, "include" => 52);

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
