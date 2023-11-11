window.addEventListener('load', ()=>{
    tablaPersonal();
    document.getElementById('registarPersonal').addEventListener('click', ()=>{
        // ejecutar option de registrar
        let tipoDocumentoMauxi = '#txtTipoDocumentoId'
        let municipioResidencia = '#setMunicipioResidencia'
        let municipioNacimiento ='#selMunicipioNacimiento'

        municipio(municipioResidencia);
        municipio(municipioNacimiento);
        tipoDocumento(tipoDocumentoMauxi); 

    })

    document.getElementById('update').addEventListener('click', function(){
        let tipoDocumentoMauxi = '#txtTipoDocumentoId_update';
        let tipoPersona = '#txtTipoPersonaId_update';
        let municipioResidencia = '#setMunicipioResidencia_update';
        let municipioNacimiento ='#selMunicipioNacimiento_update';

        municipio(municipioResidencia);
        municipio(municipioNacimiento);
        tipoDocumento(tipoDocumentoMauxi); 
        tipoPersona(tipoPersona);

    })
})


