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

/* @general/inicio.html.twig */
class __TwigTemplate_4116e2278f7d5fd25d4f6456d4567bb7 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("general/inicio"), "html", null, true);
        echo "

<p class=\"h1 text-center mb-3 mt-4\">Next Features</p>
<div class=\"owl-carousel owl-theme container mb-4\">
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partidos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
            // line 6
            echo "\t\t<div class=\"item partido text-center m-2 p-2 lh-1\">
\t\t\t<p class=\"comp fw-semibold p-2 h5\">";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "competicion", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "</p>
\t\t\t<section class=\"d-flex flex-row m-auto align-items-center justify-items-center\">
\t\t\t\t<article class=\"local col col-5\">
\t\t\t\t\t<img
\t\t\t\t\tsrc=\"";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "logoLocal", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" alt=\"local\" class=\"m-auto p-2\">
\t\t\t\t\t<!-- poner selector en el css con important-->
\t\t\t\t\t<p class=\"text-uppercase fw-bold p-2 h3\">";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "local", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t</article>
\t\t\t\t<p class=\"col col-2\">vs</p>
\t\t\t\t<article class=\"visitante col col-5\">
\t\t\t\t\t<img
\t\t\t\t\tsrc=\"";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "logoVisitante", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\" alt=\"visitante\" class=\"m-auto p-2\">
\t\t\t\t\t<!-- alinear veritcalemnte, lh-1-->
\t\t\t\t\t<p class=\"text-uppercase fw-bold p-2 h3\">";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "visitante", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t</article>
\t\t\t</section>
\t\t\t<p class=\"estadio ps-2 pe-2\">";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "estadio", [], "any", false, false, true, 23), 23, $this->source) . " (") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "ciudad", [], "any", false, false, true, 23), 23, $this->source)) . ", ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "pais", [], "any", false, false, true, 23), 23, $this->source)) . ")"), "html", null, true);
            echo "</p>
\t\t\t<section class=\"d-flex flex-row m-auto text-center align-items-center justify-items-center\">
\t\t\t\t<p class=\"fecha col col-6\">";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "dia", [], "any", false, false, true, 25), 25, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "mes", [], "any", false, false, true, 25), 25, $this->source)) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "anio", [], "any", false, false, true, 25), 25, $this->source)) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "hora", [], "any", false, false, true, 25), 25, $this->source)), "html", null, true);
            echo "</p>
\t\t\t\t<div class=\"entradas text-end col-2 m-0 p-0 d-grid align-items-center m-auto\">
                        <a href=\"http://localhost/AllTickets/partido/";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "id", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\" data-testid=\"event-list-link\" class=\"enlace d-inine-block position-relative\">
                            <span>Entradas</span>
                            <svg class=\"flecha flex-shrink-0 d-inline text-nowrap text-center\" viewBox=\"0 0 24 24\" width=\"1em\" height=\"1em\"
                                aria-hidden=\"true\" focusable=\"false\">
                                <path d=\"M3.47 8.26 4.53 7.2 12 14.67l7.47-7.47 1.06 1.06L12 16.8 3.47 8.26Z\">
                                </path>
                            </svg>
                        </a>
                    </div>
\t\t\t</section>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</div>

<section class=\"nosotros position-relative mt-4 mb-4\">
\t<div class=\"izquierda\">
\t\t<p style=\"height: 250px;\">jfrleoremvroemvoemovrerem</p>
\t</div>
\t<div class=\"derecha position-absolute\"></div>
</section>

