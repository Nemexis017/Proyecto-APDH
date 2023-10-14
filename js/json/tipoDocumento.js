function tipoDocumento(){
    const select= document.querySelector("#txtTipoDocumentoId");

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
window.addEventListener("load", tipoDocumento);
