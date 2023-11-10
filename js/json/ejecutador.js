window.addEventListener('load', ()=>{
    document.getElementById('registarPersonal').addEventListener('click', ()=>{
        // ejecutar option de registrar
        let tipoDocumentoMauxi = '#txtTipoDocumentoId'
        let municipioResidencia = '#setMunicipioResidencia'
        let municipioNacimiento ='#selMunicipioNacimiento'

        municipio(municipioResidencia);
        municipio(municipioNacimiento);
        tipoDocumento(tipoDocumentoMauxi); 

    })



})


