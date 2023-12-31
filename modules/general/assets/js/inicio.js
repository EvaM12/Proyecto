$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        items: 3, // Número de elementos a mostrar en el carrusel
        loop: true, // Repetir el carrusel en un bucle
        autoplay: true, // Reproducción automática
        autoplayTimeout: 3000, // Tiempo de espera entre diapositivas en milisegundos
        autoplayHoverPause: true, // Pausar la reproducción automática al pasar el mouse sobre el carrusel
        dots: false, // Mostrar puntos indicadores
        nav: true, // Habilitar flechas de navegación
        navText: ["<i class='fs-5'><</i>", "<i class='fs-5'>></i>"], // Texto de las flechas de navegación
        responsive: { // Responsive design
            0: {
                items: 1
            },
            475: {
                items: 2
            }
        }
    });
});