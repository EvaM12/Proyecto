/**
 * Obtiene los datos de varias ligas y los muestra en el HTML.
 * @param {string[]} ligas - Array de nombres de las ligas.
 */
function obtenerDatosVariasLigas(ligas) {
    var titulosAgregados = new Set();
    var articlesDiv = $('#articles');
    articlesDiv.empty();

    function realizarSolicitud(liga) {
        var apiUrl = 'https://site.api.espn.com/apis/site/v2/sports/soccer/' + liga + '/news';
        return $.ajax({ url: apiUrl, method: 'GET' });
    }

    // Map para almacenar las promesas y las ligas correspondientes
    var promesasMap = ligas.map(function (liga) {
        return realizarSolicitud(liga).then(function (data) {
            var tipoLiga = liga;
            var articles = data.articles || [];

            // Filtrar artículos para evitar repeticiones
            articles = articles.filter(function (article) {
                if (!titulosAgregados.has(article.headline)) {
                    titulosAgregados.add(article.headline);
                    return true;
                }
                return false;
            });

            // Agregar artículos de la liga actual al array ordenado
            return articles.map(function (article) {
                article.headline = article.headline;
                return article;
            });
        });
    });

    // Usar Promise.all para manejar múltiples promesas
    Promise.all(promesasMap).then(function (results) { // Flatten el array de resultados
        var sortedArticles = results.flat();

        // Ordenar el array de artículos por fecha
        sortedArticles.sort(function (a, b) {
            return new Date(b.published) - new Date(a.published);
        });

        // Mostrar los datos en el HTML
        sortedArticles.forEach(function (article) {
            if (article.links.api.news.href.includes('video')) {
                var partes = article.links.api.news.href.split('/');
                var id = partes[partes.length - 1];

                enlace = `http://localhost/AllTickets/news/video/${id}`;
            } else {
                var partes = article.links.api.news.href.split('/');
                var id = partes[partes.length - 1];

                enlace = `http://localhost/AllTickets/news/news/${id}`;
            }

            if (article.images[0] !== undefined && article.images[0] !== null) {
                src = article.images[0].url
                alt = article.images[0].caption
            }

            const dateString = article.published;
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
            const formattedDate = `${day} ${month} ${year} ${hours}:${minutes}`;

            var texto = article.description;
            if (window.innerWidth < 768) {
                texto = texto.substring(0, texto.length / 2) + '...';
            }

            articlesDiv.append(`<article class="news-list-post mb-4 d-flex flex-column flex-md-row">
                <div class="post-thumb col-md-4">
                    <img src="${src}" alt="${alt}">
                </div>
                <div class="post-txt col-md-8">
                    <h3>
                        <a href="${enlace}">${article.headline}</a>
                    </h3>
                    <span class="pt-3 pb-4">${formattedDate}</span>
                    <p>${texto}</p>
                </div>
            </article>`);
        });
    }).catch(function (error) {
        console.error('Error en una de las solicitudes API', error);
    });
}

// Llamar a la función para obtener datos cuando la página esté lista
$(document).ready(function () {
    obtenerDatosVariasLigas(['esp.1', 'eng.1', 'ger.1', 'fra.1', 'ita.1', 'uefa.champions', 'uefa.europa', 'uefa.europa.conf']);

    $('#liga').on('change', function () {
        var ligas = ($(this).val() === 'todas') ? ['esp.1', 'eng.1', 'ger.1', 'fra.1', 'ita.1', 'uefa.champions', 'uefa.europa', 'uefa.europa.conf'] : [$(this).val()];

        obtenerDatosVariasLigas(ligas);
    });
});