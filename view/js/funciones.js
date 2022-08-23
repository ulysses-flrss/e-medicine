function retornarDatos(accion) {
  if (accion == "programarCita"){
    return {
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
  }else if(accion == "iniciarSesion"){
    return {
      "idUsuario": document.getElementById('idUsuario').value,
      "password": document.getElementById('password').value,
      "accion": accion
    };
  }
}

function programarCita() {
  $.ajax({
      url: '../controller/ctrlCita.php',
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

function login() {
  console.log("inicia funcnión");
  $.ajax({
      url: '../controller/ctrlLogin.php',
      data: retornarDatos("iniciarSesion"),
      type: 'POST',
      dataType: 'json',

  }).done(function(response) {
    console.log("entró a la parte true");
    /*datos=response.split("-");
    console.log(datos[0]);*/
    if (response == "OK") {
      Swal.fire({
        type: 'success',
        title: '¡Éxito!',
        text: 'Ha iniciado sesión con éxito.',
        footer: 'E-MEDICINE ©'
      }).then((result)=>{
        datos = retonarDatos("iniciarSesion");
        id = datos[0].split();
        if(id[0]=="P"){
          window.location.href="../view/viewPaciente.php";
        }else if (id[0]=="D"){
          window.location.href="../view/viewDoctor.php";
        } else if(id[0]=="A") {
          window.location.href="../view/viewAdmin.php";
        }
      });
    } else {
      Swal.fire({
        type: 'error',
        title: '¡ERROR!',
        text: datos[0],
        footer: 'E-MEDICINE ©'
      });
    }
  }).fail(function(response) {
    console.log("falló");
    console.log(response);
  });
  return false
}