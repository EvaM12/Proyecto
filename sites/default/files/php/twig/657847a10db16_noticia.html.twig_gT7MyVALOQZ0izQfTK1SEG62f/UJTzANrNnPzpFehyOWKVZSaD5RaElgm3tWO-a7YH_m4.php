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
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("noticias/noticia"), "html", null, true);
        echo "
<script>
    /**
     * Realiza una solicitud AJAX a la API de ESPN para obtener los datos de una noticia.
     * Luego, muestra los datos obtenidos en una tabla en el documento HTML.
     *
     * @param {number} id - El ID de la noticia a obtener.
     */
    \$(document).ready(function () {
        \$.ajax({
            url: \"https://now.core.api.espn.com/v1/sports/news/\" + ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 12, $this->source), "html", null, true);
        echo ",
            method: \"GET\",
            success: function (data) {
                // Obtener los datos de los eventos
                var newsData = data.headlines[0];

                // Mostrar los datos en la tabla
                var noticiasBody = \$(\"#noticias\");

                var title = newsData.headline;
                var desc = newsData.description;
                var story = newsData.story.replace(/<a\\b[^>]*>(.*?)<\\/a>/gi, '\$1');;
                var image = newsData.images[0].url;
                var width = newsData.images[0].width;
                var height = newsData.images[0].height;
                var fecha = data.timestamp;

                const dateString = fecha;
                const dateObject = new Date(dateString);

                // Restar una hora
                dateObject.setHours(dateObject.getHours() - 1);

                // Obtener los componentes de la fecha
                const day = dateObject.getDate();
                const month = dateObject.toLocaleString('en-US', { month: 'long' });
                const year = dateObject.getFullYear();
                const hours = dateObject.getHours();
                const minutes = dateObject.getMinutes();

                // Formatear la fecha en el nuevo formato
                const fechaRes = `\${day} \${month} \${year} \${hours}:\${minutes}`;

                var categories = '';
                for (var j = 0; j < newsData.categories.length; j++) {
                    categories += `<li><p>\${newsData.categories[j].description}</p></li>`;
                }

                noticiasBody.append(`
                <h1 class=\"fw-semibold mb-3\">\${title}</h1>
                <p>\${fechaRes}</p>
                <p>\${desc}</p>
                <p>\${story}</p>

                <blockquote>
                    <img src=\"\${image}\">
                </blockquote>

                <ul class=\"post-tags p-3 list-unstyled float-start w-100 text-wrap m-0\">
                    \${categories}
                </ul>`);
            },
            error: function () {
                console.log(\"Error al obtener los datos de la API\");
            }
        });
    });
</script>

<div class=\"container pb-3 pt-3\">
\t<div class=\"row\">
\t\t<!--News Start-->
\t\t<div class=\"col col-12 ps-lg-2 pe-lg-2\">
\t\t\t<div class=\"news-large-post float-start w-100 overflow-hidden\">
\t\t\t\t<div class=\"post-txt float-start w-100 pt-lg-4 ps-lg-5 pe-lg-5 pb-lg-4 p-3\" id=\"noticias\">

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
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
        return array (  53 => 12,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@noticias/noticia.html.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\noticias\\templates\\noticia.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array("attach_library" => 2);

        try {
            $this->sandbox->checkSecurity(
                [],
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
