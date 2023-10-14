function tipoPersona(){
    const select= document.querySelector("#txtTipoPersonaId");

    fetch('librerias/consultaTipoPersona.php')
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            const option = document.createElement('option');
            option.value = item.tipoPersonaId;
            option.innerHTML = item.tipoPersonaNombre;
            select.appendChild(option);
        });
    })
    .catch(error => console.error('Error:', error));

}
window.addEventListener("load", tipoPersona);
