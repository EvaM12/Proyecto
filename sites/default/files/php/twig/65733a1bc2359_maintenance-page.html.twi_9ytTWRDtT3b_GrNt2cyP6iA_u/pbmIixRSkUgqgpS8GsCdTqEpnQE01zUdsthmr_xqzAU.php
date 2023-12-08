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

/* core/modules/system/templates/maintenance-page.html.twig */
class __TwigTemplate_82a4422b9ce04d01b4d66a1b8c7db563 extends Template
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
        // line 14
        echo "<header role=\"banner\">
  ";
        // line 15
        if (($context["logo"] ?? null)) {
            // line 16
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 16, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">
      <img src=\"";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 17, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\"/>
    </a>
  ";
        }
        // line 20
        echo "
  ";
        // line 21
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 22
            echo "    ";
            if (($context["site_name"] ?? null)) {
                // line 23
                echo "      <h1>
        <a href=\"";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 24, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 24, $this->source), "html", null, true);
                echo "</a>
      </h1>
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            if (($context["site_slogan"] ?? null)) {
                // line 29
                echo "      <div>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 29, $this->source), "html", null, true);
                echo "</div>
    ";
            }
            // line 31
            echo "  ";
        }
        // line 32
        echo "</header>

<main role=\"main\">
  ";
        // line 35
        if (($context["title"] ?? null)) {
            // line 36
            echo "    <h1>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 36, $this->source), "html", null, true);
            echo "</h1>
  ";
        }
        // line 38
        echo "
  ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "

  ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "
</main>

";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 44)) {
            // line 45
            echo "  <aside role=\"complementary\">
    ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "
  </aside>
";
        }
        // line 49
        echo "
";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 50)) {
            // line 51
            echo "  <aside role=\"complementary\">
    ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "
  </aside>
";
        }
        // line 55
        echo "
";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 56)) {
            // line 57
            echo "  <footer role=\"contentinfo\">
    ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "
  </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 58,  151 => 57,  149 => 56,  146 => 55,  140 => 52,  137 => 51,  135 => 50,  132 => 49,  126 => 46,  123 => 45,  121 => 44,  115 => 41,  110 => 39,  107 => 38,  101 => 36,  99 => 35,  94 => 32,  91 => 31,  85 => 29,  83 => 28,  80 => 27,  70 => 24,  67 => 23,  64 => 22,  62 => 21,  59 => 20,  51 => 17,  44 => 16,  42 => 15,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/system/templates/maintenance-page.html.twig", "C:\\xampp\\htdocs\\AllTickets\\core\\modules\\system\\templates\\maintenance-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("escape" => 16, "t" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
