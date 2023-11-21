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

/* @noticias/noticia.html.twig */
class __TwigTemplate_84846530eb7c32ed865c381892dfb173 extends Template
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
        echo "
<div class=\"noticias\"></div>
<script>
    //http://api-app.espn.com/v1/video/clips/38727871
    // dame las noticias de la liga española
    //https://site.api.espn.com/apis/site/v2/sports/soccer/esp.1/news
    \$(document).ready(function () {
        \$.ajax({
            url: \"https://now.core.api.espn.com/v1/sports/news/\" + ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 10, $this->source), "html", null, true);
        echo ",
            method: \"GET\",
            success: function (data) {
                // Obtener los datos de los eventos
                var newsData = data.headlines[0];

                // Mostrar los datos en la tabla
                var noticiasBody = \$(\".noticias\");

                var title = newsData.title;
                var desc = newsData.description;
                var story = newsData.story;
                var image = newsData.images[0].url;
                var width = newsData.images[0].width;
                var height = newsData.images[0].height;
                var fecha = data.timestamp;

                var categories = '';
                for (var j = 0; j < newsData.categories.length; j++) {
                    categories = categories + newsData.categories[j].description + ', ';
                }

                categories = categories.slice(0, -2);

                var noticias =
                    \"<h1>\" + title + \"</h1>\" +
                    \"<p>\" + desc + \"</p>\" +
                    \"<p>\" + story + \"</p>\" +
                    \"<img src='\" + image + \"' width='\" + width + \"' height='\" + height + \"'>\" +
                    \"<p>\" + categories + \"</p>\" +
                    \"<p>\" + fecha + \"</p>\";
                noticiasBody.append(noticias);
            },
            error: function () {
                console.log(\"Error al obtener los datos de la API\");
            }
        });
    });

</script>";
    }

    public function getTemplateName()
    {
        return "@noticias/noticia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@noticias/noticia.html.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\noticias\\templates\\noticia.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
