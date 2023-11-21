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

/* @noticias/video.html.twig */
class __TwigTemplate_42a40bd42bc3e893dbc14b1ec6001799 extends Template
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
        echo "<div class=\"video\"></div>
<script>
    //http://api-app.espn.com/v1/video/clips/38727871
    // dame las noticias de la liga española
    //https://site.api.espn.com/apis/site/v2/sports/soccer/esp.1/news
    \$(document).ready(function () {
        \$.ajax({
            url: \"https://api-app.espn.com/v1/video/clips/\" + ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 8, $this->source), "html", null, true);
        echo ",
            method: \"GET\",
            success: function (data) {
                // Obtener los datos de los eventos
                var videoData = data.videos[0];

                // Mostrar los datos en la tabla
                var videoBody = \$(\".video\");

                var title = videoData.headline;
                var desc = videoData.description;
                var video = videoData.links.source.href;
                var partes = videoData.links.source.href.split('.');
                var tipo = partes[partes.length - 1];
                var fecha = data.timestamp;

                var categories = '';
                for (var j = 0; j < videoData.categories.length; j++) {
                    categories = categories + videoData.categories[j].description + ', ';
                }

                categories = categories.slice(0, -2);

                var video =
                    \"<h1>\" + title + \"</h1>\" +
                    \"<p>\" + desc + \"</p>\" +
                    \"<video controls> <source src='\" + video + \"' type='video/\" + tipo + \"'>Tu navegador no soporta el tag de video.</video>\" +
                    \"<p>\" + categories + \"</p> <p>\" + fecha + \"</p>\";
                videoBody.append(video);
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
        return "@noticias/video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@noticias/video.html.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\noticias\\templates\\video.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 8);
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
