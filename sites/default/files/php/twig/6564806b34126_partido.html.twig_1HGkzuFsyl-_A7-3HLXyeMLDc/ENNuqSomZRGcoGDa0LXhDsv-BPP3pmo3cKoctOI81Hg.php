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

";
        // line 3
        $context["estadio"] = "estadio2";
        // line 4
        $context["fichero"] = (("@partidos/estadios/" . $this->sandbox->ensureToStringAllowed(($context["estadio"] ?? null), 4, $this->source)) . ".twig");
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('estadio', $context, $blocks);
        // line 9
        echo "

<section class=\"cont container mt-4 mb-4 p-0\">
    <section class=\"cabecera d-flex align-items-center flex-row p-3\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["local"]);
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 14
            echo "        ";
            $context["id"] = twig_get_attribute($this->env, $this->source, $context["local"], "id", [], "any", false, false, true, 14);
            // line 15
            echo "        <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl((("modules/partidos/assets/images/" . twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "competicion", [], "any", false, false, true, 15), 15, $this->source), [" " => ""])) . ".png")), "html", null, true);
            echo "\" width=\"150\" height=\"150\">
        <div class=\"ps-3\">
            <p class=\"fw-light m-0 h4\">";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "competicion", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</p>
            <p class=\"fw-bold h2\">";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "local", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo " vs ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "visitante", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</p>
            <p class=\"m-0 h6\">";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "dia", [], "any", false, false, true, 19), 19, $this->source) . "/") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "mes", [], "any", false, false, true, 19), 19, $this->source)) . "/") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "anio", [], "any", false, false, true, 19), 19, $this->source)) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "hora", [], "any", false, false, true, 19), 19, $this->source)), "html", null, true);
            echo "</p>
            <p class=\"m-0 h4\">";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "estadio", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo " (";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "ciudad", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo ", ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "pais", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo ")</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </section>

    <section class=\"d-flex pt-4\">
        <section class=\"mapa col-5 mb-3 ps-2 pe-2\">
            <div class=\"estadio\">
                <svg xmlns=\"http://www.w3.org/2000/svg\">
                    ";
        // line 30
        echo "                </svg>
            </div>
            <article class=\"mt-3\">
                <p class=\"fw-bold h3\"> Notas generales</p>
                <div class=\"notas\">
                    <ul class=\"notasLista mb-0\">
                        <li class=\"lh-sm\">Todas las ventas son definitivas</li>
                        <li class=\"lh-sm\">Puede haber restricciones para ciertas edades. Para más información,
                            contacta con el local en el que se celebra el evento</li>
                        <li class=\"lh-sm\">La fecha y hora de los eventos puede cambiar, así que depende de ti
                            mirar la programación local por si hay cambios</li>
                        <li class=\"lh-sm\">Después de tu compra, recibirás un e-mail de confirmación con la
                            información y la hora de entrega de tu entrada </li>
                    </ul>
                </div>
            </article>
        </section>

        <section class=\"entradas col-7 pt-3 mb-3 ps-2 pe-2\">
            <p class=\"info text-center\">
                <i class=\"i-ok-sign align-items-center\"></i>&nbsp;
                Si compras dos entradas o más, te garantizamos que los asientos estarán juntos
            </p>
            <div class=\"d-grid\">
                <div class=\"d-flex flex-column f-list\">
                    <div class=\"p-0 mb-2 d-flex align-items-stretch position-relative secciones bWht\">
                        <div class=\"lateralIzq\" style=\"background:#a3d165;\">
                        </div>
                        <div class=\"d-flex flex-fill flex-row flex-grow-1 align-items-stretch col-8 ps-3 pb-2 pt-2\">
                            <div class=\"justify-content-center align-items-center d-flex flex-column\">
                                <p class=\"fw-bold lh-1 h4 text-start w-100\">Sección: A01</p>
                                <div class=\"cnRed1\">
                                    <p class=\"fw-bold m-0 lh-1\">4 entradas restantes</p>
                                    <p class=\"m-0 lh-1\">en este listado en nuestro sitio web</p>
                                </div>
                                <div class=\"fw-light cGry2\">
                                    <em>Envío Seguro</em>
                                    <br>
                                    <div class=\"d-flex flex-top cGry1 fw-bold lh-1\">
                                        <span class=\"cGrn1 i-thumbs-up position-relative me-2\"></span>
                                        <span>
                                            Visibilidad sin limitaciones. &nbsp;
                                            <span>
                                                <span class=\"fs-6 hover\">
                                                    <i class=\"i-info-sign align-items-center cGry1\"></i>
                                                </span>
                                                <div class=\"text-center fw-light lh-1\">
                                                    <p class=\"fs-6 m-0\">
                                                        Disfrutarás de una vista clara del
                                                        espectáculo.
                                                    </p>
                                                </div>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex flex-fill flex-row text-end position-relative lateralDer\">
                            <div class=\"d-flex flex-column flex-fill justify-content-center align-items-end\">
                                <span class=\"fw-bold fs-6\">228 €</span>
                                <p class=\"fs-6 cGry3 mb-0\">Por entrada</p>
                                <form method=\"post\" action=\"http://localhost/AllTickets/partido/";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 92, $this->source), "html", null, true);
        echo "/compra\">
                                    <input type=\"number\" name=\"entradas\" id=\"entradas\">
                                    <button type=\"submit\" class=\"btn pri\">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"p-0 d-flex align-items-stretch position-relative secciones bWht\">
                        <div class=\"lateralIzq\" style=\"background:#a3d165;\">
                        </div>
                        <div class=\"d-flex flex-fill flex-row flex-grow-1 align-items-stretch col-8 ps-3 pb-2 pt-2\">
                            <div class=\"justify-content-center align-items-center d-flex flex-column\">
                                <p class=\"fw-bold lh-1 h4 text-start w-100\">Sección: A15</p>
                                <div class=\"fw-light cGry2 \">
                                    <em>Entrada electrónica</em>
                                    <br>
                                    <div class=\"d-flex flex-top cGry1 fw-bold lh-1\">
                                        <span class=\"cGrn1 i-thumbs-up position-relative me-2\"></span>
                                        <span>
                                            Visibilidad sin limitaciones. &nbsp;
                                            <span>
                                                <span class=\"fs-6 hover\">
                                                    <i class=\"i-info-sign align-items-center cGry1\"></i>
                                                </span>
                                                <div class=\"text-center fw-light lh-1\">
                                                    <p class=\"fs-6 m-0\">
                                                        Disfrutarás de una vista clara del
                                                        espectáculo.
                                                    </p>
                                                </div>
                                            </span>
                                        </span>
                                    </div>
                                    <div class=\"d-flex flex-top cGry1 fw-bold lh-1\">
                                        <span class=\"cGrn1 i-thumbs-up position-relative me-2\"></span>
                                        <span>
                                            Seccion más vendida. &nbsp;
                                            <span>
                                                <span class=\"fs-6 hover\">
                                                    <i class=\"i-info-sign align-items-center cGry1\"></i>
                                                </span>
                                                <div class=\"text-center fw-light lh-1\">
                                                    <p class=\"fs-6 m-0\">
                                                        Esta sección tiene el mayor número de ventas exitosas para este evento en los últimos 7 días en nuestro sitio.
                                                    </p>
                                                </div>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex flex-fill flex-row text-end position-relative lateralDer\">
                            <div class=\"d-flex flex-column flex-fill justify-content-center align-items-end\">
                                <span class=\"fw-bold fs-6\">228 €</span>
                                <p class=\"fs-6 cGry3 mb-0\">Por entrada</p>
                                <form method=\"post\" action=\"http://localhost/AllTickets/partido/";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 148, $this->source), "html", null, true);
        echo "/compra\">
                                    <input type=\"number\" name=\"entradas\" id=\"entradas\">
                                    <button type=\"submit\" class=\"btn pri\">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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

    // line 6
    public function block_estadio($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "   ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, $this->sandbox->ensureToStringAllowed(($context["fichero"] ?? null), 7, $this->source)));
        echo "
";
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
        return array (  263 => 7,  259 => 6,  231 => 148,  172 => 92,  108 => 30,  100 => 23,  87 => 20,  83 => 19,  77 => 18,  73 => 17,  67 => 15,  64 => 14,  60 => 13,  54 => 9,  52 => 6,  49 => 5,  47 => 4,  45 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@partidos/partido.html.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\partidos\\templates\\partido.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "block" => 6, "for" => 13);
        static $filters = array("escape" => 1, "replace" => 15);
        static $functions = array("attach_library" => 1, "file_url" => 15, "include" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'for'],
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
