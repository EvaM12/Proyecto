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
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("general/inicio"), "html", null, true);
        echo "

";
        // line 9
        echo "<p class=\"h1 text-center mb-3 mt-4\">Next Matches</p>
<div class=\"owl-carousel owl-theme container mb-4\">
\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partidos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
            // line 12
            echo "\t\t<div class=\"item partido text-center m-2 p-2 lh-1\">
\t\t\t<p class=\"comp fw-semibold p-2 h5\">";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "competicion", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</p>
\t\t\t<section class=\"d-flex flex-row m-auto align-items-center justify-items-center\">
\t\t\t\t<article class=\"local col col-5\">
\t\t\t\t\t<img
\t\t\t\t\tsrc=\"";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "logoLocal", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\" alt=\"local\" class=\"m-auto p-2\">
\t\t\t\t\t<p class=\"text-uppercase fw-bold p-2 h3\">";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "local", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t</article>
\t\t\t\t<p class=\"col col-2 fs-2\">vs</p>
\t\t\t\t<article class=\"visitante col col-5\">
\t\t\t\t\t<img
\t\t\t\t\tsrc=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "logoVisitante", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\" alt=\"visitante\" class=\"m-auto p-2\">
\t\t\t\t\t<p class=\"text-uppercase fw-bold p-2 h3\">";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "visitante", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t</article>
\t\t\t</section>
\t\t\t<p class=\"estadio ps-2 pe-2\">";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "estadio", [], "any", false, false, true, 27), 27, $this->source) . " (") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "ciudad", [], "any", false, false, true, 27), 27, $this->source)) . ", ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "pais", [], "any", false, false, true, 27), 27, $this->source)) . ")"), "html", null, true);
            echo "</p>
\t\t\t<section class=\"d-flex flex-row m-auto text-center align-items-center justify-items-center\">
\t\t\t\t<p class=\"fecha col col-6\">";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "dia", [], "any", false, false, true, 29), 29, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "mes", [], "any", false, false, true, 29), 29, $this->source)) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "anio", [], "any", false, false, true, 29), 29, $this->source)) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "hora", [], "any", false, false, true, 29), 29, $this->source)), "html", null, true);
            echo "</p>
\t\t\t\t<div class=\"entradas text-end col-2 m-0 p-0 d-grid align-items-center m-auto\">
                        <a href=\"";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            echo "matches/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "id", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\" data-testid=\"event-list-link\" class=\"enlace d-inine-block position-relative\">
                            <span>Tickets</span>
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
        // line 43
        echo "</div>

";
        // line 48
        echo "<section class=\"nosotros position-relative mt-4 mb-4 \">
\t<div class=\"izquierda p-4\">
        <p class=\"h1 pt-3 pb-3 text-center\">About us<p>
\t\t<p>AllTickets is a comprehensive platform dedicated to the sale of tickets for soccer matches of the main European leagues and UEFA competitions, such as the Champions League or the Europa League. This project arises as a response to the growing demand from soccer fans looking for a complete and convenient experience to purchase tickets, access detailed information about matches and teams, and enjoy real-time functionalities.
Unlike other tools, our application focuses exclusively on providing a complete and secure ticketing experience, without delving into the realm of sports betting. Although there are similar tools in the market, specialization and security are the pillars that differentiate our platform, offering users a reliable experience focused solely on their passion for soccer.</p>
\t</div>
</section>

