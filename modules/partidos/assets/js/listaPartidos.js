if ($(window).width() < 992) {
    $('.div').removeClass('flex-row');
    $('.div').addClass('flex-column');
    $('.filtros').removeClass('flex-column');
    $('.filtros').addClass('flex-row');

}

// Verificar el ancho de la pantalla al cambiar su tamaño
$(window).resize(function () {
    if ($(window).width() < 992) {
        $('.div').removeClass('flex-row');
        $('.div').addClass('flex-column');
        $('.filtros').removeClass('flex-column');
        $('.filtros').addClass('flex-row');
    } else {
        // Si la pantalla es 992 o más, agrega la clase
        $('.div').removeClass('flex-column');
        $('.div').addClass('flex-row');
        $('.filtros').addClass('flex-column');
        $('.iltros').removeClass('flex-row');
    }
});

function partidos(liga) { //recoge los datos de los partidos de la liga seleccionada
    return new Promise(function (resolve, reject) {
        var datos = [
            ['eng.1', 671031, 20],
            ['esp.1', 674011, 20],
            ['ita.1', 679116, 20],
            ['ger.1', 677574, 18],
            ['fra.1', 677185, 21],/*18*/
            ['uefa.champions', 687537, 96], //687537 -> 687361
            ['uefa.europa', 687632, 96], //687632 -> 687727
            ['uefa.europa.conf', 687728, 96] //687728 -> 687822
        ];
        //cambiarlo para que en vez de hacer el recorrido x numero de partidos lo halla hasta que se complete el numero de tidos
        var pPart = 0;
        var part = 0;
        for (var i = 0; i < datos.length; i++) {
            if (liga == datos[i][0]) {
                pPart = datos[i][1];
                if (liga.includes('.1')) {
                    part = (datos[i][2] - 1) * 2 * (datos[i][2] / 2);
                } else {
                    part = datos[i][2];
                }
            }
        }
        var valueToMatch = ""; // Valor a extraer de la primera petición
        var matchedValues = []; // Array para almacenar los valores coincidentes

        $.ajax({
            url: "https://site.api.espn.com/apis/site/v2/sports/soccer/" + liga + "/scoreboard",
            method: "GET"
        }).then(function (response) {
            // Extraer el valor deseado de la respuesta de la primera petición
            valueToMatch = response.leagues[0].uid;
            // Realizar la segunda petición repetidamente
            var promises = [];

            for (var i = 0; i < part; i++) {
                var promise = $.ajax({
                    url: "https://site.api.espn.com/apis/site/v2/sports/soccer/" + liga + "/scoreboard/" + pPart,
                    method: "GET",
                    data: {
                        uid: valueToMatch
                    }
                });
                pPart++;
                promises.push(promise);
            }

            // Procesar las respuestas de las peticiones en paralelo
            Promise.all(promises).then(function (responses) {
                responses.forEach(function (response) {
                    // Comprobar si el valor coincide y guardarlo en el array
                    if (response.uid.startsWith(valueToMatch) && response.status.type.name != 'STATUS_FULL_TIME') {
                        matchedValues.push(response.id);
                    }
                });

                // Devolver los valores coincidentes
                resolve(matchedValues);
            }).catch(function (error) {
                // Manejar errores en caso de que ocurran en alguna de las peticiones
                console.log("Error:", error);
                reject(error);
            });
        }).catch(function (error) {
            // Manejar errores en caso de que ocurra un error en la primera petición
            console.log("Error:", error);
            reject(error);
        });
    });
}

