// option municipio nacimiento/residencia
function municipio(selector){
    const select= document.querySelector(selector);
    fetch('../librerias/municipio.php')
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            const option = document.createElement('option');
            option.value = item.municipioId;
            option.innerHTML = item.municipioNombre;
            select.appendChild(option);
        });
    })
    .catch(error => console.error('Error:', error))
}

// option tipo persona 
function tipoPersona(id_tipoPersona){
    const select= document.querySelector(id_tipoPersona);

    fetch('../librerias/consultaTipoPersona.php')
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            const option = document.createElement('option');
            option.value =item.tipoPersonaId;
            option.innerHTML =item.tipoPersonaNombre;
            select.appendChild(option);
        });
    })
    .catch(error => console.error('Error:', error));

}

// option tipo documento
function tipoDocumento(id_tipoDocumento){
    const select= document.querySelector(id_tipoDocumento);

    fetch('../librerias/tipoDocumento.php')
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

// gobierno gobiernoEstudiantil
function gobiernoEstudiantil(selector){
    const selectGobierno= document.querySelector(selector);
    fetch('../librerias/consultaComplementarias/gobierno.php')
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            const option = document.createElement('option');
            option.value = item.gobiernoEstudiantilId;
            option.innerHTML = item.gobiernoEstudiantilNombre;
            selectGobierno.appendChild(option);
        });
    })
    .catch(error => console.error('Error:', error));
    
    
}