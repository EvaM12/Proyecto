$(document).ready(function () {
    $(".header-bar").click(function () {
        $(".menu").toggleClass("active");
    });

    // Función para establecer el ancho del elemento al ancho de la pantalla
    function setElementWidth() {
        var screenWidth = $(window).width();
        $('header').width(screenWidth);
    }

    // Llama a la función al cargar la página
    setElementWidth();

    // Vuelve a llamar a la función cuando cambia el tamaño de la pantalla
    $(window).resize(function() {
        setElementWidth();
    });
});