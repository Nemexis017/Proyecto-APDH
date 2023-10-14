
function limpiar(){
    const formulario = document.getElementById("form-registrar").reset();    
}

document.getElementById('btnRegistrar').onclick = function(){
     // event.preventDefault(); 
    const botonCerrar = document.getElementById("botonCerrar");

    const tipoPersonaId = document.getElementById("txtTipoPersonaId").value;
    const tipoDocumentoId = document.getElementById("txtTipoDocumentoId").value;
    const personalMauxiDocumento = document.getElementById("txtIdentificacion").value;
    const personalMauxiCargo = document.getElementById("txtCargo").value;
    const personalMauxiNombres = document.getElementById("txtNombres").value;
    const personalMauxiPrimerApellido = document.getElementById("txtPrimerApellido").value;
    const personalMauxiSegundoApellido = document.getElementById("txtSegundoApellido").value;
    const personalMauxiMunicipioResidencia = document.getElementById("setMunicipioResidencia").value;
    const personalMauxiMunicipioNacimiento = document.getElementById("selMunicipioNacimiento").value;
    const personalMauxiTelefono = document.getElementById("txtTelefono").value;
    const personalMauxiFechaNacimiento = document.getElementById("selFechaNacimiento").value;
    const personalMauxiEmail = document.getElementById("txtCorreoEletronico").value;
    const personalMauxiExperiencia = document.getElementById("txtExperiencia").value;
    const personalMauxiAnosExperiencia = document.getElementById("numAnosExperiencia").value;
    const personalMauxiEstudios = document.getElementById("txtEstudiosRealizados").value;

    // Crear un objeto con los datos
    const dataPersonal = {
        tipoPersonaId: parseFloat(tipoPersonaId),
        tipoDocumentoId: parseFloat(tipoDocumentoId),
        personalMauxiDocumento:personalMauxiDocumento,
        personalMauxiCargo:personalMauxiCargo,
        personalMauxiNombres:personalMauxiNombres,
        personalMauxiPrimerApellido:personalMauxiPrimerApellido,
        personalMauxiSegundoApellido:personalMauxiSegundoApellido,
        personalMauxiMunicipioResidencia: parseFloat(personalMauxiMunicipioResidencia),
        personalMauxiMunicipioNacimiento: parseFloat(personalMauxiMunicipioNacimiento),
        personalMauxiTelefono:personalMauxiTelefono,
        personalMauxiFechaNacimiento:personalMauxiFechaNacimiento,
        personalMauxiEmail:personalMauxiEmail,
        personalMauxiExperiencia:personalMauxiExperiencia,
        personalMauxiAnosExperiencia:personalMauxiAnosExperiencia,
        personalMauxiEstudios:personalMauxiEstudios,
    };


    fetch('librerias/registrar.php', {
        method: 'POST',
        body: JSON.stringify(dataPersonal),
        headers: {
            'Content-Type': 'application/json'
        },
    })
    
    .then(response => response.json())
    .then(data => {
        if(data.registroEjecutado == "OK"){
            tablaPersonal();
            limpiar();
            botonCerrar.click();
        }else{
            botonCerrar.click();
        }
    })
    .catch(error => console.log(error))
}









// Limpia el formulario usando el método reset()




