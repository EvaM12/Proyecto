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

/* @partidos/compra.html.twig */
class __TwigTemplate_93bf80320a02f51f5428b3d6c264682a extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("partidos/compra"), "html", null, true);
        echo "
";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["sesionPago"] ?? null), 4, $this->source));
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eqLocal"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 12
            echo "\t<section class=\"contenido container d-flex ps-3  pt-4\">
\t\t<section class=\"informacion col-md-4 col col-12 mb-3 pe-md-2\">
\t\t\t<div class=\"tile mb-4 p-0 \">
\t\t\t\t<div class=\"mb-2 w-100 \">
\t\t\t\t\t<p class=\"bAzul2 cWht m-0 fw-bold lh-1 p-3 h2\">
\t\t\t\t\t\tYour order details
\t\t\t\t\t</p>

\t\t\t\t\t<div class=\" p-2 bdrb\">
\t\t\t\t\t\t<div class=\"event-detail mb-2\">
\t\t\t\t\t\t\t<div class=\"bdrb dot bm mb-2\">
\t\t\t\t\t\t\t\t<p class=\"m-0 fw-bold lh-1 m-0 pb-1 evento\">";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "local", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tvs
\t\t\t\t\t\t\t\t\t";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "visitante", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<span class=\"bnRed2 cWht pt-1 pb-1 ps-2 pe-2 d-inline-block mb-1 m-0 fw-bold lh-1 \">
\t\t\t\t\t\t\t\t\t\t<span>";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "dif", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\tdays left
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"m-0 fw-bold lh-1\">
\t\t\t\t\t\t\t\t";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "diaSem", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\t";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "dia", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "mesComp", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "anio", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "hora", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"m-0 fw-normal lh-1 d-inline-block pt-2 pb-2\">";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "estadio", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t(";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "ciudad", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\t";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "pais", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo ")</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-1\">
\t\t\t\t\t\t\t<span class=\"m-0 fw-bold lh-1 bGry7 ps-2 pe-2 pt-1 pb-1 d-inline-block me-1 mb-1 \">
\t\t\t\t\t\t\t\t<strong>Section:
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["seccion"] ?? null), 47, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- añadirle js para ver si funciona -->
\t\t\t\t\t<div class=\"bdrb\">
\t\t\t\t\t\t<div class=\"d-flex flex-column text-wrap w-100 p-3\">
\t\t\t\t\t\t\t<div class=\"demand-status-container d-flex text-center p-1\">
\t\t\t\t\t\t\t\t<div class=\"m-0 fw-bold lh-1 me-2 col-6\">The demand for this event is</div>
\t\t\t\t\t\t\t\t<div class=\"cWht d-flex align-items-center col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"bYel5 demand-status d-flex flex-row w-50 align-items-center\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"bnOrg4 demand-status d-flex flex-row w-50 align-items-center\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"bnRed2 cWht demand-status demand-status-active active d-flex flex-row w-50 align-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-center fw-bold\">High</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"p-2 bdrb\">
\t\t\t\t\t<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"m-0 lh-1\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr class=\"m-0 lh-1\">
\t\t\t\t\t\t\t\t<td class=\"col-8 pb-2 fw-bold pe-2\">
\t\t\t\t\t\t\t\t\tNumber of tickets
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"col-4 pb-2 text-end\">
\t\t\t\t\t\t\t\t\t<span>";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entradas"] ?? null), 78, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"m-0 lh-1\">
\t\t\t\t\t\t\t\t<td class=\"col-8 pb-2 fw-bold pe-2\">
\t\t\t\t\t\t\t\t\tPrice
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"col-4 pb-2 text-end\">
\t\t\t\t\t\t\t\t\t";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["precio"] ?? null), 86, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t€
\t\t\t\t\t\t\t\t\t<div class=\"m-0 lh-1 cGry3\">per ticket</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"tile mb-4 p-0\">
\t\t\t\t<p class=\"m-0 p-0 h2 fw-bold lh-1 bAzul2 cWht bdrb dot p-3\">
\t\t\t\t\tAbout your tickets
\t\t\t\t</p>

