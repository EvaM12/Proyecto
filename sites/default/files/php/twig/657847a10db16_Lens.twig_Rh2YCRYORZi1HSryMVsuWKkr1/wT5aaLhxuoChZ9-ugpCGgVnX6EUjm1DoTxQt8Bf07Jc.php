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

/* @partidos/estadios/Lens.twig */
class __TwigTemplate_9f6985b70ad4b241cc3d818d3b7a2eba extends Template
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
        echo "\t<div class=\"p-0 mb-2 d-flex align-items-stretch position-relative secciones bWht\">
\t\t<div class=\"lateralIzq\" style=\"background:#21b0f5;\"></div>
\t\t<div class=\"d-flex flex-fill flex-row flex-grow-1 align-items-stretch col-8 ps-3 pb-2 pt-2\">
\t\t\t<div class=\"justify-content-center align-items-center d-flex flex-column\">
\t\t\t\t<p class=\"fw-bold lh-1 h4 text-start w-100\">Section: Trannin</p>
\t\t\t\t<div class=\"cnRed1 w-100\">
\t\t\t\t\t<p class=\"fw-bold m-0 lh-1\">4 tickets left</p>
\t\t\t\t\t<p class=\"m-0 lh-1\">in our website</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"fw-light cGry2 w-100\">
\t\t\t\t\t<em>Secure shipping</em>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"d-flex flex-top cGry1 fw-bold lh-1\">
\t\t\t\t\t\t<span class=\"cAzul4 i-thumbs-up position-relative me-2\"></span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\tUnlimited view. &nbsp;
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<span class=\"fs-6 hover\">
\t\t\t\t\t\t\t\t\t<i class=\"i-info-sign align-items-center cGry1\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"text-center fw-light lh-1\">
\t\t\t\t\t\t\t\t\t<p class=\"fs-6 m-0\">
\t\t\t\t\t\t\t\t\t\tYou will enjoy a clear view of the show.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"d-flex flex-fill flex-row text-end position-relative lateralDer\">
\t\t\t<form class=\"d-flex flex-column flex-fill justify-content-center align-items-end\" method=\"post\" action=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "matches/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 34, $this->source), "html", null, true);
        echo "/buy\">
\t\t\t\t<span class=\"fw-bold fs-6\">228 €</span>
\t\t\t\t<input class=\"d-none\" type=\"number\" value=\"228\" name=\"precio\" id=\"precio\">
\t\t\t\t<input class=\"d-none\" type=\"text\" value=\"Trannin\" name=\"seccion\" id=\"seccion\">
\t\t\t\t<p class=\"fs-6 cGry3 mb-0\">Per ticket</p>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"number\" name=\"entradas\" id=\"entradas\" class=\"w-50 mt-1\">
\t\t\t\t\t<button type=\"submit\" class=\"btn pri\">Buy</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
\t<div class=\"p-0 mb-2 d-flex align-items-stretch position-relative secciones bWht\">
\t\t<div class=\"lateralIzq\" style=\"background:#af51ce;\"></div>
\t\t<div class=\"d-flex flex-fill flex-row flex-grow-1 align-items-stretch col-8 ps-3 pb-2 pt-2\">
\t\t\t<div class=\"justify-content-center align-items-center d-flex flex-column\">
\t\t\t\t<p class=\"fw-bold lh-1 h4 text-start w-100\">Section: Lepagnot</p>
\t\t\t\t<div class=\"fw-light cGry2 w-100 \">
\t\t\t\t\t<em>Electronic entry</em>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"d-flex flex-top cGry1 fw-bold lh-1\">
\t\t\t\t\t\t<span class=\"cAzul4 i-thumbs-up position-relative me-2\"></span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\tUnlimited view. &nbsp;
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<span class=\"fs-6 hover\">
\t\t\t\t\t\t\t\t\t<i class=\"i-info-sign align-items-center cGry1\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"text-center fw-light lh-1\">
\t\t\t\t\t\t\t\t\t<p class=\"fs-6 m-0\">
\t\t\t\t\t\t\t\t\t\tYou will enjoy a clear view of the show.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex flex-top cGry1 fw-bold lh-1\">
\t\t\t\t\t\t<span class=\"cAzul4 i-thumbs-up position-relative me-2\"></span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\tTop selling section. &nbsp;
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<span class=\"fs-6 hover\">
\t\t\t\t\t\t\t\t\t<i class=\"i-info-sign align-items-center cGry1\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"text-center fw-light lh-1\">
\t\t\t\t\t\t\t\t\t<p class=\"fs-6 m-0\">
\t\t\t\t\t\t\t\t\t\tThis section has the highest number of successful sales for this event in the last 7 days on our site.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"d-flex flex-fill flex-row text-end position-relative lateralDer\">
\t\t\t<form class=\"d-flex flex-column flex-fill justify-content-center align-items-end\" method=\"post\" action=\"";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "matches/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 90, $this->source), "html", null, true);
        echo "/buy\">
