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



var contenedor=document.getElementById('contend');

function mostrarElementos(){
    var scrollPantalla=document.documentElement.scrollTop;
    var alturaElemento= contenedor.offsetTop;

    if(alturaElemento-200< scrollPantalla){
        document.getElementById('fondomenu').style.background= 'rgba(0,0,0,0)';
        
    }else{
        document.getElementById('fondomenu').style.background= 'rgba(0,0,0,0.5)';
    }
}

window.addEventListener("scroll", mostrarElementos);