";
        // line 63
        echo "<section class=\"noticias container pb-3 pb-md-0\">
    <p class=\"h1 mb-3 mt-4 title text-center\">Latest news</p>
    ";
        // line 65
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
            // line 66
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 66) == 3)) {
                // line 67
                echo "        <div class=\"news1 ms-1 ms-lg-2 me-1 ms-lg-2 mb-2 position-relative\">
            <a href=\"";
                // line 68
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "enlace", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "\">
                <img src=\"";
                // line 69
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "imagen", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                echo "\" class=\"attachment-khelo_latest_xl_blog size-khelo_latest_xl_blog wp-post-image\" alt=\"\">
            </a>
            <section class=\"info m-0 position-absolute w-100 ps-3\">
                <p class=\"date mt-2 mb-2\">";
                // line 72
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "fecha", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                echo "</p>
                <h4 class=\"mt-3 mb-3\">
                    <a href=\"";
                // line 74
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "enlace", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "titular", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "</a>
                </h4>
            </section>
        </div>
        ";
            }
            // line 79
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 79) == 2)) {
                // line 80
                echo "        <div class=\"news2 ms-1 me-1 mb-3 position-relative\">
            <a href=\"";
                // line 81
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "enlace", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                echo "\">
                <img src=\"";
                // line 82
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "imagen", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo "\" class=\"attachment-khelo_latest_xl_blog size-khelo_latest_xl_blog wp-post-image\" alt=\"\">
            </a>
            <section class=\"info m-0 position-absolute w-100 ps-3\">
                <p class=\"date mt-2 mb-2\">";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "fecha", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "</p>
                <h4 class=\"mt-3 mb-3\">
                    <a href=\"";
                // line 87
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "enlace", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "titular", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                echo "</a>
                </h4>
            </section>
        </div>
        ";
            }
            // line 92
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 92) == 1)) {
                // line 93
                echo "        <div class=\"news3 ms-1 me-1 mb-3 position-relative\">
            <a href=\"";
                // line 94
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "enlace", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                echo "\">
                <img src=\"";
                // line 95
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "imagen", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                echo "\" class=\"attachment-khelo_latest_xl_blog size-khelo_latest_xl_blog wp-post-image\" alt=\"\">
            </a>
            <section class=\"info m-0 position-absolute w-100 ps-3\">
                <p class=\"date mt-2 mb-2\">";
                // line 98
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "fecha", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo "</p>
                <h4 class=\"mt-3 mb-3\">
                    <a href=\"";
                // line 100
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "enlace", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "titular", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                echo "</a>
                </h4>
            </section>
        </div>
        ";
            }
            // line 105
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
        // line 106
        echo "</section>

";
        // line 113
        echo "<section class=\"competiciones mt-4 pb-4 d-md-flex align-items-center justify-content-center m-auto d-none\">
    <img src=\"";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/GermanBundesliga.png"), "html", null, true);
        echo "\" alt=\"bundesliga\">
    <img src=\"";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/EnglishPremierLeague.png"), "html", null, true);
        echo "\" alt=\"premier\">
    <img src=\"";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/UEFAChampionsLeague.png"), "html", null, true);
        echo "\" alt=\"champions\">
    <img src=\"";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/SpanishLaLiga.png"), "html", null, true);
        echo "\" alt=\"liga\">
    <img src=\"";
        // line 118
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("themes/alltickets/assets/images/logo2.png"), "html", null, true);
        echo "\" alt=\"logo\" style=\"width: 15%\">
    <img src=\"";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/ItalianSerieA.png"), "html", null, true);
        echo "\" alt=\"seriea\">
    <img src=\"";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/UEFAEuropaLeague.png"), "html", null, true);
        echo "\" alt=\"europa\">
    <img src=\"";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/UEFAConferenceLeague.png"), "html", null, true);
        echo "\" alt=\"conf\">
    <img src=\"";
        // line 122
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
        return array (  295 => 122,  291 => 121,  287 => 120,  283 => 119,  279 => 118,  275 => 117,  271 => 116,  267 => 115,  263 => 114,  260 => 113,  256 => 106,  242 => 105,  232 => 100,  227 => 98,  221 => 95,  217 => 94,  214 => 93,  211 => 92,  201 => 87,  196 => 85,  190 => 82,  186 => 81,  183 => 80,  180 => 79,  170 => 74,  165 => 72,  159 => 69,  155 => 68,  152 => 67,  149 => 66,  132 => 65,  128 => 63,  118 => 48,  114 => 43,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 23,  66 => 18,  62 => 17,  55 => 13,  52 => 12,  48 => 11,  44 => 9,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@general/inicio.html.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\general\\templates\\inicio.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 11, "if" => 66);
        static $filters = array("escape" => 2);
        static $functions = array("attach_library" => 2, "url" => 31, "file_url" => 114);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
