// para no recargar la pagina y llevar a la pagina que se necesita
document.querySelectorAll(".refrescar").forEach(function(link) {
    link.addEventListener("click", function() {
        let url = this.getAttribute("data-url");
        fetch(url)
            .then(response => response.text())
            .then(data => {
                let container = document.createElement("div");
                container.innerHTML = data;
                let contentToLoad = container.querySelector(".interno").innerHTML;
                document.getElementById("contenido").innerHTML = contentToLoad;
                let cleanUrl = url.replace(".php", "");
                history.pushState({ page: cleanUrl }, "", cleanUrl);

                // condicionales para las funciones correspondientes
                if(cleanUrl == "personal_mauxi" ){
                    let contendido_modal = container.querySelector(".seccion-modales").innerHTML;
                    document.getElementById("contenido_dos").innerHTML = contendido_modal;
                    tablaPersonal();
                }
                else if(cleanUrl== "principal_info"){
                    document.getElementById("seccion-modales").innerHTML = "";
                }
                // else if(url== ""){

                // }
                // else if(url== ""){

                // }
                
            })
            .catch(error => {
                console.error("Error al cargar la página:", error);
            });
    });
    // para la verificacion de la url si es correcta

    // window.addEventListener("popstate", (event)=>{
    //     if (!window.location.pathname.endsWith(".php")) {
    //         window.location.href = window.location.pathname + ".php";
    //     }
    // });
});

