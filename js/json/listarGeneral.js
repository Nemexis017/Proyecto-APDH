
function tablaPersonal(){
    const tablaBody= document.querySelector("#tabla-admin tbody");

    fetch('librerias/tablaInicio.php')
    .then(response => response.json())
    .then(data => {
        tablaBody.innerHTML = "";
        numero= 0;
        data.forEach(item => {
            numero++
            const row = document.createElement('tr');
            row.innerHTML = `<td>${numero}</td>
                            <td >${item.tipoPersonaNombre}</td>
                            <td >${item.tipoDocumentoSigla}</td>
                            <td >${item.personalMauxiDocumento}</td>
                            <td >${item.personalMauxiNombres}</td>
                            <td >${item.personalMauxiPrimerApellido}</td>
                            <td >${item.personalMauxiSegundoApellido}</td>
                            <td>
                                <button  onclick="update_modal(${item.personalMauxiId});" class='btn btn-default btn-xs m-r-5' data-bs-toggle="modal" data-bs-target="#modal-3"><i class='fa fa-pencil font-14'></i></button>
                                <button id="delete" onclick="eliminarRegistro(${item.personalMauxiId});" class='btn btn-default btn-xs' data-bs-toggle="modal" data-bs-target="#modal-2"><i class='fa fa-trash font-14'></i></button>
                            </td>`; 
            tablaBody.appendChild(row);
        });
    })
    .catch(error => console.error('Error:', error));

}
window.addEventListener("load", tablaPersonal);