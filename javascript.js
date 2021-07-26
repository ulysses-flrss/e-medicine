
    var nav = document.getElementsByClassName(".nav");
if (nav){
    nav[0].addEventListener("click", hoverIn, false);
    alert("SIU")
} else {
    alert("nou");
}


function hoverIn () {
    console.log ('EL WIDTH SE HA CAMBIADO');
    nav[0].style.width =  600;
    
}
