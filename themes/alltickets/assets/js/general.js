var URLactual = window.location.href.split('/');
var dir = URLactual[URLactual.length - 1]

if (dir == '' || dir == 'es') {
    window.location.href += '/inicio'
}