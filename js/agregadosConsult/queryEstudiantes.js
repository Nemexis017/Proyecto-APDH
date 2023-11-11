function consultaEstudiantes(){
    const tableEsudiantes= document.querySelector(".tabla-estudiantes tbody");

    fetch('../librerias/consultaComplementarias/queryEstudiantes.php')
    .then(response => response.json())
    .then(data => {
        tableEsudiantes.innerHTML = "";
        numero= 0;
        data.forEach(item => {
            numero++
            const row = document.createElement('tr');
            row.innerHTML = `<td>${numero}</td>
                            <td>${item.tipoDocumentoNombre}</td>
                            <td>${item.gobiernoEstudiantilNombre}</td>
                            <td>${item.estudiantesNumeroDocumento}</td>
                            <td>${item.estudiantesNombres}</td>
                            <td>${item.estudiantesPrimerApellido}</td>
                            <td>${item.estudiantesSegundoApellido}</td>
                            <td>${item.estudiantesEmail}</td>
                            <td>
                                <button  onclick="" class='btn btn-default btn-xs m-r-5' data-bs-toggle="modal" data-bs-target="#modal-3"><i class='fa fa-pencil font-14'></i></button>
                                <button id="delete" onclick="" class='btn btn-default btn-xs' data-bs-toggle="modal" data-bs-target="#profesores-delete"><i class='fa fa-trash font-14'></i></button>
                            </td>
            `; 
            tableEsudiantes.appendChild(row);
        });
    })
    .catch(error => console.error('Error:', error));

}
window.addEventListener("load", consultaEstudiantes);