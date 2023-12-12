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

/* @sesion/sesion.html.twig */
class __TwigTemplate_22643b60e1a8a1921e26176c2a11cf79 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sesion/sesion"), "html", null, true);
        echo "

";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["redireccion"] ?? null), 5, $this->source));
        echo "
    ";
        // line 21
        echo "
    <div class=\"gen d-flex ustify-content-center align-items-center\">
        <div class=\"general w-100 position-relative m-auto\">
            <input type=\"checkbox\" id=\"flip\">
            <div class=\"cover position-absolute top-0 h-100 w-50 \">
                <div class=\"position-absolute top-0 h-100 w-100\">
                    <img src=\"";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("modules/sesion/assets/images/fondo.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"position-absolute h-100 w-100\">
                    <div class=\"text position-absolute w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center\">
                        <span class=\"text-1 fw-bold\">All European football in your hand</span>
                        <span class=\"text-2 fw-semibold\">Try it!</span>
                    </div>
                </div>
            </div>
            <div class=\"forms w-100 h-100\">
                <div class=\"form-content justify-content-between align-items-center d-flex\"> <!-- quitar form-content-->
                    <div class=\"signin-form\">
                        <div class=\"title fw-semibold position-relative\">Sign in</div>
                        ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["fallo"] ?? null), 38, $this->source));
        echo "
                        <form onsubmit=\"return validarFormulario()\" method=\"post\" action=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "session\">
                            <div class=\"mt-4\">
                                <div class=\"input-box d-flex align-items-center w-100 position-relative mt-2 mb-2\">
                                    <i class=\"cLila i-mail\"></i>
                                    <input type=\"text\" placeholder=\"Email\" required class=\"w-100 h-100 fw-semibold\" name=\"userIn\" pattern=\"^[a-zA-Z0-9.!#\$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\\.[a-zA-Z0-9-]+)*\$\">
                                </div>
                                <div class=\"input-box d-flex align-items-center w-100 position-relative mt-2 mb-2\">
                                    <i class=\"cLila i-lock\"></i>
                                    <input type=\"password\" placeholder=\"Password\" required class=\"w-100 h-100 fw-semibold\" name=\"passIn\" pattern=\"[A-Za-z0-9]{8,12}\">
                                </div>
                                <div class=\"text\"><a href=\"#\">Forgot password?</a></div>
                                <div class=\"button input-box p-0\">
                                    <input type=\"submit\" class=\"w-100 h-100 fw-semibold bLila\" name=\"SignIn\" id=\"SignIn\" value=\"SignIn\">
                                </div>
                                <div class=\"text text-center mt-4\">Don't have an account? <label for=\"flip\" class=\"cLila\">Sign up now</label></div>
                            </div>
                        </form>
                    </div>
                    <div class=\"signup-form\">
                        <div class=\"title fw-semibold position-relative\">Sign up</div>
                        ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["fallo"] ?? null), 59, $this->source));
        echo "
                        <form onsubmit=\"return validarFormulario()\" method=\"post\" action=\"";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "session\" class=\"sign-up-form\">
                            <div class=\"mt-4\">
                                <div class=\"box d-md-flex flex-row\">
                                    <div class=\"input-box p-2 d-flex align-items-center w-100 position-relative mt-2 mb-2\">
                                        <i class=\"i-user cLila\"></i>
                                        <input type=\"text\" placeholder=\"Name\" name=\"name\" required class=\"w-100 h-100 fw-semibold\">
                                    </div>
                                    <div class=\"input-box p-2 d-flex align-items-center w-100 position-relative mt-2 mb-2\">
                                        <i class=\"i-user cLila\"></i>
                                        <input type=\"text\" placeholder=\"Surname\" name=\"surname\" required class=\"w-100 h-100 fw-semibold\">
                                    </div>
                                </div>
                                <div class=\"box d-md-flex flex-row\">
                                    <div class=\"input-box p-2 d-flex align-items-center w-100 position-relative mt-2 mb-2\">
                                        <i class=\"cLila i-mail\"></i>
                                        <input type=\"email\" placeholder=\"Email\" required class=\"w-100 h-100 fw-semibold\" pattern=\"^[a-zA-Z0-9.!#\$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\\.[a-zA-Z0-9-]+)*\$\" name=\"email\" id=\"email\">
                                    </div>
                                    <div class=\"input-box p-2 d-flex align-items-center w-100 position-relative mt-2 mb-2\">
                                        <i class=\"cLila i-mail\"></i>
                                        <input type=\"email\" placeholder=\"Repeat email\" required class=\"w-100 h-100 fw-semibold\" pattern=\"^[a-zA-Z0-9.!#\$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\\.[a-zA-Z0-9-]+)*\$\" name=\"emailRep\" id=\"emailRep\">
                                    </div>
                                </div>
                                <div class=\"box d-md-flex flex-row\">
                                    <div class=\"input-box p-2 d-flex align-items-center w-100 position-relative mt-2 mb-2\">
                                        <i class=\"cLila i-lock\"></i>
                                        <input type=\"password\" name=\"pass\" placeholder=\"Password\" required class=\"w-100 h-100 fw-semibold\" pattern=\"[A-Za-z0-9]{8,12}\" id=\"pass\">
                                    </div>
                                    <div class=\"input-box p-2 d-flex align-items-center w-100 position-relative mt-2 mb-2\">
                                        <i class=\"cLila i-lock\"></i>
                                        <input type=\"password\" name=\"passRep\" placeholder=\"Repeat password\" required class=\"w-100 h-100 fw-semibold\" pattern=\"[A-Za-z0-9]{8,12}\" id=\"passRep\">
                                    </div>
                                </div>
                                <div class=\"box d-md-flex flex-row\">
                                    <div class=\"input-box p-2 d-flex align-items-center w-100 position-relative mt-2 mb-2\">
                                        <i class=\"cLila i-phone\"></i>
                                        <input type=\"tel\" placeholder=\"Enter telephone\" required class=\"w-100 h-100 fw-semibold\" pattern=\"^(\\+34|0034|34)?[6-7]\\d{8}\$\" name=\"phone\">
                                    </div>
                                </div>
                                <div class=\"button input-box p-0\">
                                    <input type=\"submit\" value=\"Sign up\" class=\"w-100 h-100 fw-semibold bLila\">
                                </div>
                                <div class=\"text text-center mt-4\">Already have an account? <label for=\"flip\" class=\"cLila\">Sign in now</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script>
    \$(document).ready(function () {
        \$('.sign-up-form').submit(function (event) {
            if (!validarFormulario()) {
                event.preventDefault(); // Evita que el formulario se envíe
            }
        });

        function validarFormulario() {
            var password = \$('#pass').val();
            var confirmPassword = \$('#passRep').val();
            var email = \$('#email').val();
            var confirmEmail = \$('#emailRep').val();

            if (password !== confirmPassword) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'The passwords are not the same',
                });
                return false; // Evita que el formulario se envíe
            }

            if (email !== confirmEmail) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'The emails are not the same',
                });
                return false; // Evita que el formulario se envíe
            }
            return true;
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "@sesion/sesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 60,  97 => 59,  74 => 39,  70 => 38,  56 => 27,  48 => 21,  44 => 5,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@sesion/sesion.html.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\sesion\\templates\\sesion.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2, "raw" => 5);
        static $functions = array("attach_library" => 2, "file_url" => 27, "url" => 39);

        try {
            $this->sandbox->checkSecurity(
                [],
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
