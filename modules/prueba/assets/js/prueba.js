function helloWorld(name) {
    $('.prueba').append(name);
}

$('.prueba').append('fuera funcion');
function obtenerArray() {
    return ['Elemento1', 'Elemento2', 'Elemento3'];
}

function obtenerString() {
    return "valor1,valor2,valor3";
  }

  function convertirStringAArray() {
    var stringObtenido = obtenerString();
    return stringObtenido.split(',');
  }