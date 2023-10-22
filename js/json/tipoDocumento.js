function tipoDocumento(id_tipoDocumento){
    const select= document.querySelector(id_tipoDocumento);

    fetch('librerias/tipoDocumento.php')
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            const option = document.createElement('option');
            option.value = item.tipoDocumentoId;
            option.innerHTML = item.tipoDocumentoNombre;
            select.appendChild(option);
        });
    })
    .catch(error => console.error('Error:', error));

}
window.addEventListener("load", function(){
    let tipoDocumento_Insert= "#txtTipoDocumentoId";
    let tipoDocumento_Update= "#txtTipoDocumentoId_update";
    tipoDocumento(tipoDocumento_Insert)
    tipoDocumento(tipoDocumento_Update)
    
});
