var miModal = document.getElementById('miModal');
var modal = document.getElementById('modal');
var abrir = document.getElementById('abrir');
var cerrar = document.getElementById('cerrar');

abrir.addEventListener('click', function(){

})

/*function modalC()

var contador;
var nombre = "rate-";*/

function calificar(item){
  console.log(item);
  contador=item.id[0];
  var nombre = item.id.substring(1);
  console.log(contador);
  console.log(nombre);
  for (let i = 0; i < 5; i++) {
    if (i<contador) {
      document.getElementById((i+1)+nombre).style.color="gold";
    }else{
      document.getElementById((i+1)+nombre).style.color="#000";
    }
  }
}