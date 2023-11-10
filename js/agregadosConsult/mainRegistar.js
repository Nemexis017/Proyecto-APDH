
// option del gobierno estudiantil
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

// option de sedes institucionales
function sedeInstitucional(selector){
    const selectSedeIn= document.querySelector(selector);
    fetch('../librerias/consultaComplementarias/sedeInstitucional.php')
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            const option = document.createElement('option');
            option.value = item.sede_institucionalId;
            option.innerHTML = item.sede_institucionalNombre;
            selectSedeIn.appendChild(option);
        });
    })
    .catch(error => console.error('Error:', error));
    
    
}

window.addEventListener('load', ()=>{
    document.getElementById('registrarProfesores').addEventListener('click', ()=>{
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
})

