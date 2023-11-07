function tipoPersona(id_tipoPersona){
    const select= document.querySelector(id_tipoPersona);

    fetch('../librerias/consultaTipoPersona.php')
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            const option = document.createElement('option');
            option.value =item.tipoPersonaId;
            option.innerHTML =item.tipoPersonaNombre;
            select.appendChild(option);
        });
    })
    .catch(error => console.error('Error:', error));

}
window.addEventListener("load",function(){
    // let tipoPersona_Insert= "#txtTipoPersonaId";
    let tipoPersona_Update= "#tipoPersonaId_Update" 
    // tipoPersona(tipoPersona_Insert);
    tipoPersona(tipoPersona_Update);
});
