function consulta_individual(personalId){
    const data_verificacion={
        idVerificacion: personalId,
    };

    fetch('librerias/consulta_individual.php',{
        method: 'POST',
        body: JSON.stringify(data_verificacion),
        headers: {
            'Content-Type': 'application/json'
        },
    })
    .then(response => response.json())
    .then(data => {
        tabla_verificacion.innerHTML = "";
        data.forEach(item => {
            const row = document.createElement('tr');
            row.innerHTML = `<td>${item.personalMauxiDocumento}</td>
                            <td >${item.personalMauxiNombres}</td>
                            <td >${item.personalMauxiPrimerApellido}</td>
                            <td >${item.personalMauxiSegundoApellido}</td>`; 
            tabla_verificacion.appendChild(tabla_verificacion);
        });
    })
    .catch(error => console.error('Error:', error));

}