function sedeInstitucional(selector){
    const selectSedeIn= document.querySelector(selector);
    fetch('../librerias/consultaComplementarias/sedeInstitucional.php')
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            const option = document.createElement('option');
            option.value = item.sede_institucionalId;
            option.innerHTML = item.sede_institucionalNombre;
            selectSedeIn.appendChild(option);
        });
    })
    .catch(error => console.error('Error:', error));
    
    
}
