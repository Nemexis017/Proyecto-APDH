function limpiar(){
    const formulario = document.getElementById("form-registrarProfesores").reset();    
}
document.getElementById('btnRegistrar').onclick = function(){
     // event.preventDefault(); 
    const botonCerrar = document.getElementById("botonCerrar");

    const prtipoDocumentoId = document.getElementById("prTipoDocumentoId").value;
    const prtipoPersonaId = document.getElementById("prTipoPersonaId").value;
    const profesoresDocumento = document.getElementById("prIdentificacion").value;
    const profesoresNombres = document.getElementById("prNombres").value;
    const profesoresPrimerApellido = document.getElementById("prPrimerApellido").value;
    const profesoresSegundoApellido = document.getElementById("txtSegundoApellido").value;
    const profesoresMunicipioResidencia = document.getElementById("setMunicipioResidencia").value;
    const profesoresMunicipioNacimiento = document.getElementById("prMunicipioNacimiento").value;
    const profesoresTelefono = document.getElementById("prTelefono").value;
    const profesoresFechaNacimiento = document.getElementById("prFechaNacimiento").value;
    const profesoresEmail = document.getElementById("txtCorreoEletronico").value;
    const profesoresMateria = document.getElementById("prMateria").value;
    const profesoresExperiencia = document.getElementById("").value;
    const profesoresAnoExperiencia = document.getElementById("numAnosExperiencia").value;
    const profesoresTitulos = document.getElementById("txtEstudiosRealizados").value;
    const gobiernoEstudiantilId = document.getElementById("prGobiernoEstudiantil").value;
    const sede_institucionalId = document.getElementById("sedeInstitucionalId").value;

    // Crear un objeto con los datos
    const dataPersonal = {
        prtipoDocumentoId, 
        prtipoPersonaId, 
        profesoresDocumento, 
        profesoresNombres, 
        profesoresPrimerApellido, 
        profesoresSegundoApellido, 
        profesoresMunicipioResidencia,
        profesoresMunicipioNacimiento, 
        profesoresTelefono,
        profesoresFechaNacimiento, 
        profesoresEmail, 
        profesoresMateria, 
        profesoresExperiencia ,
        profesoresAnoExperiencia,
        profesoresTitulos, 
        gobiernoEstudiantilId ,
        sede_institucionalId
    };

    fetch('../librerias/registrar.php', {
        method: 'POST',
        body: JSON.stringify(dataPersonal),
        headers: {
            'Content-Type': 'application/json'
        },
    })
    
    .then(response => response.json())
    .then(data => {
        if(data.registroEjecutado == "OK"){
            consultaProfesores();
            limpiar();
            botonCerrar.click();
        }else{
            botonCerrar.click();
        }
    })
    .catch(error => console.log(error))
}