\t\t\t\t<div class=\"pt-2 pb-3 ps-2 pe-2\">
\t\t\t\t\t<div class=\"m-0 fw-light lh-sm mt-1 fst-normal\">
\t\t\t\t\t\t<span class=\"i-thumbs-up cAzul4 fs-6\"></span>
\t\t\t\t\t\t<span>Unlimited visibility
\t\t\t\t\t\t\t<span class=\"position-relative\" style=\"width: fit-content;\">
\t\t\t\t\t\t\t\t<span class=\"fs-6 hover\">
\t\t\t\t\t\t\t\t\t<i class=\"i-info-sign position-relative ps-1\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"text-center m-0 fw-normal lh-1 derecha\">
\t\t\t\t\t\t\t\t\t<p class=\"fs-6 m-0\">You will enjoy a clear view of the show.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"m-0 fw-light lh-sm mt-1\">
\t\t\t\t\t\t<span class=\"i-thumbs-up cAzul4 fs-6\"></span>
\t\t\t\t\t\t<span>Your tickets are rated
\t\t\t\t\t\t\t<span class=\"fw-bold\">6,3</span>
\t\t\t\t\t\t\t based on seating and price.
\t\t\t\t\t\t\t<span class=\"position-relative\" style=\"width: fit-content;\">
\t\t\t\t\t\t\t\t<span class=\"text-nowrap hover\">&nbsp;
\t\t\t\t\t\t\t\t\t<i class=\"i-info-sign position-relative ps-1\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"text-center m-0 fw-normal lh-1 derecha\">
\t\t\t\t\t\t\t\t\t<p class=\"m-0 fs-6\">This ranking is based on the seat location and individual price of these tickets compared to all other tickets for sale on our website for this event.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"tile mb-4 p-0\">
\t\t\t\t<div class=\"m-0 fw-bold lh-1 bRosa cWht bdrb dot p-3 d-flex\">
\t\t\t\t\t<i class=\"i-star align-items-center m-0 h3 cWht\"></i>
\t\t\t\t\t<p class=\"align-items-center m-0 h3 fw-bold cWht\">&nbsp;Special Indications</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t<div class=\"mb-1 cnRed1 d-flex lh-sm mt-1\">
\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t<i class=\"i-warning-sign cnRed1 position-relative\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"fw-bold m-0\">
\t\t\t\t\t\t\t\t";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "dif", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t days left for the event.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-1 cnRed1 d-flex lh-sm mt-1\">
\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t<i class=\"i-flame cnRed1 position-relative\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"fw-bold m-0\">This event is selling out quickly&nbsp;</p>

