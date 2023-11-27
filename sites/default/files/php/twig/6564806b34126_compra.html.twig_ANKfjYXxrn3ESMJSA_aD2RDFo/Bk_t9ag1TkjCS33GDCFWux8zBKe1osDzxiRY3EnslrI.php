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
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("partidos/compra"), "html", null, true);
        echo "

";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entradas"] ?? null), 17, $this->source), "html", null, true);
        echo "

    <section class=\"cabecera text-center p-0 align-content-center align-items-center flex-grow-1 justify-content-start\">
        <div class=\"titulo m-0 fw-bold lh-1 flex-grow-1 justify-content-start pt-5\">
            <p class=\"cWht fs-1 position-relative text-center d-inline-block m-0 fw-bolder lh-1 p-2 pt-5\">
                Entradas Eintracht Frankfurt
            </p>
        </div>

        <div class=\"linea p-1 m-0 fw-bold lh-1\">
            <div class=\"p-2 bGry1 text-center\">
                <div class=\"d-flex flex-column align-items-center text-center d-inline\">
                    <div class=\"d-inline\">
                        <span class=\"cWht\">
                            Los precios incluyen un IVA aproximado y también una tasa de reserva, no incluyen la
                            tasa de envío.
                        </span>
                        <span>
                            <span class=\"fs-6 hover cWht\">&nbsp;
                                <i class=\"i-info-sign align-items-center\"></i>
                            </span>
                            <div class=\"text-center fw-light lh-1 abajo\">
                                <p class=\"fs-6 m-0 text-wrap\">
                                    Total:IVA. Las tarifas de entrega y manipulación serán calculadas después durante el
                                    proceso de pago, cuando selecciones tu método de entrega preferido y (si aplica) la
                                    ubicación.
                                </p>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"contenido container d-flex ps-3  pt-4\">
        <section class=\"informacion col-md-4 col col-12 mb-3 pe-2\">
            <div class=\"tile mb-4 p-0 \">
                <div class=\"mb-2 w-100 \">
                    <p class=\"bGrn2 cWht m-0 fw-bold lh-1 p-3 h2\"> Datos de tu pedido </p>

                    <div class=\" p-2 bdrb\">
                        <div class=\"event-detail mb-2\">
                            <div class=\"bdrb dot bm mb-2\">
                                <p class=\"m-0 fw-bold lh-1 m-0 pb-1 h3\">Eintracht Frankfurt vs Borussia
                                    Dortmund
                                    <span class=\"bnRed2 cWht pt-1 pb-1 ps-2 pe-2 d-inline-block mb-1 m-0 fw-bold lh-1 \">
                                        Dentro de <span class=\"fs-6\">2</span> días
                                    </span>
                                </p>

                            </div>
                            <p class=\"m-0 fw-bold lh-1\">
                                domingo, 29 octubre 2023 15:30
                            </p>
                            <p class=\"m-0 fw-normal lh-1 d-inline-block pt-2 pb-2\">Deutsche Bank Park (Commerzbank
                                Arena),
                                Frankfurt, Alemania</p>
                        </div>
                        <div class=\"mb-1\">
                            <span class=\"m-0 fw-bold lh-1 bGry7 ps-2 pe-2 pt-1 pb-1 d-inline-block me-1 mb-1 \">
                                <strong>Sección: </strong> Tribuna Superior
                            </span>
                        </div>
                    </div>

                    <!-- añadirle js para ver si funciona -->
                    <div class=\"bdrb\">
                        <div class=\"d-flex flex-column text-wrap w-100 p-3\">
                            <div class=\"demand-status-container d-flex text-center p-1\">
                                <div class=\"m-0 fw-bold lh-1 me-2 col-6\">La demanda para este evento</div>
                                <div class=\"cWht d-flex align-items-center col-6\">
                                    <div class=\"bYel5 demand-status d-flex flex-row w-50 align-items-center\"></div>
                                    <div class=\"bnOrg4 demand-status d-flex flex-row w-50 align-items-center\"></div>
                                    <div
                                        class=\"bnRed2 cWht demand-status demand-status-active active d-flex flex-row w-50 align-items-center\">
                                        <span class=\"text-center fw-bold\">Alta</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"p-2 bdrb\">
                    <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"m-0 lh-1\">
                        <tbody>
                            <tr class=\"m-0 lh-1\">
                                <td class=\"col-8 pb-2 fw-bold pe-2\">
                                    Número de entradas
                                </td>
                                <td class=\"col-4 pb-2 text-end\">
                                    <span>1</span>
                                </td>
                            </tr>
                            <tr class=\"m-0 lh-1\">
                                <td class=\"col-8 pb-2 fw-bold pe-2\">
                                    Precio de Entrada
                                </td>
                                <td class=\"col-4 pb-2 text-end\">
                                    105 €
                                    <div class=\"m-0 lh-1 cGry3\">Por entrada</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"tile mb-4 p-0\">
                <p class=\"m-0 p-0 h2 fw-bold lh-1 bGrn2 cWht bdrb dot p-3\">
                    Sobre tus entradas
                </p>

                <div class=\"pt-2 pb-3 ps-2 pe-2\">
                    <div class=\"m-0 fw-light lh-1 mt-1 fst-normal\">
                        <span class=\"i-thumbs-up cGrn1 fs-6\"></span>
                        <span>Visibilidad sin limitaciones
                            <span class=\"position-relative\" style=\"width: fit-content;\">
                                <span class=\"fs-6 hover\">
                                    <i class=\"i-info-sign position-relative ps-1\"></i>
                                </span>
                                <div class=\"text-center m-0 fw-normal lh-1 derecha\">
                                    <p class=\"fs-6 m-0\">Disfrutarás de una vista clara del
                                        espectáculo. </p>
                                </div>
                            </span>
                        </span>
                    </div>

                    <div class=\"m-0 fw-light lh-1 mt-1\">
                        <span class=\"i-thumbs-up cGrn1 fs-6\"></span>
                        <span>Tus entradas tienen una valoración de <span class=\"fw-bold\">6,3</span> en base a los
                            asientos y su precio
                            <span class=\"position-relative\" style=\"width: fit-content;\">
                                <span class=\"text-nowrap hover\">&nbsp;
                                    <i class=\"i-info-sign position-relative ps-1\"></i>
                                </span>
                                <div class=\"text-center m-0 fw-normal lh-1 derecha\">
                                    <p class=\"m-0 fs-6\">Esta clasificación se basa en la
                                        ubicación del asiento y del precio individual de estas entradas en
                                        comparación con todas las demás entradas a la venta en nuestro sitio web
                                        para este evento</p>
                                </div>
                            </span>
                        </span>
                    </div>
                </div>
            </div>

            <div class=\"tile mb-4 p-0\">
                <div class=\"m-0 fw-bold lh-1 bnOrg3 cWht bdrb dot p-3 d-flex\">
                    <i class=\"i-star align-items-center m-0 h3 cWht\"></i>
                    <p class=\"align-items-center m-0 h3 fw-bold cWht\">&nbsp;Indicaciones Especiales</p>
                </div>
                <div class=\"p-2\">
                    <div class=\"mb-1 cnRed1 d-flex\">
                        <div class=\"me-2\">
                            <i class=\"i-warning-sign cnRed1 position-relative\"></i>
                        </div>
                        <div>
                            <p class=\"fw-bold m-0\">Solo quedan 2 días para el evento.</p>
                        </div>
                    </div>
                    <div class=\"mb-1 cnRed1 d-flex\">
                        <div class=\"me-2\">
                            <i class=\"i-flame cnRed1 position-relative\"></i>
                        </div>
                        <div>
                            <p class=\"fw-bold m-0\">Este evento se está vendiendo rápido&nbsp;</p>

                            <span class=\"fw-normal m-0\"> en nuestro sitio web
                                <span class=\"position-relative\" style=\"width: fit-content;\">
                                    <span class=\"text-nowrap hover\">&nbsp;<i
                                            class=\"i-info-sign position-relative\"></i></span>
                                    <div class=\"text-center m-0 fw-normal lh-1 derecha\">
                                        <p class=\"m-0\">
                                            Este evento se sitúa dentro del 10% de los eventos de más
                                            demanda basándose su ranking en las
                                            ventas exitosas que por día se han realizado durante los últimos
                                            7 días en nuestro sitio web </p>
                                    </div>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class=\"mb-1 cnRed1 d-flex\">
                        <div class=\"me-2\">
                            <i class=\"i-warning-sign cnRed1 position-relative\"></i>
                        </div>
                        <div>
                            <p class=\"fw-bold m-0\"> 6 sections sold out </p>
                            <span class=\"fw-normal m-0\">
                                para este evento en nuestro sitio web
                                <span class=\"position-relative\" style=\"width: fit-content;\">
                                    <span class=\"text-nowrap hover\">&nbsp;<i
                                            class=\"i-info-sign position-relative\"></i></span>
                                    <div class=\"text-center m-0 fw-normal lh-1 derecha\">
                                        <p class=\"m-0\">
                                            El número de secciones sin boletos disponibles a la venta para este evento
                                            en nuestro sitio. En el futuro, quizás se añadan más boletos en nuestro
                                            sitio.
                                        </p>
                                    </div>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\" col-md-8 col col-12 mb-3 ps-2\">
            <div class=\"tile mb-4 p-0\">
                <div id=\"info\" class=\"d-flex align-items-center flex-row align-items-stretch p-2\">
                    <div
                        class=\"text-center col-sm-9 col col-12 d-flex flex-column justify-content-center text-center align-items-center pe-2\">
                        <div id=\"js-countdown-wrapper\"
                            class=\"d-flex flex-row justify-content-center text-center pb-1 p-2\">
                            <div id=\"countdown-timer\" class=\"fw-bold fs-5 flex-end pe-1\"></div>
                            <p class=\"cGry1 fw-bold fs-5 mb-0\">
                                restantes para finalizar esta compra
                            </p>
                        </div>
                        <div class=\"p-0 fw-bold cRed2 cnRed1 fw-bold\">
                            <span>
                                Por favor ten en cuenta que puede que estas
                                entradas ya no estén disponibles de nuevo a este
                                precio si las abandonas ahora
                            </span>
                        </div>
                    </div>
                    <div
                        class=\"col-sm-3 col col-12 d-flex justify-content-center text-center align-items-center text-center h-100 pt-3 pe-2\">
                        <button class=\"btn h-100 err\" id=\"abandonar\">
                            <div class=\"cWht fw-bold\">
                                <span>Abandonar Mis Entradas</span>
                            </div>
                        </button>
                    </div>
                </div>

                <!-- revisar este div -->
                <div class=\"align-items-center align-self-center justify-content-between mt-2 pt-1 pb-1 col-12\">
                    <ul class=\"d-flex flex-row\">
                        <li class=\"active\">
                            <div class=\"step-name-icon-wrapper\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"-1 0 25 25\" height=\"40px\" width=\"40px\">
                                    <path fillrule=\"evenodd\" cliprule=\"evenodd\"
                                        d=\"M7.71429 6.54545V8.36364H5.80952L5.80952 14.7273L3.90476 13.8182L3.90476 8.36364H2V6.54545H7.71429ZM20.0381 3.81818H5.80952L5.80952 5.63636L3.90476 4.72727L3.90476 2H22V22H3.90476V17.4545H2V15.6364H7.71429V17.4545H5.80952V20.1818H20.0381V3.81818ZM11.3725 10.3388C11.4465 11.107 12.1317 11.7007 12.9651 11.7007C13.7984 11.7007 14.4651 11.1245 14.5577 10.3388L14.6688 9.2737C14.7244 8.81973 14.5577 8.36576 14.2429 8.03401C13.9281 7.70227 13.4651 7.5102 12.9651 7.5102C12.4836 7.5102 12.0206 7.70227 11.6873 8.03401C11.3725 8.36576 11.2058 8.81973 11.2614 9.2737L11.3725 10.3388ZM9.57358 13.6628L9.41251 13.7523L8.96508 16.4898H16.9651L16.5177 13.7523L16.3566 13.6628C14.4595 12.643 11.4707 12.643 9.57358 13.6628Z\"
                                        transform=\"scale(0.9)\"></path>
                                </svg>
                                <div class=\"icon-progress-names\">Tus datos</div>
                            </div>
                            <div class=\"icon-progress-bar-loader active mt-2\">
                            </div>
                        </li>
                        <li class=\"\">
                            <div class=\"step-name-icon-wrapper\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"-1 0 25 25\" height=\"40px\" width=\"40px\">
                                    <path fillrule=\"evenodd\" cliprule=\"evenodd\"
                                        d=\"M19.5709 9.47773H19.0445H16.7773H15.8057H10.9474V9.43725V7.0081V6.27935V4.61943H11.8785C12.4049 5.38866 13.2551 5.83401 14.1862 5.83401C15.1174 5.83401 15.9676 5.38866 16.4939 4.61943H17.4251V8.66802L19.0445 7.8583V3H15.5223L15.3198 3.44534C15.1984 3.76923 14.915 4.01215 14.5911 4.1336C13.9433 4.33603 13.336 4.05263 13.0526 3.48583L12.8907 3H9.36842V6.31984V7.17004H8.35628C7.74899 7.17004 7.1417 7.41296 6.69636 7.81781L2 12.1093V12.7166V14.336V17.1296V21.8664H3.61943H16.251C16.7368 21.8664 17.2227 21.664 17.587 21.3401C17.749 21.1781 17.8704 21.0972 18.0324 20.8138C18.3158 20.3684 18.4777 19.8016 18.4777 19.2753V19.1134C18.9231 19.0324 19.3279 18.83 19.6518 18.5466C19.6923 18.5061 19.6923 18.5061 19.7328 18.4656C20.1781 18.0202 20.4211 17.4534 20.4211 16.8057V15.834C20.4615 15.7935 20.4615 15.7935 20.502 15.753C20.9474 15.3077 21.1903 14.7409 21.1903 14.0931V13.2429C21.2308 13.2024 21.2308 13.2024 21.2713 13.2024C21.3117 13.2024 21.3117 13.1619 21.3522 13.1619C21.7571 12.7571 22 12.2308 22 11.6235C21.919 10.6923 21.3522 9.96356 20.583 9.59919C20.1377 9.47773 19.5709 9.47773 19.5709 9.47773ZM20.1377 11.9879C20.0567 12.0688 19.8947 12.1498 19.7733 12.1498H13.0526V13.7692H19.5304V14.0931C19.5304 14.2955 19.4494 14.4575 19.3279 14.6194C19.166 14.7409 19.004 14.8219 18.8016 14.8219H13.0931V16.4413H18.7611V16.7652C18.7611 16.9676 18.6802 17.1296 18.5587 17.2915C18.3968 17.413 18.2348 17.4939 18.0324 17.4939H13.0526V19.1134H16.8583V19.4372C16.8583 19.8421 16.5344 20.166 16.1296 20.166H3.61943V12.8381L7.78947 8.9919C7.95142 8.87045 8.15385 8.78947 8.35628 8.78947H9.36842V9.47773V11.0972H19.7733C20.0567 11.0972 20.2996 11.3401 20.2996 11.6235C20.2996 11.7449 20.2186 11.8664 20.1377 11.9879Z\"
                                        transform=\"scale(0.9)\"></path>
                                </svg>
                                <div class=\"icon-progress-names\">Entrega</div>
                            </div>
                            <div class=\"icon-progress-bar-loader  mt-2\">
                            </div>
                        </li>
                        <li class=\"\">
                            <div class=\"step-name-icon-wrapper\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"-1 0 25 25\" height=\"40px\" width=\"40px\">
                                    <path fillrule=\"evenodd\" cliprule=\"evenodd\"
                                        d=\"M17.1063 3.35827L17.452 4.57404L5.36738 7.6272L5.02164 6.41107L17.1063 3.35827ZM18.4681 8.14968H9.14442L17.8435 5.95208L18.4681 8.14968ZM20.5626 14.7685H16.1058C15.7513 14.7685 15.4627 14.4964 15.4627 14.1618V13.119C15.4627 12.7845 15.7513 12.5124 16.1058 12.5124H20.5626V14.7685ZM16.1058 11.1575C14.9588 11.1575 14.0253 12.0374 14.0253 13.119V14.1618C14.0253 15.2435 14.9588 16.1233 16.1058 16.1233H19.0767H20.5626H22V10.1112C22 9.0295 21.0668 8.14968 19.9195 8.14968L18.4117 2.85292C18.3277 2.55691 18.1254 2.30905 17.8428 2.15533C17.5602 2.00127 17.2319 1.9599 16.9175 2.03978L4.486 5.18032C4.17166 5.25985 3.90876 5.44994 3.74573 5.71635C3.58269 5.98275 3.53881 6.29303 3.62317 6.58904L4.06688 8.15039C2.92601 8.15717 2 9.03378 2 10.1112V20.0385C2 21.1198 2.9332 22 4.0805 22H19.9195C21.0668 22 22 21.1198 22 20.0385V17.505L20.5626 16.8259V20.0385C20.5626 20.3727 20.2739 20.6448 19.9195 20.6448H4.0805C3.72568 20.6448 3.43743 20.3727 3.43743 20.0385V10.1112C3.43743 9.77701 3.72568 9.50489 4.0805 9.50489H19.9195C20.2739 9.50489 20.5626 9.77701 20.5626 10.1112V11.1575H16.1058Z\"
                                        transform=\"scale(0.9)\"></path>
                                </svg>
                                <div class=\"icon-progress-names\">Pago</div>
                            </div>
                            <div class=\"icon-progress-bar-loader  mt-2\">
                            </div>
                        </li>
                        <li class=\"\">
                            <div class=\"step-name-icon-wrapper\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"-2 -2 25 25\" height=\"40px\"
                                    width=\"40px\">
                                    <path
                                        d=\"M20.2699 17.7866C19.9345 17.6587 19.5589 17.8267 19.4308 18.1623C19.0664 19.1155 18.3381 19.885 17.4064 20.3015C16.4746 20.718 15.4155 20.7474 14.4621 20.3831C13.5089 20.0189 12.7391 19.2909 12.3224 18.3593C11.9057 17.4276 11.8761 16.3686 12.24 15.4152C12.6041 14.4616 13.3319 13.6918 14.2635 13.2749C15.195 12.8578 16.254 12.8281 17.2076 13.1918C17.543 13.3199 17.9188 13.1519 18.0469 12.8165C18.1749 12.4811 18.0068 12.1053 17.6714 11.9772C16.3954 11.4898 14.978 11.5293 13.7311 12.0871C12.4841 12.6447 11.5098 13.675 11.0224 14.951C10.5352 16.2271 10.5747 17.6446 11.1325 18.8915C11.6902 20.1384 12.7205 21.1127 13.9966 21.5999C15.2728 22.0871 16.6902 22.0476 17.937 21.4898C19.1839 20.932 20.1582 19.9017 20.6454 18.6255C20.7733 18.2901 20.6051 17.9146 20.2699 17.7866L20.2699 17.7866Z\"
                                        transform=\"scale(0.9)\"></path>
                                    <path
                                        d=\"M5.84951 15.6086C6.02201 15.6086 6.18745 15.5401 6.30935 15.4182C6.43125 15.2963 6.49964 15.131 6.49964 14.9585V14.3672H6.50435C7.21815 14.3672 7.87752 13.9864 8.23453 13.3684C8.59134 12.7502 8.59134 11.9887 8.23453 11.3706C7.87754 10.7525 7.21815 10.3717 6.50435 10.3717H5.30352C5.05718 10.3677 4.83115 10.2342 4.7087 10.0203C4.58644 9.80645 4.58571 9.54396 4.70688 9.32955C4.82824 9.11496 5.05353 8.98036 5.29989 8.97492H7.61542C7.97441 8.97492 8.26555 8.68396 8.26555 8.32479C8.26555 7.96581 7.97441 7.67467 7.61542 7.67467H6.49966V7.08421C6.49966 6.72504 6.2087 6.43408 5.84953 6.43408C5.49054 6.43408 5.1994 6.72504 5.1994 7.08421V7.67973C4.49866 7.71546 3.86794 8.11635 3.53819 8.73581C3.2084 9.35529 3.22781 10.1023 3.58952 10.7038C3.95105 11.3051 4.60173 11.6726 5.30354 11.6719H6.50474C6.7538 11.6719 6.98417 11.8049 7.10862 12.0208C7.23324 12.2364 7.23324 12.5024 7.10862 12.7183C6.98418 12.9339 6.75381 13.0669 6.50474 13.0669H3.84544C3.48627 13.0669 3.19531 13.358 3.19531 13.717C3.19531 14.076 3.48627 14.3672 3.84544 14.3672H5.19938V14.9583C5.19938 15.1306 5.26777 15.2961 5.38985 15.4181C5.51175 15.54 5.67718 15.6086 5.84951 15.6086V15.6086Z\"
                                        transform=\"scale(0.9)\"></path>
                                    <path
                                        d=\"M20.1539 10.2513C20.1539 10.6105 20.445 10.9014 20.804 10.9014C21.1632 10.9014 21.4541 10.6105 21.4541 10.2513V6.48059C21.4534 5.75662 21.1653 5.06261 20.6535 4.55068C20.1417 4.0388 19.4475 3.75088 18.7237 3.75H2.73059C2.00662 3.75091 1.31261 4.03879 0.800679 4.55068C0.288796 5.06256 0.000882317 5.75662 0 6.48059V15.9697C0.000906975 16.6936 0.288787 17.3876 0.800679 17.8996C1.31256 18.4115 2.00662 18.6996 2.73059 18.7003H9.10184C9.46101 18.7003 9.75197 18.4091 9.75197 18.0501C9.75197 17.6911 9.46101 17.4 9.10184 17.4H2.73059C2.35146 17.3996 1.98777 17.2487 1.71964 16.9806C1.45153 16.7125 1.30079 16.349 1.30025 15.9697V6.48058C1.30079 6.10127 1.45153 5.73776 1.71964 5.46963C1.98774 5.20152 2.35142 5.0506 2.73059 5.05024H18.7237C19.1029 5.0506 19.4664 5.20152 19.7345 5.46963C20.0028 5.73773 20.1535 6.10127 20.1539 6.48058V7.64825H10.3904C10.0312 7.64825 9.74023 7.93921 9.74023 8.29838C9.74023 8.65737 10.0312 8.94851 10.3904 8.94851H20.1539L20.1539 10.2513Z\"
                                        transform=\"scale(0.9)\"></path>
                                    <path fillrule=\"evenodd\" cliprule=\"evenodd\"
                                        d=\"M14.406 15.8208C14.2127 15.6347 13.9069 15.6343 13.7132 15.8201L13.5145 16.0106C13.3102 16.2065 13.309 16.5327 13.512 16.73L15.8118 18.9657C16.0078 19.1563 16.3205 19.1541 16.5138 18.9608L23.6393 11.8362C23.8377 11.6379 23.8341 11.3152 23.6314 11.1213L23.4329 10.9315C23.2364 10.7435 22.9257 10.747 22.7336 10.9394L16.5122 17.1675C16.3196 17.3603 16.008 17.3634 15.8116 17.1743L14.406 15.8208Z\"
                                        transform=\"scale(0.9)\"></path>
                                </svg>
                                <div class=\"icon-progress-names\">Revisión</div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class=\"fondo hide\"></div>
                <div class=\"hide\" id=\"modAb\">
                    <a class=\"close modal-close\">
                        <i class=\"i-remove\"></i>
                    </a>
                    <div class=\"p-4 text-center\">
                        <p class=\"m-0 fw-bold lh-1 mb-3 cGry1 h4\">
                            ¿Quieres dejar estas entradas?
                        </p>
                        <div class=\"gRow d-inline-block\">
                            <p class=\"fs-6 mb-3 fw-bold cGry1\">
                                Si optas por dejarlas libres, es posible que alguien las adquiera.
                            </p>
                            <p class=\"cnRed1 fw-bold\">
                                Por favor ten en cuenta que puede que estas entradas ya no
                                estén disponibles de nuevo a este precio si las abandonas ahora
                            </p>
                            <div class=\"gRow mb-0 d-flex\">
                                <div class=\"__release w-100\">
                                    <button
                                        class=\" btn err fw-bold cWht p-2 d-inline-block text-center text-decoration-none user-select-close fs-6\">
                                        Abandonar Mis Entradas
                                    </button>
                                </div>
                                <div class=\"__continue w-100\">
                                    <button
                                        class=\" btn pri modal-close p-2 d-inline-block text-center text-decoration-none user-select-none fs-6\">Continuar
                                        con la compra</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id=\"kick-user-modal\" class=\"hide\">
                    <div class=\"text-center m-0 fw-bold lh-1 fs-3 cnRed1\">
                        ¡El tiempo se ha agotado! <br>
                        <span class=\"m-0 fw-bold lh-1 fs-6\">Se te redirigirá a la página de selección de entradas de
                            este evento.</span>
                    </div>
                </div>
            </div>

            <div id=\"datos\" class=\"tile\">
                <div class=\"tile mb-4 p-0\">
                    <div class=\"p-4 pb-1\">
                        <div class=\"mt-2 mb-3\">
                            <div class=\"w-100 cb mb-2 d-table-row\">
                                <div class=\"d-table-cell bGry6 p-2 ticket-left pt-4 pb-4 ps-3\" style=\"width: 70%;\">
                                    <p class=\"m-0 fw-bold lh-1 h3\">
                                        Eintracht Frankfurt vs Borussia Dortmund
                                    </p>
                                    <p class=\"m-0 mt-2 mb-1 fw-bold lh-1\"> domingo, 29 octubre 2023 15:30 </p>
                                    <p class=\"mb-0\">Deutsche Bank Park (Commerzbank Arena), Frankfurt, Alemania</p>
                                    <div class=\"d-flex align-items-center pt-3\">
                                        <p class=\"m-0 fw-bold lh-1 cBlu1\"> Bueno - 6,3 </p>

                                        <span class=\"fw-normal m-0\">
                                            <span class=\"position-relative\" style=\"width: fit-content;\">
                                                <span class=\"text-nowrap hover\">&nbsp;<i
                                                        class=\"i-info-sign position-relative\"></i></span>
                                                <div class=\"text-center m-0 fw-normal lh-1 derecha\">
                                                    <p class=\"m-0\">
                                                        Esta clasificación se basa en la ubicación del asiento y del
                                                        precio individual de estas entradas en comparación con todas
                                                        las demás entradas a la venta en nuestro
                                                        sitio web para este evento
                                                    </p>
                                                </div>
                                            </span>
                                        </span>
                                    </div>
                                    <div class=\"m-0 fw-bold lh-1 pt-3 pb-1 d-inline-block me-1\">
                                        <strong>Notas: </strong>
                                        <div class=\"m-0 fw-bold lh-1 mt-1 fst-normal\">
                                            <span class=\"i-thumbs-up cGrn1 fs-6\"></span>
                                            Visibilidad sin limitaciones
                                        </div>
                                    </div>
                                </div>
                                <div class=\"d-table-cell bGry6 p-2 text-center align-items-center ticket-right\"
                                    style=\"width: 30%;\">
                                    <div class=\"position-relative h-100\">
                                        <div class=\"bdrb\">
                                            <p class=\"mb-3 m-0 fw-normal lh-1 text-uppercase ms-3 me-3 bdr h2\">
                                                admisión para 1
                                            </p>
                                        </div>

                                        <div class=\"h-100 m-0 w-100 mt-2\">
                                            <div class=\"d-table-cell align-items-center w-50\">
                                                <p class=\"m-0 fw-normal lh-1 h5\">Sección</p>
                                                <p class=\"mt-2 fw-bold lh-1 cGrn1 h5\" id=\"listing-section\">
                                                    Tribuna Superior</p>
                                            </div>
                                            <img src=\"./barcode.png\" alt=\"barcode\" width=\"150\" height=\"100\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"mt-2 mb-3\">
                    <div class=\"tile p-0 d-flex flex-row flex-nowrap\">
                        <div class=\"col-7 pt-3 pb-3 ps-2 pe-2 p-2\">
                            <div class=\"m-0 fw-bold lh-1 mb-3 h3 ps-3 mt-2\">
                                Deutsche Bank Park (Commerzbank Arena)
                            </div>
                            <div class=\"mb-1 ps-3\">
                                <i class=\"i-stadium fs-5 align-items-center\"></i>
                                <span class=\"m-0 fw-bold lh-1 align-items-center\">Aforo: 51500</span>
                            </div>
                            <div class=\"m-0 fw-bold lh-1 cdBlu1 mb-1 ps-3 fs-5\">
                                La experiencia de una gran sala - sin duda inolvidable
                            </div>
                        </div>
                        <div class=\"col-5 p-0\">
                            <div class=\"w-100 h-100\"
                                style=\"background-image: url(https://img.vggcdn.net/img/google-static-maps/24static.png); background-size: cover;\">
                                <div class=\"w-100 h-100\">.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <button id=\"ocultarDatos\" class=\"btn pri l w-100 mt-3\">
                    <span class=\"align-items-center\">Continuar</span>
                </button>

                <p class=\"mt-4 text-center\">
                    <i class=\"i-lock fs-5 align-items-center\"></i>
                    <span class=\"m-0 fw-bold fs-5 lh-1 ps-1 align-items-center\">Compra segura</span>
                </p>
            </div>

            <div id=\"sesion\" class=\"tile hide\">
                <ul class=\"tabs d-block m-0\">
                    <li id=\"js-nuTab\" class=\"act\">
                        <a>Soy un cliente nuevo</a>
                    </li>
                    <li id=\"js-siTab\" class=\"\">
                        <a>Ya soy cliente</a>
                    </li>
                </ul>
                <!-- si click en js-siTab poner clase act y quitar hide de js-siPanel y quitar act de js-nuTab y poner hide en js-nuPanel -->
                <div id=\"js-nuPanel\" class=\"\">
                    <form
                        action=\"/secure/buy/SelectLoginMethod/CreateNewUser?id=8860c29d-2fb5-496e-8566-04f4646f69be%7C6665009147%7C1%7C0\"
                        class=\"\" id=\"CreateNewUser\" method=\"post\" novalidate=\"novalidate\">
                        <div class=\"tile m-3 mt-0\">
                            <div class=\"mb-3 d-flex\" id=\"nombre\">
                                <div class=\"col-md-6 col col-12\">
                                    <label for=\"FirstName\">Nombre</label><br>
                                    <span class=\"position-relative\">
                                        <input autocapitalize=\"none\" autocorrect=\"off\" class=\"\" required=\"true\"
                                            id=\"FirstName\" name=\"FirstName\" spellcheck=\"false\" type=\"text\" value=\"\">
                                    </span>
                                </div>
                                <div class=\"col-md-6 col col-12 mb-0 \">
                                    <label for=\"LastName\">Apellidos</label><br>
                                    <span class=\"position-relative\">
                                        <input autocapitalize=\"none\" autocorrect=\"off\" class=\"\" required=\"true\"
                                            id=\"LastName\" name=\"LastName\" spellcheck=\"false\" type=\"text\" value=\"\">
                                    </span>
                                </div>
                            </div>
                            <div class=\"mb-3 d-flex\" id=\"nombre\">
                                <div class=\"col-md-6 col col-12\">
                                    <label for=\"Email\">Dirección de correo electrónico</label><br>
                                    <span class=\"position-relative\">
                                        <input autocapitalize=\"none\" autocomplete=\"on\" autocorrect=\"off\"
                                            class=\"js-new-email\" required=\"true\" id=\"Email\" name=\"Email\"
                                            placeholder=\"p.ej. nombre@email.com\" spellcheck=\"false\" type=\"email\"
                                            value=\"\">
                                    </span><br>
                                    <small>Recibirás un correo de confirmación</small>
                                </div>
                                <div class=\"col-md-6 col col-12\">
                                    <label for=\"ConfirmEmail\">Confirmar dirección de email</label><br>
                                    <span class=\"position-relative\">
                                        <input autocapitalize=\"none\" autocomplete=\"on\" autocorrect=\"off\"
                                            data-val-equalto-other=\"*.Email\" id=\"ConfirmEmail\" name=\"ConfirmEmail\"
                                            spellcheck=\"false\" type=\"email\" value=\"\">
                                    </span>
                                </div>
                            </div>
                            <div class=\"mb-3 d-flex\" id=\"nombre\">
                                <div class=\"col-md-6 col col-12\">
                                    <label for=\"Password\">Contraseña</label><br>
                                    <span class=\"position-relative\">
                                        <input required=\"true\" id=\"Password\" name=\"Password\" type=\"password\"></span>
                                </div>
                                <div class=\"col-md-6 col col-12\">
                                    <label for=\"PhoneNumber\">Número de teléfono:</label>
                                    <div class=\"mb-0\">
                                        <span class=\"position-relative\">
                                            <input autocapitalize=\"none\" autocorrect=\"off\"
                                                data-val-regex-pattern=\"^[0-9,\\.\\(\\)\\+\\#\\-\\\\\\/ ]+\$\" id=\"PhoneNumber\"
                                                name=\"PhoneNumber\" placeholder=\"p.ej. 600600600\" spellcheck=\"false\"
                                                type=\"tel\" value=\"\"></span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <button id=\"submit-form\" class=\"btn pri w-100 mt-3\">
                                    <span class=\"align-content-center\">Continuar</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div id=\"js-siPanel\" class=\"\">
                    <form
                        action=\"/secure/buy/SelectLoginMethod/Login?id=8860c29d-2fb5-496e-8566-04f4646f69be%7C6665009147%7C1%7C0\"
                        class=\"\" id=\"SignIn\" method=\"post\" novalidate=\"novalidate\">
                        <div class=\"tile m-3 mt-0\">
                            <div class=\"mb-3\">
                                <label for=\"LoginInformation_UserName\">Dirección de correo
                                    electrónico</label><br>
                                <span class=\"position-relative\">
                                    <input autocomplete=\"on\" class=\"js-sign-email\" required=\"true\"
                                        id=\"LoginInformation_UserName\" name=\"LoginInformation.UserName\" type=\"email\"
                                        value=\"\">
                                </span>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"LoginInformation_Password\">Contraseña</label><br>
                                <span class=\"position-relative\">
                                    <input autocomplete=\"off\" class=\"revealable_password_input_box js-password-login\"
                                        id=\"LoginInformation_Password\" name=\"LoginInformation.Password\" type=\"password\">
                                </span>
                            </div>

                            <div class=\"text-end\">
                                <a class=\"m-0 fw-bold lh-1\" href=\"\">¿Olvidaste tu contraseña?</a>
                            </div>
                            <span>
                                <input type=\"hidden\" name=\"FormPosted\" value=\"ExistingUser\">
                            </span>
                            <div>
                                <button id=\"submit-form\" class=\"btn pri w-100 mt-3\">
                                    <span class=\"align-content-center\">Continuar</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"fs-6 pt-1 pb-1\">
                    <div class=\"cGry3 d-flex flex-column align-items-center text-center\">
                        <span>
                            Al iniciar sesión o crear una cuenta, reconoces y aceptas
                            nuestra <a href=\"/secure/help/privacy\" target=\"_blank\">política
                                de privacidad</a>. Puedes recibir notificaciones por SMS de
                            nuestra parte y puedes darte de baja en cualquier momento.
                        </span>
                    </div>
                </div>
            </div>

            <div id=\"pago\" class=\"tile hide\">
                <div id=\"js-payPanel\" class=\"\">
                    <form
                        action=\"/secure/buy/SelectLoginMethod/Login?id=8860c29d-2fb5-496e-8566-04f4646f69be%7C6665009147%7C1%7C0\"
                        class=\"\" id=\"SignIn\" method=\"post\" novalidate=\"novalidate\">
                        <div class=\"tile m-3 mt-0\">
                            <div class=\"mb-3 ps-2 pe-2\">
                                <label for=\"CardNumber\">Numero de tarjeta</label><br>
                                <span class=\"position-relative\">
                                    <input class=\"js-sign-card\" required=\"true\" id=\"CardNumber\" name=\"CardNumber\"
                                        type=\"number\" size=\"16\" value=\"\" placeholder=\"0000 0000 0000 0000\">
                                </span>
                            </div>
                            <div class=\"mb-3 d-flex\" id=\"nombre\">
                                <div class=\"col-md-6 col col-12\">
                                    <label for=\"mesAnioInput\">Mes y Año (MM/YY):</label>
                                    <span class=\"position-relative\">
                                        <input type=\"text\" id=\"mesAnioInput\" name=\"mesAnioInput\" pattern=\"\\d{2}/\\d{2}\"
                                            placeholder=\"MM/YY\" required></span>
                                </div>
                                <div class=\"col-md-6 col col-12\">
                                    <label for=\"ccv\">CCV</label>
                                    <div class=\"mb-0\">
                                        <span class=\"position-relative\">
                                            <input id=\"ccv\" name=\"ccv\" placeholder=\"XXX\" spellcheck=\"false\"
                                                type=\"number\" value=\"\" size=\"3\"></span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button id=\"pago-form\" class=\"btn pri w-100 mt-3\">
                                    <span class=\"align-content-center\">Continuar</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div id=\"conf\" class=\"hide\">
                    <div class=\"w-100 text-center\">
                        <i class=\"i-ok cGrn1\"></i><br>
                        <p>Tu pedido se ha realizado correctamente. Ahora te enviaremos un correo de confirmación.</p>
                    </div>
                </div>
            </div>
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

            var tiempoRestante = localStorage.getItem('tiempoRestante') || 600; // 10 segundos para probar

            function actualizarCuentaAtras() {
                var minutos = Math.floor(tiempoRestante / 60);
                var segundos = tiempoRestante % 60;

                segundos = segundos < 10 ? '0' + segundos : segundos;

                \$('#countdown-timer').html(minutos + ':' + segundos);

                if (tiempoRestante > 0) {
                    tiempoRestante--;
                    localStorage.setItem('tiempoRestante', tiempoRestante);
                    setTimeout(actualizarCuentaAtras, 1000);
                } else {
                    // Cuando la cuenta atrás llega a cero
                    \$('#kick-user-modal').removeClass('hide');
                    \$('.fondo').removeClass('hide')

                    // Redirigir a otra página después de mostrar el modal (por ejemplo, google.com)
                    setTimeout(function () {
                        //window.location.href = 'https://www.google.com';
                    }, 5000); // Redirigir después de 5 segundos (puedes ajustar este tiempo)
                }
            }

            actualizarCuentaAtras();

            \$('#abandonar').click(function () {
                // Mostrar el modal
                \$('#modAb').removeClass('hide');
                \$('.fondo').removeClass('hide');
            });

            \$('.modal-close').click(function () {
                \$('#modAb').addClass('hide');
                \$('.fondo').addClass('hide');
            });

            \$('.user-select-close').click(function () {
                window.location.href = 'https://www.google.com';
            });

            \$('.user-select-none').click(function () {
                \$('#modAb').addClass('hide');
            });

            \$('#ocultarDatos').click(function () {
                \$('#datos').addClass('hide');
                \$('#sesion').removeClass('hide');
            })

            \$('#submit-form').click(function () {
                \$('#sesion').addClass('hide');
                \$('#pago').removeClass('hide');
            })

            \$('#pago-form').click(function () {
                \$('#pago').addClass('hide');
                \$('#conf').removeClass('hide');
            })

            \$('#js-siTab').click(function () {
                \$('#js-siTab').addClass('act');
                \$('#js-nuTab').removeClass('act');
                \$('#js-nuPanel').addClass('hide');
                \$('#js-siPanel').removeClass('hide');
            })
            \$('#js-nuTab').click(function () {
                \$('#js-nuTab').addClass('act');
                \$('#js-siTab').removeClass('act');
                \$('#js-siPanel').addClass('hide');
                \$('#js-nuPanel').removeClass('hide');
            })



            if (\$(window).width() < 768) {
                \$('.contenido').removeClass('d-flex');
                \$('#nombre').removeClass('d-flex');
            }

            // Verificar el ancho de la pantalla al cambiar su tamaño
            \$(window).resize(function () {
                if (\$(window).width() < 768) {
                    \$('.contenido').removeClass('d-flex');
                    \$('#nombre').removeClass('d-flex');
                } else {
                    // Si la pantalla es 768 o más, agrega la clase
                    \$('.contenido').addClass('d-flex');
                    \$('#nombre').addClass('d-flex');
                }
            });

            if (\$(window).width() < 576) {
                \$('#info').removeClass('d-flex');
            }

            // Verificar el ancho de la pantalla al cambiar su tamaño
            \$(window).resize(function () {
                if (\$(window).width() < 576) {
                    \$('#info').removeClass('d-flex');
                } else {
                    // Si la pantalla es 768 o más, agrega la clase
                    \$('#info').addClass('d-flex');
                }
            });
        });
    </script>

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
        return array (  44 => 17,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "@partidos/compra.html.twig", "C:\\xampp\\htdocs\\AllTickets\\modules\\partidos\\templates\\compra.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 15);
        static $functions = array("attach_library" => 15);

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