<section class=\"noticias container pb-3 pb-md-0\">
\t<p class=\"h1 mb-3 mt-4 title text-center\">Latest news</p>
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["noticias"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 51
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 51) == 3)) {
                // line 52
                echo "        <div class=\"news1 ms-1 ms-lg-2 me-1 ms-lg-2 mb-2 position-relative\">
            <a href=\"";
                // line 53
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "enlace", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                echo "\">
                <img src=\"";
                // line 54
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "imagen", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "\" class=\"attachment-khelo_latest_xl_blog size-khelo_latest_xl_blog wp-post-image\" alt=\"\">
            </a>
            <section class=\"info m-0 position-absolute w-100 ps-3\">
                <p class=\"date mt-2 mb-2\">";
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "fecha", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                echo "</p>
                <h4 class=\"mt-3 mb-3\">
                    <a href=\"\">";
                // line 59
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "titular", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                echo "</a>
                </h4>
            </section>
        </div>
        ";
            }
            // line 64
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 64) == 2)) {
                // line 65
                echo "        <div class=\"news2 ms-1 me-1 mb-3 position-relative\">
            <a href=\"";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "enlace", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "\">
                <img src=\"";
                // line 67
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "imagen", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "\" class=\"attachment-khelo_latest_xl_blog size-khelo_latest_xl_blog wp-post-image\" alt=\"\">
            </a>
            <section class=\"info m-0 position-absolute w-100 ps-3\">
                <p class=\"date mt-2 mb-2\">";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "fecha", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "</p>
                <h4 class=\"mt-3 mb-3\">
                    <a href=\"\">";
                // line 72
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "titular", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                echo "</a>
                </h4>
            </section>
        </div>
        ";
            }
            // line 77
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 77) == 1)) {
                // line 78
                echo "        <div class=\"news3 ms-1 me-1 mb-3 position-relative\">
            <a href=\"";
                // line 79
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "enlace", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "\">
                <img src=\"";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "imagen", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "\" class=\"attachment-khelo_latest_xl_blog size-khelo_latest_xl_blog wp-post-image\" alt=\"\">
            </a>
            <section class=\"info m-0 position-absolute w-100 ps-3\">
                <p class=\"date mt-2 mb-2\">";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "fecha", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "</p>
                <h4 class=\"mt-3 mb-3\">
                    <a href=\"\">";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "titular", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "</a>
                </h4>
            </section>
        </div>
        ";
            }
            // line 90
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "</section>

<section class=\"competiciones mt-4 pb-4 d-md-flex m-auto d-none\">
    <img width=\"75\" height=\"75\" class=\"col col-1\" src=\"";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/GermanBundesliga.png"), "html", null, true);
        echo "\" alt=\"bundesliga\">
    <img width=\"75\" height=\"75\" class=\"col col-1\" src=\"";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/EnglishPremierLeague.png"), "html", null, true);
        echo "\" alt=\"premier\">
    <img width=\"75\" height=\"75\" class=\"col col-1\" src=\"";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/UEFAChampionsLeague.png"), "html", null, true);
        echo "\" alt=\"champions\">
    <img width=\"75\" height=\"75\" class=\"col col-1\" src=\"";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/SpanishLaLiga.png"), "html", null, true);
        echo "\" alt=\"liga\">
    <img width=\"75\" height=\"75\" class=\"col col-4\" src=\"";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(""), "html", null, true);
        echo "\" alt=\"logo\">
    <img width=\"75\" height=\"75\" class=\"col col-1\" src=\"";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/ItalianSerieA.png"), "html", null, true);
        echo "\" alt=\"seriea\">
    <img width=\"75\" height=\"75\" class=\"col col-1\" src=\"";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/UEFAEuropaLeague.png"), "html", null, true);
        echo "\" alt=\"europa\">
    <img width=\"75\" height=\"75\" class=\"col col-1\" src=\"";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/UEFAConferenceLeague.png"), "html", null, true);
        echo "\" alt=\"conf\">
    <img width=\"75\" height=\"75\" class=\"col col-1\" src=\"";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/FrenchLigue1.png"), "html", null, true);
        echo "\" alt=\"ligue\">
</section>
";
    }

    public function getTemplateName()
    {
        return "@general/inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 102,  276 => 101,  272 => 100,  268 => 99,  264 => 98,  260 => 97,  256 => 96,  252 => 95,  248 => 94,  243 => 91,  229 => 90,  221 => 85,  216 => 83,  210 => 80,  206 => 79,  203 => 78,  200 => 77,  192 => 72,  187 => 70,  181 => 67,  177 => 66,  174 => 65,  171 => 64,  163 => 59,  158 => 57,  152 => 54,  148 => 53,  145 => 52,  142 => 51,  125 => 50,  112 => 39,  94 => 27,  89 => 25,  84 => 23,  78 => 20,  73 => 18,  65 => 13,  60 => 11,  53 => 7,  50 => 6,  46 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@general/inicio.html.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\general\\templates\\inicio.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5, "if" => 51);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "file_url" => 94);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
