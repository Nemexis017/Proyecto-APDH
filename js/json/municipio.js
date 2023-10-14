window.onload= function(){
    function municipioResidencia(){
        const select= document.querySelector("#setMunicipioResidencia");
    
        fetch('librerias/municipio.php')
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

    function municipioNacimiento(){
        const select= document.querySelector("#selMunicipioNacimiento");
    
        fetch('librerias/municipio.php')
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

    municipioResidencia();
    municipioNacimiento();


}