function detalles(liga, equipo, fecha) {
    partidos(liga).then(function (lista) {
        var partidosDiv = $(".partidos");

        // Array para almacenar las promesas de las peticiones AJAX
        var promises = [];

        for (var i = 0; i < lista.length; i++) {
            var promise = $.ajax({
                url: "https://site.api.espn.com/apis/site/v2/sports/soccer/" + liga + "/scoreboard/" + lista[i],
                method: "GET"
            });

            promises.push(promise);
        }

        Promise.all(promises).then(function (responses) {
            responses.sort(function (a, b) {
                var dateA = new Date(a.date);
                var dateB = new Date(b.date);
                return dateA - dateB;
            });

            var texto = ''; // Inicializar la variable texto

            responses.forEach(function (data) {
                if ((equipo == '' || data.competitions[0].competitors[0].team.id == equipo || data.competitions[0].competitors[1].team.id == equipo) &&
                    (fecha == '' || data.date >= fecha)) {
                    var id = data.id;
                    var date = data.date;
                    var estadio = data.competitions[0].venue.fullName;
                    var ciudad = data.competitions[0].venue.address.city;
                    var pais = data.competitions[0].venue.address.country;
                    var local = data.competitions[0].competitors[0].team.displayName;
                    var visitante = data.competitions[0].competitors[1].team.displayName;

                    var meses = [
                    "Jan", "Feb", "Mar", "Apr", "May", "Jun",
                    "Jul", "Ago", "Sep", "Oct", "Nov", "Dec"
                    ];
                    var mes = meses[parseInt(date.slice(5, 7), 10)-1];
                    var anio = date.slice(0, 4);
                    var dia = date.slice(8, 10);
                    var hora = (parseInt(date.slice(11, 13)) + 1).toString().padStart(2, '0') ;
                    var minutos = date.slice(14, 16);
                    hora = hora+':'+minutos;

                    var comp = '';
                    switch(liga){
                        case 'esp.1':
                            comp = 'Spanish La Liga';
                            break;
                        case 'eng.1':
                            comp = 'English Premier League';
                            break;
                        case 'fra.1':
                            comp = 'French Ligue 1';
                            break;
                        case 'ger.1':
                            comp = 'German Bundesliga';
                            break;
                        case 'ita.1':
                            comp = 'Italian Serie A';
                            break;
                        case 'uefa.champions':
                            comp = 'UEFA Champions League';
                            break;
                        case 'uefa.europa':
                            comp = 'UEFA Europa League';
                            break;
                        case 'uefa.europa.conf':
                            comp = 'UEFA Conference League';
                            break;
                    }
                    texto += `
                        <li class="d-flex">
                            <div class="text-center col-2">
                                <span class="month">`+ mes +`</span>
                                <span class="day fw-bold">`+ dia +`</span>
                                <span class="year">`+ anio +`</span>
                            </div>
                            <div class="col-7 text-wrap pe-0">
                                <p class="h5 mt-1">`+comp+`</p>
                                <p class="h3 fw-bold has-spacing">` +local +` vs `+ visitante+ `</p>
                                <p class="m-0">
                                    <span>`+hora+ `</span> -
                                    <span>`+estadio +` (`+ciudad+`, `+pais+`)</span>
                                </p>
                            </div>
                            <div class="entradas text-end col-2 m-0 p-0">
                                <a href="http://localhost/AllTickets/partido/`+id+`" data-testid="event-list-link" class="enlace d-inine-block position-relative">
                                    <span>Entradas</span>
                                    <svg class="flecha flex-shrink-0 d-inline text-nowrap text-center" viewBox="0 0 24 24" width="1.5em" height="1.5em"
                                        aria-hidden="true" focusable="false">
                                        <path d="M3.47 8.26 4.53 7.2 12 14.67l7.47-7.47 1.06 1.06L12 16.8 3.47 8.26Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </li>`;
                }
            });

            partidosDiv.empty(); // Vaciar el contenido antes de agregar los resultados
            partidosDiv.append(texto);
        }).catch(function (error) {
            console.log("Error en la función partidos:", error);
        });

    }).catch(function (error) {
        console.log("Error en la función partidos:", error);
    });
}


function equipos(liga) {
    return new Promise(function (resolve, reject) {
        $.ajax({
            url: "https://site.api.espn.com/apis/site/v2/sports/soccer/" + liga + "/teams",
            method: "GET",
            success: function (data) {
                var equipos = [];
                var teams = data.sports[0].leagues[0].teams;
                for (var i = 0; i < teams.length; i++) {
                    var nombre = teams[i].team.displayName;
                    var id = teams[i].team.id;
                    var equipo = [id, nombre];
                    equipos.push(equipo);
                }
                resolve(equipos);
            },
            error: function () {
                console.log("Error al obtener los datos de la API");
                reject("Error al obtener los datos de la API");
            }
        });
    });
}

function fechaFormat(fecha) {
    // Verificar si fecha es un objeto de tipo Date
    if (!(fecha instanceof Date)) {
        // Manejar el caso en que fecha no es un objeto de tipo Date
        console.error('Error: fecha no es un objeto de tipo Date');
        return ''; // Otra acción adecuada en tu caso
    }

    var anio = fecha.getUTCFullYear();
    var mes = String(fecha.getUTCMonth() + 1).padStart(2, '0');
    var dia = String(fecha.getUTCDate()).padStart(2, '0');
    var horas = String(fecha.getUTCHours()).padStart(2, '0');
    var minutos = String(fecha.getUTCMinutes()).padStart(2, '0');

    var fechaFormateada = anio + '-' + mes + '-' + dia + 'T' + horas + ':' + minutos + 'Z';

    return fechaFormateada;
}


$(document).ready(function () {
    $('#liga').on('change', function () {
        if ($(this).val() != '') {
            $('#equipo').prop('disabled', false);
            $('#fecha-inicial').prop('disabled', false);
            $('#filtrar').prop('disabled', false);
            $('#equipo').empty();
            $('#equipo').append('<option value="">Seleccione equipo</option>');

            valorLiga = $(this).val();
            // Utilizar la función equipos dentro de una Promesa
            equipos(valorLiga)
                .then(function (opciones) {
                    ;
                    for (var i = 0; i < opciones.length; i++) {
                        $('#equipo').append('<option value="' + opciones[i][0] + '">' + opciones[i][1] + '</option>');
                    }
                })
                .catch(function (error) {
                    console.error(error);
                });
        }
    });

    $('#filtrar').on('click', function () {
        if ($('#liga').val() != '' && $('#equipo').val() != '' && $('#fecha-inicial').val() != '') {
            // muestra todos los partidos de un equipo tanto local como visitante a partir de esa fecha
            detalles($('#liga').val(), $('#equipo').val(), fechaFormat(new Date($('#fecha-inicial').val())));
        } else if ($('#liga').val() != '' && $('#equipo').val() == '' && $('#fecha-inicial').val() != '') {
            // muestra todos los partidos desde esa fecha
            detalles($('#liga').val(), '', fechaFormat(new Date($('#fecha-inicial').val())));
        } else if ($('#liga').val() != '' && $('#equipo').val() != '' && $('#fecha-inicial').val() == '') {
            // muestra todos los resultados del un equipo tanto en local como visitante
            detalles($('#liga').val(), $('#equipo').val(), '');
        } else if ($('#liga').val() != '' && $('#equipo').val() == '' && $('#fecha-inicial').val() == '') {
            // muestra todos los resultados
            detalles($('#liga').val(), '', '');
        }
    })
});