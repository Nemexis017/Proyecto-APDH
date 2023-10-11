
function dataPersonal(){
    const tablaBody= document.querySelector("#tabla-admin tbody");

    fetch('librerias/tablaInicio.php')
    .then(response => response.json())
    .then(data => {
        tablaBody.innerHTML = "";

        data.forEach(item => {
            const row = document.createElement('tr');
            row.innerHTML = `<td class="border-bottom-0"><h6 class="fw-semibold mb-0">${item.personaId}</h6></td>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-1">${item.tipoDocumento}</h6></td>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-1">${item.personaNumeroDocumento}</h6></td>
                            <td class="border-bottom-0"><p class="mb-0 fw-normal">${item.personaNombres}</p></td>
                            <td class="border-bottom-0"><p class="mb-0 fw-normal">${item.personaPrimerApellido}</p></td>
                            <td class="border-bottom-0"><p class="mb-0 fw-normal">${item.personaSegundoApellido}</p></td>
                            <td class="border-bottom-0"><p class="mb-0 fw-normal">${item.personaEmail}</p></td>`; 
            tablaBody.appendChild(row);
        });
    })
    .catch(error => console.error('Error:', error));

}
window.addEventListener("load", dataPersonal);