function retornarDatos(accion) {
  return {
    "nom": document.getElementById('nom').value,
    "ape": document.getElementById('ape').value,
    "pe": document.getElementById('pe').value,
    "al": document.getElementById('al').value,
    "fn": document.getElementById('fn').value,
    "genero": document.getElementById('genero').value,
    "muni": document.getElementById('muni').value,
    "email": document.getElementById('email').value,
    "pass": document.getElementById('pass').value,
    "pass2": document.getElementById('pass2').value,
    "tel": document.getElementById('tel').value,
    "accion": accion
  };
}

function crearPaciente(){
  $.ajax({
      url: '../controller/ctrlPaciente.php',
      data: retornarDatos("crearPaciente"),
      type: 'POST',
      dataType: 'json'
  }).done(function(response) {
    if (response.status == "OK") {
      mensaje = 'Su cita ha sido guardada con éxito.'+response.usuario;
      Swal.fire({
        type: 'success',
        title: '¡Éxito!',
        text: mensaje,
        footer: 'E-MEDICINE ©'
      }).then((result)=>{
        window.location.href="../view/viewPaciente.php";
      });
    } else {
      Swal.fire({
        type: 'error',
        title: '¡ERROR!',
        text: response,
        footer: 'E-MEDICINE ©'
      });
    }
  }).fail(function(response) {
    console.log(response);
  });
  return false
}