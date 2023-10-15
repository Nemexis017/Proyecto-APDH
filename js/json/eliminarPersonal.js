function validacionEliminar(){
    const deseaHacerCambio = window.confirm("¿Estás seguro de que deseas eliminar este registro?");
    return deseaHacerCambio;
}

function eliminarRegistro(personalId){
    if(validacionEliminar() == true){
        const data_delete={
            idPersonal:personalId,
        };
    
        fetch('librerias/borrar_personal.php', {
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
            }else{
                alert("error al borrar el registro")
            }
        })
        .catch(error => console.log(error))
    }else{
        
    }
    
}








// }