\t\t\t\t\t\t\t<span class=\"fw-normal m-0\">
\t\t\t\t\t\t\t\tin our web site
\t\t\t\t\t\t\t\t<span class=\"position-relative\" style=\"width: fit-content;\">
\t\t\t\t\t\t\t\t\t<span class=\"text-nowrap hover\">&nbsp;<i class=\"i-info-sign position-relative\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-center m-0 fw-normal lh-1 derecha\">
\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t\t\t\tThis event ranks in the top 10% of the most in-demand events based on successful sales per day over the last 7 days on our website.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-1 cnRed1 d-flex lh-sm mt-1\">
\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t<i class=\"i-warning-sign cnRed1 position-relative\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"fw-bold m-0\">
\t\t\t\t\t\t\t\t6 sections sold out
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<span class=\"fw-normal m-0\">
\t\t\t\t\t\t\t\tfor this event in our website.
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"col-md-8 col col-12 mb-3 ps-md-2\">
\t\t\t<div class=\"tile mb-4 p-0\">
\t\t\t\t<div id=\"info\" class=\"d-flex align-items-center flex-row align-items-stretch p-2\">
\t\t\t\t\t<div class=\"text-center col-sm-9 col col-12 d-flex flex-column justify-content-center text-center align-items-center pe-2\">
\t\t\t\t\t\t<div id=\"js-countdown-wrapper\" class=\"d-flex flex-row justify-content-center text-center pb-1 p-2\">
\t\t\t\t\t\t\t<p class=\"cGry1 fw-bold fs-5 mb-0\">
\t\t\t\t\t\t\t\t<span id=\"countdown-timer\" class=\"fw-bold fs-5 flex-end pe-1\">10:00</span>
\t\t\t\t\t\t\t\tleft to finish this purchase
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"p-0 fw-bold cRed2 cnRed1 fw-bold\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tPlease, take in count that this tickets might not be avaliable, or not at least at the same price, if leave now.
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 col col-12 d-flex justify-content-center text-center align-items-center text-center h-100 pt-3 pe-2\">
\t\t\t\t\t\t<button class=\"btn h-100 err\" id=\"abandonar\">
\t\t\t\t\t\t\t<div class=\"cWht fw-bold\">
\t\t\t\t\t\t\t\t<span>Leave my tickets</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- revisar este div -->
\t\t\t\t<div class=\"align-items-center align-self-center justify-content-between mt-2 pt-1 pb-1 col-12\">
\t\t\t\t\t<ul class=\"d-flex flex-row p-0\">
\t\t\t\t\t\t<li class=\"active col-3 text-center p-2\">
\t\t\t\t\t\t\t<div class=\"step-name-icon-wrapper\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"-1 0 25 25\" height=\"40px\" width=\"40px\">
\t\t\t\t\t\t\t\t\t<path fillrule=\"evenodd\" cliprule=\"evenodd\" d=\"M7.71429 6.54545V8.36364H5.80952L5.80952 14.7273L3.90476 13.8182L3.90476 8.36364H2V6.54545H7.71429ZM20.0381 3.81818H5.80952L5.80952 5.63636L3.90476 4.72727L3.90476 2H22V22H3.90476V17.4545H2V15.6364H7.71429V17.4545H5.80952V20.1818H20.0381V3.81818ZM11.3725 10.3388C11.4465 11.107 12.1317 11.7007 12.9651 11.7007C13.7984 11.7007 14.4651 11.1245 14.5577 10.3388L14.6688 9.2737C14.7244 8.81973 14.5577 8.36576 14.2429 8.03401C13.9281 7.70227 13.4651 7.5102 12.9651 7.5102C12.4836 7.5102 12.0206 7.70227 11.6873 8.03401C11.3725 8.36576 11.2058 8.81973 11.2614 9.2737L11.3725 10.3388ZM9.57358 13.6628L9.41251 13.7523L8.96508 16.4898H16.9651L16.5177 13.7523L16.3566 13.6628C14.4595 12.643 11.4707 12.643 9.57358 13.6628Z\" transform=\"scale(0.9)\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<div class=\"icon-progress-names\">Your data</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"icon-progress-bar-loader active mt-2\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"col-3 text-center p-2\">
\t\t\t\t\t\t\t<div class=\"step-name-icon-wrapper\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"-1 0 25 25\" height=\"40px\" width=\"40px\">
\t\t\t\t\t\t\t\t\t<path fillrule=\"evenodd\" cliprule=\"evenodd\" d=\"M19.5709 9.47773H19.0445H16.7773H15.8057H10.9474V9.43725V7.0081V6.27935V4.61943H11.8785C12.4049 5.38866 13.2551 5.83401 14.1862 5.83401C15.1174 5.83401 15.9676 5.38866 16.4939 4.61943H17.4251V8.66802L19.0445 7.8583V3H15.5223L15.3198 3.44534C15.1984 3.76923 14.915 4.01215 14.5911 4.1336C13.9433 4.33603 13.336 4.05263 13.0526 3.48583L12.8907 3H9.36842V6.31984V7.17004H8.35628C7.74899 7.17004 7.1417 7.41296 6.69636 7.81781L2 12.1093V12.7166V14.336V17.1296V21.8664H3.61943H16.251C16.7368 21.8664 17.2227 21.664 17.587 21.3401C17.749 21.1781 17.8704 21.0972 18.0324 20.8138C18.3158 20.3684 18.4777 19.8016 18.4777 19.2753V19.1134C18.9231 19.0324 19.3279 18.83 19.6518 18.5466C19.6923 18.5061 19.6923 18.5061 19.7328 18.4656C20.1781 18.0202 20.4211 17.4534 20.4211 16.8057V15.834C20.4615 15.7935 20.4615 15.7935 20.502 15.753C20.9474 15.3077 21.1903 14.7409 21.1903 14.0931V13.2429C21.2308 13.2024 21.2308 13.2024 21.2713 13.2024C21.3117 13.2024 21.3117 13.1619 21.3522 13.1619C21.7571 12.7571 22 12.2308 22 11.6235C21.919 10.6923 21.3522 9.96356 20.583 9.59919C20.1377 9.47773 19.5709 9.47773 19.5709 9.47773ZM20.1377 11.9879C20.0567 12.0688 19.8947 12.1498 19.7733 12.1498H13.0526V13.7692H19.5304V14.0931C19.5304 14.2955 19.4494 14.4575 19.3279 14.6194C19.166 14.7409 19.004 14.8219 18.8016 14.8219H13.0931V16.4413H18.7611V16.7652C18.7611 16.9676 18.6802 17.1296 18.5587 17.2915C18.3968 17.413 18.2348 17.4939 18.0324 17.4939H13.0526V19.1134H16.8583V19.4372C16.8583 19.8421 16.5344 20.166 16.1296 20.166H3.61943V12.8381L7.78947 8.9919C7.95142 8.87045 8.15385 8.78947 8.35628 8.78947H9.36842V9.47773V11.0972H19.7733C20.0567 11.0972 20.2996 11.3401 20.2996 11.6235C20.2996 11.7449 20.2186 11.8664 20.1377 11.9879Z\" transform=\"scale(0.9)\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<div class=\"icon-progress-names\">Delivery</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"icon-progress-bar-loader  mt-2\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"col-3 text-center p-2\">
\t\t\t\t\t\t\t<div class=\"step-name-icon-wrapper\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"-1 0 25 25\" height=\"40px\" width=\"40px\">
\t\t\t\t\t\t\t\t\t<path fillrule=\"evenodd\" cliprule=\"evenodd\" d=\"M17.1063 3.35827L17.452 4.57404L5.36738 7.6272L5.02164 6.41107L17.1063 3.35827ZM18.4681 8.14968H9.14442L17.8435 5.95208L18.4681 8.14968ZM20.5626 14.7685H16.1058C15.7513 14.7685 15.4627 14.4964 15.4627 14.1618V13.119C15.4627 12.7845 15.7513 12.5124 16.1058 12.5124H20.5626V14.7685ZM16.1058 11.1575C14.9588 11.1575 14.0253 12.0374 14.0253 13.119V14.1618C14.0253 15.2435 14.9588 16.1233 16.1058 16.1233H19.0767H20.5626H22V10.1112C22 9.0295 21.0668 8.14968 19.9195 8.14968L18.4117 2.85292C18.3277 2.55691 18.1254 2.30905 17.8428 2.15533C17.5602 2.00127 17.2319 1.9599 16.9175 2.03978L4.486 5.18032C4.17166 5.25985 3.90876 5.44994 3.74573 5.71635C3.58269 5.98275 3.53881 6.29303 3.62317 6.58904L4.06688 8.15039C2.92601 8.15717 2 9.03378 2 10.1112V20.0385C2 21.1198 2.9332 22 4.0805 22H19.9195C21.0668 22 22 21.1198 22 20.0385V17.505L20.5626 16.8259V20.0385C20.5626 20.3727 20.2739 20.6448 19.9195 20.6448H4.0805C3.72568 20.6448 3.43743 20.3727 3.43743 20.0385V10.1112C3.43743 9.77701 3.72568 9.50489 4.0805 9.50489H19.9195C20.2739 9.50489 20.5626 9.77701 20.5626 10.1112V11.1575H16.1058Z\" transform=\"scale(0.9)\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<div class=\"icon-progress-names\">Payment</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"icon-progress-bar-loader  mt-2\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"col-3 text-center p-2\">
\t\t\t\t\t\t\t<div class=\"step-name-icon-wrapper\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"-2 -2 25 25\" height=\"40px\" width=\"40px\">
\t\t\t\t\t\t\t\t\t<path d=\"M20.2699 17.7866C19.9345 17.6587 19.5589 17.8267 19.4308 18.1623C19.0664 19.1155 18.3381 19.885 17.4064 20.3015C16.4746 20.718 15.4155 20.7474 14.4621 20.3831C13.5089 20.0189 12.7391 19.2909 12.3224 18.3593C11.9057 17.4276 11.8761 16.3686 12.24 15.4152C12.6041 14.4616 13.3319 13.6918 14.2635 13.2749C15.195 12.8578 16.254 12.8281 17.2076 13.1918C17.543 13.3199 17.9188 13.1519 18.0469 12.8165C18.1749 12.4811 18.0068 12.1053 17.6714 11.9772C16.3954 11.4898 14.978 11.5293 13.7311 12.0871C12.4841 12.6447 11.5098 13.675 11.0224 14.951C10.5352 16.2271 10.5747 17.6446 11.1325 18.8915C11.6902 20.1384 12.7205 21.1127 13.9966 21.5999C15.2728 22.0871 16.6902 22.0476 17.937 21.4898C19.1839 20.932 20.1582 19.9017 20.6454 18.6255C20.7733 18.2901 20.6051 17.9146 20.2699 17.7866L20.2699 17.7866Z\" transform=\"scale(0.9)\"></path>
\t\t\t\t\t\t\t\t\t<path d=\"M5.84951 15.6086C6.02201 15.6086 6.18745 15.5401 6.30935 15.4182C6.43125 15.2963 6.49964 15.131 6.49964 14.9585V14.3672H6.50435C7.21815 14.3672 7.87752 13.9864 8.23453 13.3684C8.59134 12.7502 8.59134 11.9887 8.23453 11.3706C7.87754 10.7525 7.21815 10.3717 6.50435 10.3717H5.30352C5.05718 10.3677 4.83115 10.2342 4.7087 10.0203C4.58644 9.80645 4.58571 9.54396 4.70688 9.32955C4.82824 9.11496 5.05353 8.98036 5.29989 8.97492H7.61542C7.97441 8.97492 8.26555 8.68396 8.26555 8.32479C8.26555 7.96581 7.97441 7.67467 7.61542 7.67467H6.49966V7.08421C6.49966 6.72504 6.2087 6.43408 5.84953 6.43408C5.49054 6.43408 5.1994 6.72504 5.1994 7.08421V7.67973C4.49866 7.71546 3.86794 8.11635 3.53819 8.73581C3.2084 9.35529 3.22781 10.1023 3.58952 10.7038C3.95105 11.3051 4.60173 11.6726 5.30354 11.6719H6.50474C6.7538 11.6719 6.98417 11.8049 7.10862 12.0208C7.23324 12.2364 7.23324 12.5024 7.10862 12.7183C6.98418 12.9339 6.75381 13.0669 6.50474 13.0669H3.84544C3.48627 13.0669 3.19531 13.358 3.19531 13.717C3.19531 14.076 3.48627 14.3672 3.84544 14.3672H5.19938V14.9583C5.19938 15.1306 5.26777 15.2961 5.38985 15.4181C5.51175 15.54 5.67718 15.6086 5.84951 15.6086V15.6086Z\" transform=\"scale(0.9)\"></path>
\t\t\t\t\t\t\t\t\t<path d=\"M20.1539 10.2513C20.1539 10.6105 20.445 10.9014 20.804 10.9014C21.1632 10.9014 21.4541 10.6105 21.4541 10.2513V6.48059C21.4534 5.75662 21.1653 5.06261 20.6535 4.55068C20.1417 4.0388 19.4475 3.75088 18.7237 3.75H2.73059C2.00662 3.75091 1.31261 4.03879 0.800679 4.55068C0.288796 5.06256 0.000882317 5.75662 0 6.48059V15.9697C0.000906975 16.6936 0.288787 17.3876 0.800679 17.8996C1.31256 18.4115 2.00662 18.6996 2.73059 18.7003H9.10184C9.46101 18.7003 9.75197 18.4091 9.75197 18.0501C9.75197 17.6911 9.46101 17.4 9.10184 17.4H2.73059C2.35146 17.3996 1.98777 17.2487 1.71964 16.9806C1.45153 16.7125 1.30079 16.349 1.30025 15.9697V6.48058C1.30079 6.10127 1.45153 5.73776 1.71964 5.46963C1.98774 5.20152 2.35142 5.0506 2.73059 5.05024H18.7237C19.1029 5.0506 19.4664 5.20152 19.7345 5.46963C20.0028 5.73773 20.1535 6.10127 20.1539 6.48058V7.64825H10.3904C10.0312 7.64825 9.74023 7.93921 9.74023 8.29838C9.74023 8.65737 10.0312 8.94851 10.3904 8.94851H20.1539L20.1539 10.2513Z\" transform=\"scale(0.9)\"></path>
\t\t\t\t\t\t\t\t\t<path fillrule=\"evenodd\" cliprule=\"evenodd\" d=\"M14.406 15.8208C14.2127 15.6347 13.9069 15.6343 13.7132 15.8201L13.5145 16.0106C13.3102 16.2065 13.309 16.5327 13.512 16.73L15.8118 18.9657C16.0078 19.1563 16.3205 19.1541 16.5138 18.9608L23.6393 11.8362C23.8377 11.6379 23.8341 11.3152 23.6314 11.1213L23.4329 10.9315C23.2364 10.7435 22.9257 10.747 22.7336 10.9394L16.5122 17.1675C16.3196 17.3603 16.008 17.3634 15.8116 17.1743L14.406 15.8208Z\" transform=\"scale(0.9)\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<div class=\"icon-progress-names\">Review</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div class=\"fondo hide\"></div>
\t\t\t\t<div class=\"hide\" id=\"modAb\">
\t\t\t\t\t<a class=\"close modal-close\">
\t\t\t\t\t\t<i class=\"i-remove\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"ps-2 pt-4 pb-2 pe-2 p-md-4 text-center\">
\t\t\t\t\t\t<p class=\"m-0 fw-bold lh-1 mb-3 cGry1 h4\">
\t\t\t\t\t\t\tDo you want to leave these entries?
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"modal d-inline-block\">
\t\t\t\t\t\t\t<p class=\"fs-6 mb-3 fw-bold cGry1\">
\t\t\t\t\t\t\t\tIf you choose to leave them free, it is possible that someone will acquire them.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"cnRed1 fw-bold\">
\t\t\t\t\t\t\t\tPlease, take in count that this tickets might not be avaliable, or not at least at the same price, if leave now.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"modal mb-0 d-flex\">
\t\t\t\t\t\t\t\t<div class=\"__release w-100\">
\t\t\t\t\t\t\t\t\t<button class=\" btn err fw-bold cWht p-2 d-inline-block text-center text-decoration-none user-select-close fs-6\">
\t\t\t\t\t\t\t\t\t\tLeave my tickets
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"__continue w-100\">
\t\t\t\t\t\t\t\t\t<button class=\" btn pri modal-close p-2 d-inline-block text-center text-decoration-none user-select-none fs-6\">Continue</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"kick-user-modal\" class=\"hide\">
\t\t\t\t\t<div class=\"text-center m-0 fw-bold lh-1 fs-3 cnRed1\">
\t\t\t\t\t\tTime is up!
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<span class=\"m-0 fw-bold lh-1 fs-6\">You will be redirected to the event listing page.</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"datos\" class=\"tile ";
            // line 296
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sesion"] ?? null), 296, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pago"] ?? null), 296, $this->source), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"tile mb-4 p-0\">
\t\t\t\t\t<div class=\"p-4 pb-1\">
\t\t\t\t\t\t<div class=\"mt-2 mb-3\">
\t\t\t\t\t\t\t<div class=\"w-100 cb mb-2 d-table-row\">
\t\t\t\t\t\t\t\t<div class=\"d-table-cell bGry6 p-2 ticket-left pt-4 pb-4 ps-3\" style=\"width: 70%;\">
\t\t\t\t\t\t\t\t\t<p class=\"m-0 fw-bold lh-1 h3\">
\t\t\t\t\t\t\t\t\t\t";
            // line 303
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "local", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\tvs
\t\t\t\t\t\t\t\t\t\t";
            // line 305
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "visitante", [], "any", false, false, true, 305), 305, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"m-0 mt-2 mb-1 fw-bold lh-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 308
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "diaSem", [], "any", false, false, true, 308), 308, $this->source), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\t\t\t";
            // line 309
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "dia", [], "any", false, false, true, 309), 309, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 310
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "mesComp", [], "any", false, false, true, 310), 310, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 311
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "anio", [], "any", false, false, true, 311), 311, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 312
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "hora", [], "any", false, false, true, 312), 312, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 lh-sm\">";
            // line 314
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "estadio", [], "any", false, false, true, 314), 314, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t(";
            // line 315
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "ciudad", [], "any", false, false, true, 315), 315, $this->source), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\t\t\t";
            // line 316
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "pais", [], "any", false, false, true, 316), 316, $this->source), "html", null, true);
            echo ")</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center pt-3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"m-0 fw-bold lh-1 cAzul2\">
