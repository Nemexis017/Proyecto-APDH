function limpiar(){
    const formulario = document.getElementById("form-registrarEstudiantes").reset();    
}
document.getElementById('recordStudent').onclick = function(){
    //  event.preventDefault(); 

    const botonCerrar = document.getElementById("botonCerrar");

    const tipoDocumentoId = document.getElementById('esTipoDocumentoId').value; 
    const tipoPersonaId = document.getElementById('esTipoPersonaId').value; 
    const estudiantesNumeroDocumento = document.getElementById('esIdentificacion').value; 
    const estudiantesNombres = document.getElementById('esNombres').value; 
    const estudiantesPrimerApellido = document.getElementById('esPrimerApellido').value; 
    const estudiantesSegundoApellido = document.getElementById('txtSegundoApellidoEs').value; 
    const estudiantesMunicipioResidencia = document.getElementById('setMunicipioResidenciaEs').value; 
    const estudiantesMunicipoNacimiento = document.getElementById('esMunicipioNacimiento').value; 
    const estudiantesTelefono = document.getElementById('esTelefono').value; 
    const estudiantesFechaNacimiento = document.getElementById('esFechaNacimiento').value; 
    const estudiantesEmail = document.getElementById('txtCorreoEletronicoEs').value; 
    const gobiernoEstudiantilId = document.getElementById('esGobierno').value; 

    // Crear un objeto con los datos
    const dataEstudiante = {
        tipoDocumentoId,
        tipoPersonaId,
        estudiantesNumeroDocumento,
        estudiantesNombres,
        estudiantesPrimerApellido,
        estudiantesSegundoApellido,
        estudiantesMunicipioResidencia,
        estudiantesMunicipoNacimiento,
        estudiantesTelefono,
        estudiantesFechaNacimiento,
        estudiantesEmail,
        gobiernoEstudiantilId
    };

    fetch('../librerias/crudEsudiantes.php/registrarEstudiantes.php', {
        method: 'POST',
        body: JSON.stringify(dataEstudiante),
        headers: {
            'Content-Type': 'application/json'
        },
    })
    
    .then(response => response.json())
    .then(data => {
        if(data.registroEstudiantes == "OK"){
            consultaEstudiantes();
            limpiar();
            botonCerrar.click();
        }else{
            botonCerrar.click();
        }
    })
    .catch(error => console.log(error))
}