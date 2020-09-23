var abre = document.getElementById("abrirMenu");
var cierra = document.getElementById("cerrarMenu");
var panel = document.getElementById("panelMenu")

abre.addEventListener("click", function(){
    panel.style.left="0px";
    cierra.style.opacity="1";
    cierra.style.zIndex="11";
    abre.style.opacity="0";
})

cierra.addEventListener("click", function(){
    panel.style.left="-400px";
    cierra.style.opacity="0";
    cierra.style.zIndex="1";
    abre.style.opacity="1";
})