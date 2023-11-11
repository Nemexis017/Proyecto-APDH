window.addEventListener('load', ()=>{
    let tipoPersonaEs ='#esTipoPersonaId';
    let tipoDocuemtoEs ='#esTipoDocumentoId';
    let municipioNacimientoEs ='#esMunicipioNacimiento';
    let municipioResidenciaEs ='#setMunicipioResidenciaEs';

    municipio(municipioNacimientoEs);
    municipio(municipioResidenciaEs);
    tipoPersona(tipoPersonaEs);
    tipoDocumento(tipoDocuemtoEs);
})