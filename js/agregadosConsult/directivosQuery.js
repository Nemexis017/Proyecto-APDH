function consultaDirectivos(){
    const tableProfesores= document.querySelector(".tabla-directivos tbody");

    fetch('../librerias/consultaComplementarias/directivos.php')
    .then(response => response.json())
    .then(data => {
        tableProfesores.innerHTML = "";
        numero= 0;
        data.forEach(item => {
            numero++
            const row = document.createElement('tr');
            row.innerHTML = `<td>${numero}</td>
                            <td>${item.tipoPersonaNombre}</td>
                            <td>${item.tipoDocumentoSigla}</td>
                            <td>${item.personalMauxiDocumento}</td>
                            <td>${item.personalMauxiNombres}</td>
                            <td>${item.personalMauxiPrimerApellido}</td>
                            <td>${item.personalMauxiSegundoApellido}</td>
                            <td>${item.personalMauxiTelefono}</td>
                            
            `; 
            tableProfesores.appendChild(row);
        });
    })
    .catch(error => console.error('Error:', error));

}
window.addEventListener("load", consultaDirectivos);