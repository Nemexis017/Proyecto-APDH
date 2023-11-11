function consultaProfesores(){
    const tableProfesores= document.querySelector(".tabla-profesores tbody");

    fetch('../librerias/consulta_profesores.php')
    .then(response => response.json())
    .then(data => {
        tableProfesores.innerHTML = "";
        numero= 0;
        data.forEach(item => {
            numero++
            const row = document.createElement('tr');
            row.innerHTML = `<td>${numero}</td>
                            <td>${item.tipoDocumentoSigla}</td>
                            <td>${item.profesoresMateria}</td>
                            <td>${item.profesoresDocumento}</td>
                            <td>${item.profesoresNombres}</td>
                            <td>${item.profesoresPrimerApellido}</td>
                            <td>${item.profesoresSegundoApellido}</td>
                            <td>${item.sede_institucionalNombre}</td>
                            <td>
                                <button  onclick="updateTeacher(${item.profesoresId});" class='btn btn-default btn-xs m-r-5' data-bs-toggle="modal" data-bs-target="#modal-3"><i class='fa fa-pencil font-14'></i></button>
                                <button id="delete" onclick="deleteTeacher(${item.profesoresId});" class='btn btn-default btn-xs' data-bs-toggle="modal" data-bs-target="#profesores-delete"><i class='fa fa-trash font-14'></i></button>
                            </td>
            `; 
            tableProfesores.appendChild(row);
        });
    })
    .catch(error => console.error('Error:', error));

}
window.addEventListener("load", consultaProfesores);