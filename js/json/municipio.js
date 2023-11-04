function municipio(selector){
    if(selector === null){
        return "Funcion en espera"
    }else{
        const select= document.querySelector(selector);
        fetch('../librerias/municipio.php')
        .then(response => response.json())
        .then(data => {
            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.municipioId;
                option.innerHTML = item.municipioNombre;
                select.appendChild(option);
            });
        })
        .catch(error => console.error('Error:', error));
    }
    
}

window.addEventListener("load", function() {
    let municipioResidencia= ".municipioResidencia"
    let municipioNacimiento= ".municipioNacimiento"
    let municipioR_udate= ".municipioResidenciaUp"
    let municipioN_udate= ".municipioNacimientoUp"
    municipio(municipioResidencia);
    municipio(municipioNacimiento);
    municipio(municipioR_udate);
    municipio(municipioN_udate);
});

