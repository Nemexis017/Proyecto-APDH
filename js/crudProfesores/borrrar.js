function deleteTeacher(profesorId){
    // consulta de verificacion de delete teacher 
    const verificacionProfesores = document.querySelector('.tablaVerifProfesores tbody');
    const data_verificacionTeacher={
        consultaProfesor:profesorId,
    };

    fetch('../librerias/consultaComplementarias/consultaIndividual.php',{
        method: 'POST',
        body: JSON.stringify(data_verificacionTeacher),
        headers: {
            'Content-Type': 'application/json'
        },
    })
    .then(response => response.json())
    .then(data => {
        verificacionProfesores.innerHTML = "";
        data.forEach(item => {
            const rowdelet = document.createElement('tr');
            rowdelet.innerHTML = `<td>${item.profesoresDocumento}</td>
                            <td>${item.profesoresNombres}</td>
                            <td>${item.profesoresPrimerApellido}</td>
                            <td>${item.profesoresSegundoApellido}</td>
                            `; 
            verificacionProfesores.appendChild(rowdelet);
        });
    })
    .catch(error => console.error('Error:', error));

    // desues de verificar sea true, entonces ejecuta esta funcion
    document.getElementById('deleteProfesor').addEventListener('click', ()=>{
        const botoCerrar = document.getElementById('closeDeletePr'); 
        const data_deletePr={
            profesorId,
        };

        fetch('../librerias/crudProfesoresPhp/deleteTeacher.php', {
            method: 'POST',
            body: JSON.stringify(data_deletePr),
            headers: {
                'Content-Type': 'application/json'
            },
        })
        
        .then(response => response.json())
        .then(data => {
            if(data.deleteTeacher == "OK"){
                consultaProfesores();
                botoCerrar.click();
            }else{
                alert("error al borrar el registro")
            }
            
        })
        .catch(error => console.log(error)) 
    })
}