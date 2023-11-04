function consultaProfesores(){
    const tableProfesores= document.querySelector(".tabla-profesores tbody");

    fetch('../librerias/consulta_profesores.php')
    .then(response => response.json())
    .then(data => {
        tableProfesores.innerHTML = "";
        numero= 0;
        data.forEach(item => {
            numero++
            const row = document.createElement('tr');
            row.innerHTML = `<td>${numero}</td>
                            <td>${item.tipoDocumentoSigla}</td>
                            <td>${item.profesoresMateria}</td>
                            <td>${item.profesoresDocumento}</td>
                            <td>${item.profesoresNombres}</td>
                            <td>${item.profesoresPrimerApellido}</td>
                            <td>${item.profesoresSegundoApellido}</td>
                            <td>${item.profesoresEmail}</td>
            `; 
            tableProfesores.appendChild(row);
        });
    })
    .catch(error => console.error('Error:', error));

}
window.addEventListener("load", consultaProfesores);