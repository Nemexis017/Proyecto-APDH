function administradores(){
    const tabla_user_see= document.querySelector(".table_admin tbody");

    fetch('../librerias/consulta_admin.php')
    .then(response => response.json())
    .then(data => {
        tabla_user_see.innerHTML = "";
        numero= 0;
        data.forEach(item => {
            numero++
            const row = document.createElement('tr');
            row.innerHTML = `<td>${numero}</td>
                            <td>${item.personalMauxiNombres}</td>
                            <td>${item.personalMauxiPrimerApellido}</td>
                            <td>${item.loginUsuario}</td>
            `; 
            tabla_user_see.appendChild(row);
        });
    })
    .catch(error => console.error('Error:', error));

}
window.addEventListener("load", administradores);