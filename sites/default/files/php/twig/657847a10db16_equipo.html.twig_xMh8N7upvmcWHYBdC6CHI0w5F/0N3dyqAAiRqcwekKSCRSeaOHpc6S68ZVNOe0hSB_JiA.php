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

/* @equipos/equipo.html.twig */
class __TwigTemplate_e5cf781659980ed805f791c35d4d0176 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("equipos/equipos"), "html", null, true);
        echo "

<div class=\"container bWht p-2 mt-3 mb-3\">
    <section class=\"porteros\"><p class=\"fs-1 fw-semibold text-uppercase mt-2 titulo p-2\">Goalkeeper</p><section class=\"listado\"></section></section>
    <section class=\"defensas\"><p class=\"fs-1 fw-semibold text-uppercase mt-2 titulo p-2\">Defenders</p><section class=\"listado\"></section></section>
    <section class=\"centrocampistas\"><p class=\"fs-1 fw-semibold text-uppercase mt-2 titulo p-2\">Midfielders</p><section class=\"listado\"></section></section>
    <section class=\"delanteros\"><p class=\"fs-1 fw-semibold text-uppercase mt-2 titulo p-2\">Forwards</p><section class=\"listado\"></section></section>
</div>

<script>
    ";
        // line 18
        echo "    var porSection = \$('.porteros .listado');
    var defSection = \$('.defensas .listado');
    var medSection = \$('.centrocampistas .listado');
    var delSection = \$('.delanteros .listado');

    var jugadores = [];
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jugadores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["jug"]) {
            // line 25
            echo "        jugadores.push('";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["jug"], "idJugador", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jug'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
    jugadores.forEach(function (jugadorId) {
        \$.ajax({
            url: \"https://site.web.api.espn.com/apis/common/v3/sports/soccer/espn/athletes/\" + jugadorId,
            method: \"GET\",
            success: function (data) {
                var jugadorHTML = '';

                switch (data.athlete.position.abbreviation) {
                    case 'F':
                        jugadorHTML = `<div class=\"p-1\">
                            <div class=\"jugador\">
                                <div class=\"num\">\${data.athlete.jersey}</div>
                                <div class=\"datos\">
                                    <h4>\${data.athlete.displayName}</h4>
                                    <p>\${data.athlete.position.name}</p>
                                    <ul>
                                        <li>\${data.athlete.age} <span>Age</span></li>
                                        <li>\${data.athlete.statsSummary.statistics[0].displayValue} <span>Matches</span></li>
                                        <li>\${data.athlete.statsSummary.statistics[1].displayValue} <span>Goals</span></li>
                                        <li>\${data.athlete.statsSummary.statistics[2].displayValue} <span>Assists</span></li>
                                    </ul>
                                </div>
                                <img src=\"\${data.athlete.team.logos[0].href}\" alt=\"\">
                            </div>
                        </div>`;
                        break;
                    case 'M':
                        jugadorHTML = `<div class=\"p-1\">
                            <div class=\"jugador\">
                                <div class=\"num\">\${data.athlete.jersey}</div>
                                <div class=\"datos\">
                                    <h4>\${data.athlete.displayName}</h4>
                                    <p>\${data.athlete.position.name}</p>
                                    <ul>
                                        <li>\${data.athlete.age} <span>Age</span></li>
                                        <li>\${data.athlete.statsSummary.statistics[0].displayValue} <span>Matches</span></li>
                                        <li>\${data.athlete.statsSummary.statistics[1].displayValue} <span>Goals</span></li>
                                        <li>\${data.athlete.statsSummary.statistics[2].displayValue} <span>Assists</span></li>
                                    </ul>
                                </div>
                                <img src=\"\${data.athlete.team.logos[0].href}\" alt=\"\">
                            </div>
                        </div>`;
                        break;
                    case 'D':
                        jugadorHTML = `<div class=\"p-1\">
                            <div class=\"jugador\">
                                <div class=\"num\">\${data.athlete.jersey}</div>
                                <div class=\"datos\">
                                    <h4>\${data.athlete.displayName}</h4>
                                    <p>\${data.athlete.position.name}</p>
                                    <ul>
                                        <li>\${data.athlete.age} <span>Age</span></li>
                                        <li>\${data.athlete.statsSummary.statistics[0].displayValue} <span>Matches</span></li>
                                        <li>\${data.athlete.statsSummary.statistics[1].displayValue} <span>Goals</span></li>
                                        <li>\${data.athlete.statsSummary.statistics[2].displayValue} <span>Assists</span></li>
                                    </ul>
                                </div>
                                <img src=\"\${data.athlete.team.logos[0].href}\" alt=\"\">
                            </div>
                        </div>`;
                        break;
                    case 'G':
                        jugadorHTML = `<div class=\"p-1\">
                            <div class=\"jugador\">
                                <div class=\"num\">\${data.athlete.jersey}</div>
                                <div class=\"datos\">
                                    <h4>\${data.athlete.displayName}</h4>
                                    <p>\${data.athlete.position.name}</p>
                                    <ul>
                                        <li>\${data.athlete.age} <span>Age</span></li>
                                        <li>\${data.athlete.statsSummary.statistics[0].displayValue} <span>Matches</span></li>
                                        <li>\${data.athlete.statsSummary.statistics[1].displayValue} <span>Saves</span></li>
                                        <li>\${data.athlete.statsSummary.statistics[2].displayValue} <span>Clean sheets</span></li>
                                    </ul>
                                </div>
                                <img src=\"\${data.athlete.team.logos[0].href}\" alt=\"\">
                            </div>
                        </div>`;
                        break;
                }

                // Agregar el jugador al área correspondiente y ordenar por dorsal
                switch (data.athlete.position.abbreviation) {
                    case 'F':
                        delSection.append(jugadorHTML);
                        break;
                    case 'M':
                        medSection.append(jugadorHTML);
                        break;
                    case 'D':
                        defSection.append(jugadorHTML);
                        break;
                    case 'G':
                        porSection.append(jugadorHTML);
                        break;
                }
            },
            error: function () {
                console.log(\"Error al obtener los datos de la API\");
            }
        });
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "@equipos/equipo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  64 => 25,  60 => 24,  52 => 18,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@equipos/equipo.html.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\equipos\\templates\\equipo.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 24);
        static $filters = array("escape" => 2);
        static $functions = array("attach_library" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