\t\t\t\t<span class=\"fw-bold fs-6\">105 €</span>
\t\t\t\t<input class=\"d-none\" type=\"number\" value=\"105\" name=\"precio\" id=\"precio\">
\t\t\t\t<input class=\"d-none\" type=\"text\" value=\"Lepagnot\" name=\"seccion\" id=\"seccion\">
\t\t\t\t<p class=\"fs-6 cGry3 mb-0\">Per ticket</p>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"number\" name=\"entradas\" id=\"entradas\" class=\"w-50 mt-1\">
\t\t\t\t\t<button type=\"submit\" class=\"btn pri\">Buy</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
\t<div class=\"p-0 mb-2 d-flex align-items-stretch position-relative secciones bWht\">
\t\t<div class=\"lateralIzq\" style=\"background:#072273;\"></div>
\t\t<div class=\"d-flex flex-fill flex-row flex-grow-1 align-items-stretch col-8 ps-3 pb-2 pt-2\">
\t\t\t<div class=\"justify-content-center align-items-center d-flex flex-column\">
\t\t\t\t<p class=\"fw-bold lh-1 h4 text-start w-100\">Section: Delacourt</p>
\t\t\t\t<div class=\"cnRed1 w-100\">
\t\t\t\t\t<p class=\"fw-bold m-0 lh-1\">4 tickets left</p>
\t\t\t\t\t<p class=\"m-0 lh-1\">in our website</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"fw-light cGry2 w-100\">
\t\t\t\t\t<em>Secure shipping</em>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"d-flex flex-top cGry1 fw-bold lh-1\">
\t\t\t\t\t\t<span class=\"cAzul4 i-thumbs-up position-relative me-2\"></span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\tUnlimited view. &nbsp;
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<span class=\"fs-6 hover\">
\t\t\t\t\t\t\t\t\t<i class=\"i-info-sign align-items-center cGry1\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"text-center fw-light lh-1\">
\t\t\t\t\t\t\t\t\t<p class=\"fs-6 m-0\">
\t\t\t\t\t\t\t\t\t\tYou will enjoy a clear view of the show.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"d-flex flex-fill flex-row text-end position-relative lateralDer\">
\t\t\t<form class=\"d-flex flex-column flex-fill justify-content-center align-items-end\" method=\"post\" action=\"";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "matches/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 134, $this->source), "html", null, true);
        echo "/buy\">
\t\t\t\t<span class=\"fw-bold fs-6\">228 €</span>
\t\t\t\t<input class=\"d-none\" type=\"number\" value=\"228\" name=\"precio\" id=\"precio\">
\t\t\t\t<input class=\"d-none\" type=\"text\" value=\"Delacourt\" name=\"seccion\" id=\"seccion\">
\t\t\t\t<p class=\"fs-6 cGry3 mb-0\">Per ticket</p>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"number\" name=\"entradas\" id=\"entradas\" class=\"w-50 mt-1\">
\t\t\t\t\t<button type=\"submit\" class=\"btn pri\">Buy</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
\t<div class=\"p-0 mb-2 d-flex align-items-stretch position-relative secciones bWht\">
\t\t<div class=\"lateralIzq\" style=\"background:#312769;\"></div>
\t\t<div class=\"d-flex flex-fill flex-row flex-grow-1 align-items-stretch col-8 ps-3 pb-2 pt-2\">
\t\t\t<div class=\"justify-content-center align-items-center d-flex flex-column\">
\t\t\t\t<p class=\"fw-bold lh-1 h4 text-start w-100\">Section: Marek / Xerces</p>
\t\t\t\t<div class=\"fw-light cGry2 w-100\">
\t\t\t\t\t<em>Electronic entry</em>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"d-flex flex-top cGry1 fw-bold lh-1\">
\t\t\t\t\t\t<span class=\"cAzul4 i-thumbs-up position-relative me-2\"></span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\tUnlimited view. &nbsp;
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<span class=\"fs-6 hover\">
\t\t\t\t\t\t\t\t\t<i class=\"i-info-sign align-items-center cGry1\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"text-center fw-light lh-1\">
\t\t\t\t\t\t\t\t\t<p class=\"fs-6 m-0\">
\t\t\t\t\t\t\t\t\t\tYou will enjoy a clear view of the show.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex flex-top cGry1 fw-bold lh-1\">
\t\t\t\t\t\t<span class=\"cAzul4 i-thumbs-up position-relative me-2\"></span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\tTop selling section. &nbsp;
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<span class=\"fs-6 hover\">
\t\t\t\t\t\t\t\t\t<i class=\"i-info-sign align-items-center cGry1\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"text-center fw-light lh-1\">
\t\t\t\t\t\t\t\t\t<p class=\"fs-6 m-0\">
\t\t\t\t\t\t\t\t\t\tThis section has the highest number of successful sales for this event in the last 7 days on our site.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"d-flex flex-fill flex-row text-end position-relative lateralDer\">
\t\t\t<form class=\"d-flex flex-column flex-fill justify-content-center align-items-end\" method=\"post\" action=\"";
        // line 190
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "matches/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 190, $this->source), "html", null, true);
        echo "/buy\">
\t\t\t\t<span class=\"fw-bold fs-6\">105 €</span>
\t\t\t\t<input class=\"d-none\" type=\"number\" value=\"105\" name=\"precio\" id=\"precio\">
\t\t\t\t<input class=\"d-none\" type=\"text\" value=\"Marek / Xerces\" name=\"seccion\" id=\"seccion\">
\t\t\t\t<p class=\"fs-6 cGry3 mb-0\">Per ticket</p>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"number\" name=\"entradas\" id=\"entradas\" class=\"w-50 mt-1\">
\t\t\t\t\t<button type=\"submit\" class=\"btn pri\">Buy</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@partidos/estadios/Lens.twig";
    }

    public function getDebugInfo()
    {
        return array (  252 => 190,  191 => 134,  142 => 90,  81 => 34,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@partidos/estadios/Lens.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\partidos\\templates\\estadios\\Lens.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1);
        static $filters = array("escape" => 34);
        static $functions = array("url" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                ['escape'],
                ['url']
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
