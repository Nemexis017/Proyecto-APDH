window.onload = function () {
    // para la búsqueda de usuarios
    document.querySelector('.form-control').onkeyup = function () {
        var input = document.getElementById('buscarPersonal');
        var filtro = input.value.toUpperCase();
        var tabla = document.getElementById('personalGeneral');
        var filas = tabla.getElementsByTagName('tr');
        var noResultRow = document.getElementById('noResult');
        var resultadosEncontrados = false;

        for (var i = 0; i < filas.length; i++) {
            var celdas = filas[i].getElementsByTagName('td');
            var encontrado = false;

            for (var j = 0; j < celdas.length; j++) {
                var contenido = celdas[j].textContent || celdas[j].innerText;

                if (contenido.toUpperCase().indexOf(filtro) > -1) {
                    encontrado = true;
                    resultadosEncontrados = true;
                    break;
                }
            }

            if (encontrado) {
                filas[i].style.display = '';
            } else {
                filas[i].style.display = 'none';
            }
        }

        // Mostrar u ocultar el mensaje de "No se encontraron resultados"
        noResultRow.style.display = resultadosEncontrados ? '' : 'none ';
    }
}