\t\t\t\t\t\t\t\t\t\t\tGood - 6,3
\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t<span class=\"fw-normal m-0\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"position-relative\" style=\"width: fit-content;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-nowrap hover\">&nbsp;<i class=\"i-info-sign position-relative\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center m-0 fw-normal lh-1 derecha\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tThis ranking is based on the seat location and individual price of these tickets compared to all other tickets for sale on our website for this event.
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"m-0 fw-bold lh-1 pt-3 pb-1 d-inline-block me-1\">
\t\t\t\t\t\t\t\t\t\t<strong>Notes:
\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t<div class=\"m-0 fw-bold lh-1 mt-1 fst-normal\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"i-thumbs-up cAzul4 fs-6\"></span>
\t\t\t\t\t\t\t\t\t\t\tUnlimited visibility
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-table-cell bGry6 p-2 text-center align-items-center ticket-right position-relative\" style=\"width: 30%;\">
\t\t\t\t\t\t\t\t\t<div class=\"position-relative h-100\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bdrb\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-3 m-0 fw-normal lh-1 text-uppercase ms-3 me-3 bdr h2\">
\t\t\t\t\t\t\t\t\t\t\t\tTickets for
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 348
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entradas"] ?? null), 348, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"h-100 m-0 w-100 mt-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-table-cell align-items-center w-50 ps-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0 fw-normal lh-1 h5\">Section</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mt-2 fw-bold lh-1 cAzul4 h5\" id=\"listing-section\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 356
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["seccion"] ?? null), 356, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 358
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/partidos/assets/images/barcode.png"), "html", null, true);
            echo "\" alt=\"barcode\" width=\"150\" height=\"100\" class=\"w-100\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mt-2 mb-3\">
