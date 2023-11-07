function eliminarRegistro(personalId){
    // consulta de verificacion de delete
    const tabla_verificacion= document.querySelector('#tabla-verificacion tbody');
    const data_verificacion={
        idVerificacion: personalId,
    };

    
    fetch('../librerias/consulta_individual.php',{
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
            tabla_verificacion.appendChild(row);
        });
    })
    .catch(error => console.error('Error:', error));

    // al ejecutar el dalete
    document.getElementById('aceptar_veri').onclick = function(){
        const botoCerrar = document.getElementById('cerrar_veri'); 
        const data_delete={
            idPersonal:personalId,
        };

        fetch('../librerias/borrar_personal.php', {
            method: 'POST',
            body: JSON.stringify(data_delete),
            headers: {
                'Content-Type': 'application/json'
            },
        })
        
        .then(response => response.json())
        .then(data => {
            if(data.eliminacion == "OK"){
                tablaPersonal();
                botoCerrar.click();
            }else{
                alert("error al borrar el registro")
            }
            
        })
        .catch(error => console.log(error)) 
    }
    
}