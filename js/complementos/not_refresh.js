// para no recargar la pagina y llevar a la pagina que se necesita
document.querySelectorAll(".refrescar").forEach(function(link) {
    link.addEventListener("click", function() {
        var url = this.getAttribute("data-url");
        var cleanUrl = url.replace(".php", "");
        fetch(url)
            .then(response => response.text())
            .then(data => {
                window.innerHTML = data;
                history.pushState({ page: cleanUrl }, "", cleanUrl);
            })
            .catch(error => {
                console.error("Error al cargar la página:", error);
            });
    });
});