\t\t\t\t\t<div class=\"tile p-0 d-flex flex-row flex-nowrap\">
\t\t\t\t\t\t<div class=\"col-7 pt-3 pb-3 ps-2 pe-2 p-2\">
\t\t\t\t\t\t\t<div class=\"m-0 fw-bold lh-1 mb-3 h3 ps-3 mt-2\">
\t\t\t\t\t\t\t\t";
            // line 370
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["local"], "estadio", [], "any", false, false, true, 370), 370, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-1 ps-3\">
\t\t\t\t\t\t\t\t<i class=\"i-stadium fs-5 align-items-center\"></i>
\t\t\t\t\t\t\t\t<span class=\"m-0 fw-bold lh-1 align-items-center\">Capacity: 51500</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"m-0 fw-bold lh-1 cAzul5 mb-1 ps-3 fs-5\">
\t\t\t\t\t\t\t\tThe experience of a great hall - certainly unforgettable
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-5 p-0\">
\t\t\t\t\t\t\t<div class=\"w-100 h-100\" style=\"background-image: url(https://img.vggcdn.net/img/google-static-maps/24static.png); background-size: cover;\">
\t\t\t\t\t\t\t\t<div class=\"w-100 h-100\">.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button id=\"ocultarDatos\" class=\"btn bAzul3 cWht fw-bold w-100 mt-3\">
\t\t\t\t\t<span class=\"align-items-center\">Continue</span>
\t\t\t\t</button>
\t\t\t\t<p class=\"mt-4 text-center\">
\t\t\t\t\t<i class=\"i-lock fs-5 align-items-center\"></i>
\t\t\t\t\t<span class=\"m-0 fw-bold fs-5 lh-1 ps-1 align-items-center\">Secure purchase</span>
\t\t\t\t</p>
\t\t\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 396
        echo "
            <div id=\"sesion\" class=\"tile hide ";
        // line 397
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sesion"] ?? null), 397, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pago"] ?? null), 397, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sesionIni"] ?? null), 397, $this->source), "html", null, true);
        echo "\">
                <ul class=\"tabs d-block m-0\">
                    <li id=\"js-siTab\" class=\"act\">
                        <a>Sign In</a>
                    </li>
                    <li id=\"js-nuTab\" class=\"\">
                        <a>Sign Up</a>
                    </li>
                </ul>
                <div id=\"js-siPanel\" class=\"\">
                    ";
        // line 407
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["fallo"] ?? null), 407, $this->source));
        echo "
                    <form action=\"";
        // line 408
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "matches/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 408, $this->source), "html", null, true);
        echo "/buy\" class=\"\" id=\"sign-in-html\" method=\"post\">
                        <div class=\"tile m-3 mt-0\">
                            <div class=\"mb-3\">
                                <label for=\"userIn\">Email</label><br>
                                <span class=\"position-relative\">
                                    <input required id=\"userIn\" name=\"userIn\" type=\"email\" value=\"\" pattern=\"^[a-zA-Z0-9.!#\$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\\.[a-zA-Z0-9-]+)*\$\">
                                </span>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"passIn\">Password</label><br>
                                <span class=\"position-relative\">
                                    <input id=\"passIn\" name=\"passIn\" type=\"password\" pattern=\"[A-Za-z0-9]{8,12}\">
                                </span>
                            </div>
                            <input class=\"d-none\"type=\"number\" value=\"";
        // line 422
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entradas"] ?? null), 422, $this->source), "html", null, true);
        echo "\" name=\"entradas\" id=\"entradas\">
                            <input class=\"d-none\" type=\"number\" value=\"";
        // line 423
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["precio"] ?? null), 423, $this->source), "html", null, true);
        echo "\" name=\"precio\" id=\"precio\">
                            <input class=\"d-none\" type=\"text\" value=\"";
        // line 424
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["seccion"] ?? null), 424, $this->source), "html", null, true);
        echo "\" name=\"seccion\" id=\"seccion\">
                            <div class=\"text-end\">
                                <a class=\"m-0 fw-bold lh-1\" href=\"\">Forgot password?</a>
                            </div>
                            <div>
                                <button id=\"submit-form\" type=\"submit\" class=\"btn bAzul3 cWht fw-bold w-100 mt-3\" name=\"SignIn\"  value=\"SignIn\">
                                    <span class=\"align-content-center\">Continue</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div id=\"js-nuPanel\" class=\"hide\">
                    <form action=\"";
        // line 437
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "matches/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 437, $this->source), "html", null, true);
        echo "/buy\" class=\"sign-up-htm\" method=\"post\">
                        <div class=\"tile m-3 mt-0\">
                            <div class=\"mb-3 d-flex flex-column flex-md-row\" id=\"nombre\">
                                <div class=\"col-md-6 col col-12\">
                                    <label for=\"name\">Name</label><br>
                                    <span class=\"position-relative\">
                                        <input required id=\"name\" name=\"name\" type=\"text\" value=\"\">
                                    </span>
                                </div>
                                <div class=\"col-md-6 col col-12 mb-0 \">
                                    <label for=\"surname\">Surname</label><br>
                                    <span class=\"position-relative\">
                                        <input required id=\"surname\" name=\"surname\" type=\"text\" value=\"\">
                                    </span>
                                </div>
                            </div>
                            <div class=\"mb-3 d-md-flex\" id=\"nombre\">
                                <div class=\"col-md-6 col col-12\">
                                    <label for=\"email\">Email</label><br>
                                    <span class=\"position-relative\">
                                        <input required id=\"email\" name=\"email\" type=\"email\" value=\"\" pattern=\"^[a-zA-Z0-9.!#\$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\\.[a-zA-Z0-9-]+)*\$\">
                                    </span><br>
                                    <small>You will receive a confirmation email.</small>
                                </div>
                                <div class=\"col-md-6 col col-12\">
                                    <label for=\"emailRep\">Repeat email</label><br>
                                    <span class=\"position-relative\">
                                        <input id=\"emailRep\" name=\"emailRep\" type=\"email\" value=\"\" pattern=\"^[a-zA-Z0-9.!#\$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\\.[a-zA-Z0-9-]+)*\$\" required>
                                    </span>
                                </div>
                            </div>
                            <div class=\"mb-3 d-md-flex\" id=\"nombre\">
                                <div class=\"col-md-6 col col-12\">
                                    <label for=\"pass\">Password</label><br>
                                    <span class=\"position-relative\">
                                        <input required id=\"pass\" name=\"pass\" type=\"password\" pattern=\"[A-Za-z0-9]{8,12}\"></span>
                                </div>
                                <div class=\"col-md-6 col col-12\">
                                    <label for=\"passRep\">Repeat password</label><br>
                                    <span class=\"position-relative\">
                                        <input required id=\"passRep\" name=\"passRep\" type=\"password\" pattern=\"[A-Za-z0-9]{8,12}\"></span>
                                </div>
                            </div>
                            <div class=\"mb-3 d-flex\" id=\"nombre\">
                                <div class=\"col-md-6 col col-12\">
                                    <label for=\"phone\">Telephone</label>
                                    <div class=\"mb-0\">
                                        <span class=\"position-relative\">
                                            <input id=\"phone\" name=\"phone\" type=\"tel\" value=\"\" pattern=\"^(\\+34|0034|34)?[6-7]\\d{8}\$\" placeholder=\"+34600000000 or 600000000\"></span>
                                    </div>
                                </div>
                            </div>
                            <input class=\"d-none\"type=\"number\" value=\"";
        // line 489
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entradas"] ?? null), 489, $this->source), "html", null, true);
        echo "\" name=\"entradas\" id=\"entradas\">
                            <input class=\"d-none\" type=\"number\" value=\"";
        // line 490
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["precio"] ?? null), 490, $this->source), "html", null, true);
        echo "\" name=\"precio\" id=\"precio\">
                            <input class=\"d-none\" type=\"text\" value=\"";
        // line 491
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["seccion"] ?? null), 491, $this->source), "html", null, true);
        echo "\" name=\"seccion\" id=\"seccion\">
                            <div>
                                <button id=\"submit-form\" type=\"submit\" class=\"btn bAzul3 cWht fw-bold w-100 mt-3\" name=\"SignUp\"  value=\"SignUp\">
                                    <span class=\"align-content-center\">Continue</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class=\"fs-6 pt-1 pb-1\">
                    <div class=\"cGry3 d-flex flex-column align-items-center text-center\">
                        <span>
                        By logging in or creating an account, you acknowledge and agree to our <a href=\"\" target=\"_blank\">privacy policy</a>. You can receive SMS notifications from us and you can unsubscribe at any time.
                        </span>
                    </div>
                </div>
            </div>

            <div id=\"pago\" class=\"tile ";
        // line 510
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["presesion"] ?? null), 510, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pago"] ?? null), 510, $this->source), "html", null, true);
        echo "\">
                <div id=\"js-payPanel\" class=\"\">
                    <form action=\"";
        // line 512
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "matches/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 512, $this->source), "html", null, true);
        echo "/buy\" class=\"\" id=\"SignIn\" method=\"post\">
                        <div class=\"tile m-3 mt-0\">
                            <div class=\"mb-3 ps-2 pe-2\">
                                <label for=\"CardNumber\">Card number</label><br>
                                <span class=\"position-relative\">
                                    <input class=\"js-sign-card\" required=\"true\" id=\"CardNumber\" name=\"CardNumber\" type=\"number\" size=\"16\" value=\"\" placeholder=\"0000 0000 0000 0000\">
                                </span>
                            </div>
                            <div class=\"mb-3 d-flex\" id=\"nombre\">
                                <div class=\"col-md-6 col col-12\">
                                    <label for=\"mesAnioInput\">Expire date (MM/YY)</label>
                                    <span class=\"position-relative\">
                                        <input type=\"text\" id=\"mesAnioInput\" name=\"mesAnioInput\" pattern=\"\\d{2}/\\d{2}\" placeholder=\"MM/YY\" required></span>
                                </div>
                                <div class=\"col-md-6 col col-12\">
                                    <label for=\"ccv\">CCV</label>
                                    <div class=\"mb-0\">
                                        <span class=\"position-relative\">
                                            <input id=\"ccv\" name=\"ccv\" placeholder=\"XXX\" spellcheck=\"false\" type=\"number\" value=\"\" size=\"3\"></span>
                                    </div>
                                </div>
                                <input class=\"d-none\"type=\"number\" value=\"";
        // line 533
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entradas"] ?? null), 533, $this->source), "html", null, true);
        echo "\" name=\"entradas\" id=\"entradas\">
                                <input class=\"d-none\" type=\"number\" value=\"";
        // line 534
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["precio"] ?? null), 534, $this->source), "html", null, true);
        echo "\" name=\"precio\" id=\"precio\">
                                <input class=\"d-none\" type=\"text\" value=\"";
        // line 535
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["seccion"] ?? null), 535, $this->source), "html", null, true);
        echo "\" name=\"seccion\" id=\"seccion\">
                            </div>
                            <div>
                                <button id=\"pago-form\" class=\"btn bAzul3 cWht fw-bold w-100 mt-3\" name=\"pago\">
                                    <span class=\"align-content-center\">Continue</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id=\"conf\" class=\"";
        // line 547
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["conf"] ?? null), 547, $this->source), "html", null, true);
        echo "\">
                <div class=\"w-100 text-center tile\">
                    <i class=\"i-ok cAzul4\"></i><br>
                    <p>Your order has been placed successfully. We will now send you a confirmation email.</p>
                </div>
            </div>
\t    </section>
    </section>
";
    }

    public function getTemplateName()
    {
        return "@partidos/compra.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  742 => 547,  727 => 535,  723 => 534,  719 => 533,  693 => 512,  686 => 510,  664 => 491,  660 => 490,  656 => 489,  599 => 437,  583 => 424,  579 => 423,  575 => 422,  556 => 408,  552 => 407,  535 => 397,  532 => 396,  500 => 370,  485 => 358,  480 => 356,  469 => 348,  434 => 316,  430 => 315,  426 => 314,  421 => 312,  417 => 311,  413 => 310,  409 => 309,  405 => 308,  399 => 305,  394 => 303,  382 => 296,  229 => 146,  166 => 86,  155 => 78,  121 => 47,  112 => 41,  108 => 40,  104 => 39,  99 => 37,  95 => 36,  91 => 35,  87 => 34,  83 => 33,  74 => 27,  69 => 25,  64 => 23,  51 => 12,  47 => 11,  43 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@partidos/compra.html.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\partidos\\templates\\compra.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 11);
        static $filters = array("escape" => 2, "raw" => 4);
        static $functions = array("attach_library" => 2, "file_url" => 358, "url" => 408);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'raw'],
                ['attach_library', 'file_url', 'url']
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
