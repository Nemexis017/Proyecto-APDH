
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
                                <button class='btn btn-default btn-xs m-r-5' data-toggle='tooltip' data-original-title='Edit'><i class='fa fa-pencil font-14'></i></button>
                                <button class='btn btn-default btn-xs' data-toggle='tooltip' data-original-title='Delete'><i class='fa fa-trash font-14'></i></button>
                            </td>`; 
            tablaBody.appendChild(row);
        });
    })
    .catch(error => console.error('Error:', error));

}
window.addEventListener("load", tablaPersonal);