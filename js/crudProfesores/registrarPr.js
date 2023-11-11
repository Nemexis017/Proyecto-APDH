function limpiar(){
    const formulario = document.getElementById("form-registrarProfesores").reset();    
}
document.getElementById('recordTeacher').onclick = function(){
    //  event.preventDefault(); 

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
    const profesoresExperiencia = document.getElementById("prExperiencia").value;
    const profesoresAnoExperiencia = document.getElementById("numAnosExperiencia").value;
    const profesoresTitulos = document.getElementById("txtEstudiosRealizados").value;
    const gobiernoEstudiantilId = document.getElementById("prGobierno").value;
    const sede_institucionalId = document.getElementById("sedeInstitucionalId").value;


    const formData = new FormData();

    formData.append('prtipoDocumentoId',prtipoDocumentoId)
    formData.append('prtipoPersonaId',prtipoPersonaId)
    formData.append('profesoresDocumento',profesoresDocumento)
    formData.append('profesoresNombres',profesoresNombres)
    formData.append('profesoresPrimerApellido',profesoresPrimerApellido)
    formData.append('profesoresSegundoApellido',profesoresSegundoApellido)
    formData.append('profesoresMunicipioResidencia',profesoresMunicipioResidencia)
    formData.append('profesoresMunicipioNacimiento',profesoresMunicipioNacimiento)
    formData.append('profesoresTelefono',profesoresTelefono)
    formData.append('profesoresFechaNacimiento',profesoresFechaNacimiento)
    formData.append('profesoresEmail',profesoresEmail)
    formData.append('profesoresMateria',profesoresMateria)
    formData.append('profesoresExperiencia',profesoresExperiencia)
    formData.append('profesoresAnoExperiencia',profesoresAnoExperiencia)
    formData.append('profesoresTitulos',profesoresTitulos)
    formData.append('gobiernoEstudiantilId',gobiernoEstudiantilId)
    formData.append('sede_institucionalId',sede_institucionalId)
    formData.append('sede_institucionalId',sede_institucionalId)

    const archivoInput = document.getElementById('prFotografia');
    const archivo = archivoInput.files[0];

    // Añadir el archivo al FormData
    formData.append('archivo', archivo);


    fetch('../librerias/crudProfesoresPhp/registrarPr.php', {
        method: 'POST',
        body: formData,
    })
    
    .then(response => response.json())
    .then(data => {
        if(data.registoProfesores == "OK"){
            consultaProfesores();
            limpiar();
            botonCerrar.click();
        }else{
            botonCerrar.click();
        }
    })
    .catch(error => console.log(error))
}