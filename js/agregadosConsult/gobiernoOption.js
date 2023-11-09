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

window.addEventListener('load', function(){
    let gobiernoRegistrar = '#prGobierno';
    let municipioResidencia = '#setMunicipioResidencia';
    let municipioNacimiento = '#prMunicipioNacimiento';
    let sedeIntRegistro = '#sedeInstitucionalId';
    let tipoPersonaPr = '#prTipoPersonaId';
    let tipoDocumentoPr = '#prTipoDocumentoId';

    tipoPersona(tipoPersonaPr);
    tipoDocumento(tipoDocumentoPr);
    sedeInstitucional(sedeIntRegistro);
    gobiernoEstudiantil(gobiernoRegistrar);
    municipio(municipioResidencia);
    municipio(municipioNacimiento);
})

