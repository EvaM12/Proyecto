function obtenerEquipos(liga){
    $.ajax({
        url: "https://site.api.espn.com/apis/site/v2/sports/soccer/" + liga + "/teams",
        method: "GET",
        success: function (data) {
            var equipos = [];
            equiposDiv = $('.equipos');
            equiposDiv.empty();

            var teams = data.sports[0].leagues[0].teams;
            var equipos='';
            for (var i = 0; i <teams.length; i++) {
                ruta = 'http://localhost/AllTickets/teams/'+enlace(teams[i].team.shortDisplayName);

                equipos += `<article class="d-flex flex-column"><img src="${teams[i].team.logos[0].href}" alt="${teams[i].team.logos[0].alt}" width="100" height="100"><a class="fs-3" href="${ruta}">${teams[i].team.displayName}</a></article>`;
            }
            equiposDiv.append(`<h1>${data.sports[0].leagues[0].shortName}</h1><div class="listado">${equipos}</div>`);
            // al hacer el enlace extraer el shortDisplayName, quitarle los espacios y los acentos
        },
        error: function () {
            console.log("Error al obtener los datos de la API");
            reject("Error al obtener los datos de la API");
        }
    });
}

function enlace(equipo){
    // Quitar espacios
    let sinEspacios = equipo.replace(/\s/g, '');

    // Quitar acentos
    let sinAcentos = sinEspacios.normalize('NFD').replace(/[\u0300-\u036f]/g, '');

    return sinAcentos;
}

function id(liga) {
    return new Promise(function (resolve, reject) {
        var equipos = [];
        $.ajax({
            url: "https://site.api.espn.com/apis/site/v2/sports/soccer/" + liga + "/teams",
            method: "GET",
            success: function (data) {
                var teams = data.sports[0].leagues[0].teams;
                for (var i = 0; i < teams.length; i++) {
                    var id = teams[i].team.id;
                    equipos.push(id);
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

function tabla(liga) { //clasisficacion de la liga
    var texto = '<table class="w-100 overflow-hidden"><thead class="bAzul5"><tr><th>Team</th><th>PJ</th><th class="ps-1 pe-1">W</th><th class="ps-1 pe-1">D</th><th class="ps-1 pe-1">L</th><th>Pts</th></tr></thead><tbody>';
    id(liga).then(function (equipos) {
        // Aquí tienes el array de equipos
        var tablaDiv = $(".point-table");
        tablaDiv.empty();
        var promises = [];

        for (var i = 0; i < equipos.length; i++) {
            var promise = $.ajax({
                url: "https://site.api.espn.com/apis/site/v2/sports/soccer/" + liga + "/teams/" + equipos[i],
                method: "GET"
            });
            promises.push(promise);
        }

        Promise.all(promises).then(function (responses) {
            responses.sort(function (a, b) {
                var posA = a.team.record.items[0].stats[23].value;
                var posB = b.team.record.items[0].stats[23].value;
                return posA - posB; // Orden ascendente por posición
            });

            responses.forEach(function (data) {
                var nombre = data.team.name;
                var pj = data.team.record.items[0].stats[0].value;
                var puntos = data.team.record.items[0].stats[3].value;
                var vic = data.team.record.items[0].stats[8].value;
                var emp = data.team.record.items[0].stats[7].value;
                var derr = data.team.record.items[0].stats[1].value;
                var pos = data.team.record.items[0].stats[23].value;

                texto += '<tr><td>' + nombre + '</td>';
                texto += '<td>' + pj + '</td>';
                texto += '<td class="ps-1 pe-1">' + vic + '</td>';
                texto += '<td class="ps-1 pe-1">' + emp + '</td>';
                texto += '<td class="ps-1 pe-1">' + derr + '</td>';
                texto += '<td>' + puntos + '</td></tr>';
            });

            texto += '</tbody></table>';
            tablaDiv.append(texto);
        }).catch(function (error) {
            console.log("Error en la función tabla:", error);
        });

    }).catch(function (error) {
        console.log(error);
    });
}

$(document).ready(function () {
    obtenerEquipos('esp.1');
    tabla('esp.1');

    $('#liga').on('change', function () {
        var liga = $(this).val();
        obtenerEquipos(liga);
        tabla(liga);
    });
});