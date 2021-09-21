function retornarDatos(accion) {
  return {
    "prof":document.getElementById('prof').value,
    "idUsuario": document.getElementById('idUsuario').value,
    "pe": document.getElementById('pe').value,
    "al": document.getElementById('al').value,
    "fn": document.getElementById('fn').value,
    "em": document.getElementById('em').value,
    "doctor": document.getElementById('doctores').value,
    "fc": document.getElementById('fechaCita').value,
    "hc": document.getElementById('hc').value,
    "enfermedades": document.getElementById('enfermedades').value,
    "razon": document.getElementById('razon').value,
    "accion": accion
  };
}

function programarCita() {
  $.ajax({
      url: '../controller/ctrlCitaFamiliar.php',
      data: retornarDatos("programarCita"),
      type: 'POST',
      dataType: 'json'
  }).done(function(response) {
    if (response == "OK") {
      Swal.fire({
        type: 'success',
        title: '¡Éxito!',
        text: 'Su cita ha sido guardada con éxito.',
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