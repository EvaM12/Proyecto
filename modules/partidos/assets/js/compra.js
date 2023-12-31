$(document).ready(function () {
    /* codigo para mostrar los popups */
    $('.hover').hover(function () {
        $(this).next().css({ "display": "block" });
    }, function () {
        $(this).next().css({ "display": "none" });
    });

    /* codigo para el temporizador y posterior redireccion */
    const countdownWorker = new Worker(URL.createObjectURL(new Blob([`
        let timeLeft = 600;

        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            const remainingSeconds = seconds % 60;
            return \`\${minutes}:\${remainingSeconds < 10 ? '0' : ''}\${remainingSeconds}\`;
        }

        function countdown() {
            if (timeLeft > 0) {
                postMessage(formatTime(timeLeft));
                timeLeft--;
                setTimeout(countdown, 1000);
            } else if (timeLeft === 0) {
                // Cuando la cuenta atrás llega a cero
                postMessage('00:00');
            }
        }

        countdown();
    `], { type: 'application/javascript' })));

    countdownWorker.onmessage = function (event) {
        $('#countdown-timer').text(event.data);

        if (event.data === '00:00') {
            $('#kick-user-modal').removeClass('hide');
            $('.fondo').removeClass('hide');

            setTimeout(function () {
                var urlActual = window.location.href;
                var parteVariable = urlActual.split('/')[2];
                var nuevaURL = 'http://' + parteVariable + '/AllTickets/matches';

                // Redireccionar a la nueva URL
                window.location.href = nuevaURL;
            }, 5000);
        }
    };

    /* codigo botones modales */
    $('#abandonar').click(function () {
        $('#modAb').removeClass('hide');
        $('.fondo').removeClass('hide');
    });

    $('.modal-close').click(function () {
        $('#modAb').addClass('hide');
        $('.fondo').addClass('hide');
    });

    $('.user-select-close').click(function () {
        var urlActual = window.location.href;
        var parteVariable = urlActual.split('/')[2];
        var nuevaURL = 'http://' + parteVariable + '/AllTickets/matches';

        // Redireccionar a la nueva URL
        window.location.href = nuevaURL;
    });

    $('.user-select-none').click(function () {
        $('#modAb').addClass('hide');
    });

    /* codigo formulario */
    $('#js-siTab').click(function () {
        $('#js-siTab').addClass('act');
        $('#js-nuTab').removeClass('act');
        $('#js-nuPanel').addClass('hide');
        $('#js-siPanel').removeClass('hide');
    })

    $('#js-nuTab').click(function () {
        $('#js-nuTab').addClass('act');
        $('#js-siTab').removeClass('act');
        $('#js-siPanel').addClass('hide');
        $('#js-nuPanel').removeClass('hide');
    })


    $('.sign-up-htm').submit(function (event) {
        if (!validarFormulario()) {
            event.preventDefault();
        }
    });

    function validarFormulario() {
        var password = $('#pass').val();
        var confirmPassword = $('#passRep').val();
        var email = $('#email').val();
        var confirmEmail = $('#emailRep').val();

        if (password !== confirmPassword) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'The passwords are not the same',
            });
            return false;
        }

        if (email !== confirmEmail) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'The emails are not the same',
            });
            return false;
        }
        return true;
    }

    if ($('#conf').attr('class') === '') {
        // Redirigir al usuario a la nueva página
        var urlActual = window.location.href;
        var parteVariable = urlActual.split('/')[2];
        var nuevaURL = 'http://' + parteVariable + '/AllTickets/inicio';

        // Redireccionar a la nueva URL
        window.location.href = nuevaURL;
    }

    /* codigo de cambios de tamaño del pantalla */
    if ($(window).width() < 768) {
        $('.contenido').removeClass('d-flex');
        $('#nombre').removeClass('d-flex');
    }

    $(window).resize(function () {
        if ($(window).width() < 768) {
            $('.contenido').removeClass('d-flex');
            $('#nombre').removeClass('d-flex');
        } else {
            $('.contenido').addClass('d-flex');
            $('#nombre').addClass('d-flex');
        }
    });

    if ($(window).width() < 576) {
        $('#info').removeClass('d-flex');
    }

    $(window).resize(function () {
        if ($(window).width() < 576) {
            $('#info').removeClass('d-flex');
        } else {
            $('#info').addClass('d-flex');
        }
    });
});