window.addEventListener('load', ()=>{
    let tipoPersonaEs ='#esTipoPersonaId';
    let tipoDocuemtoEs ='#esTipoDocumentoId';
    let municipioNacimientoEs ='#esMunicipioNacimiento';
    let municipioResidenciaEs ='#setMunicipioResidenciaEs';
    let gobiernoEstudiante = '#esGobierno';

    municipio(municipioNacimientoEs);
    municipio(municipioResidenciaEs);
    tipoPersona(tipoPersonaEs);
    tipoDocumento(tipoDocuemtoEs);
    gobiernoEstudiantil(gobiernoEstudiante)
})