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

/* @partidos/listaPartidos.html.twig */
class __TwigTemplate_649e5edda43e3b5b4fb8c58e5bef232f extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("partidos/listaPartidos"), "html", null, true);
        echo "

";
        // line 18
        echo "<section class=\"listaPartidos\">
    <div class=\"container d-flex pt-3 pb-3 div\">
        <div class=\"col-lg-9 col col-12 p-1\">
            <ul class=\"partidos container\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partidos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
            // line 23
            echo "                <li class=\"d-flex flex-md-row flex-column\">
                    <div class=\"text-center col-md-2 col col-12\">
                        <span class=\"month\">";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "mes", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</span>
                        <span class=\"day fw-bold\">";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "dia", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "</span>
                        <span class=\"year\">";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "anio", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"col-md-7 col col-12 text-wrap pe-0\">
                        <p class=\"h5 mt-1\">";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "competicion", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</p>
                        <p class=\"h3 fw-bold has-spacing\">";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "local", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo " vs ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "visitante", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "</p>
                        <p class=\"m-0\">
                            <span>";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "hora", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</span> -
                            <span>";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "estadio", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo " (";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "ciudad", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo ", ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "pais", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo ")</span>
                        </p>
                    </div>
                    <div class=\"entradas text-end col-md-2 col col-12 m-0 p-0\">
                        <a href=\"";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            echo "matches/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partido"], "id", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\" data-testid=\"event-list-link\" class=\"enlace d-inine-block position-relative\">
                            <span>Tickets</span>
                            <svg class=\"flecha flex-shrink-0 d-inline text-nowrap text-center\" viewBox=\"0 0 24 24\" width=\"1.5em\" height=\"1.5em\"
                                aria-hidden=\"true\" focusable=\"false\">
                                <path d=\"M3.47 8.26 4.53 7.2 12 14.67l7.47-7.47 1.06 1.06L12 16.8 3.47 8.26Z\">
                                </path>
                            </svg>
                        </a>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </ul>
        </div>

        <div class=\"filtros col-lg-3 col col-12 p-1 d-block\">
            <p class=\"h1 p-2 m-0 text-center\">Filters</p>
            <section>
                <select name=\"liga\" id=\"liga\" class=\"ps-2 pe-2 mt-2 mb-2\">
                    <option value=\"\">Choose league</option>
                    <option value=\"eng.1\">English Premier League</option>
                    <option value=\"esp.1\">Spanish La Liga</option>
                    <option value=\"ita.1\">Italian Serie A</option>
                    <option value=\"ger.1\">German Bundesliga</option>
                    <option value=\"fra.1\">French Ligue 1</option>
                    <option value=\"uefa.champions\">UEFA Champions League</option>
                    <option value=\"uefa.europa\">UEFA Europa League</option>
                    <option value=\"uefa.europa.conf\">UEFA Conferece League</option>
                </select><br>
                <select name=\"equipo\" id=\"equipo\" disabled=\"true\" class=\"ps-2 pe-2 mt-2 mb-2\">
                    <option value=\"\">Choose team</option>
                </select><br>

                <div class=\"ps-2 pe-2 mt-2 mb-2 d-flex w-100\">
                    <label for=\"fecha-inicial\">Starting date:</label>
                    <input type=\"date\" id=\"fecha-inicial\" disabled=\"true\" class=\"\">
                </div>
                <br>
                <button id=\"filtrar\" disabled=\"true\">Search</button>
            </section>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "@partidos/listaPartidos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  98 => 38,  87 => 34,  83 => 33,  76 => 31,  72 => 30,  66 => 27,  62 => 26,  58 => 25,  54 => 23,  50 => 22,  44 => 18,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@partidos/listaPartidos.html.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\partidos\\templates\\listaPartidos.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 22);
        static $filters = array("escape" => 2);
        static $functions = array("attach_library" => 2, "url" => 38);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['attach_library', 'url']
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
