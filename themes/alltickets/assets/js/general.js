var URLactual = window.location.href.split('/');
var dir = URLactual[URLactual.length - 1]


// if (dir == '' || dir == 'es') {
//     window.location.href += '/inicio'
// }

// fetch(window.location.href)
//     .then(response => {
//         if (response.status === 404) {
//             console.log('La página no existe (404)');
//             alert('La pagina no existe, será redirigido al inicio');
//             var url = window.location.href.split('/');
//             url[url.length - 1] = 'inicio';
//             var newUrl = url.join('/');
//             window.location.href = newUrl;
//         }
//     })
//     .catch(error => {
//         console.error('Ocurrió un error al realizar la solicitud:', error);
//     });
