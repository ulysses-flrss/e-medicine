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
  }else if (accion == "registrarUser"){
    let genre = "";
    if (document.getElementById('masculino').checked){
      genre = "masculino";
    }else{
      genre = "femenino";
    }
    return {
      "nom": document.getElementById('nom').value,
      "ape": document.getElementById('ape').value,
      "pe": document.getElementById('pe').value,
      "al": document.getElementById('al').value,
      "fn": document.getElementById('fn').value,
      "gen": genre,
      "muni": document.getElementById('muni').value,
      "email": document.getElementById('email').value,
      "pass": document.getElementById('password').value,
      "tel": document.getElementById('tel').value,
      "dui": document.getElementById('dui').value,
      "accion": accion
    };
  }
}

function programarCita() {
  validacionDatos();
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
  form = document.getElementById("formularioE");
  form.addEventListener("submit", e =>{
    e.preventDefault();
  });
  console.log("inicia funcnión");
  $.ajax({
      url: '../controller/ctrlLogin.php',
      data: retornarDatos("iniciarSesion"),
      type: 'POST',
      dataType: 'json',

  }).done(function(response) {
    console.log("entró a la parte true");
    if (response == "P" || response == "D" || response == "A") {
      let code = document.getElementById('idUsuario').value;
      inicial = code.split("-");
      console.log(inicial[0]);
      Swal.fire({
        type: 'success',
        title: '¡Éxito!',
        text: 'Ha iniciado sesión con éxito.',
        footer: 'E-MEDICINE ©'
      }).then((result)=>{
        if (response === "P") {
          window.location.href="../view/viewPaciente.php";
        }else if(response === "D"){
          window.location.href="../view/viewDoctor.php";
        }else if (response === "A") {
          window.location.href="../view/viewAdmin.php";
        }
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
    console.log("falló");
    console.log(response);
  });
  return false
}

function registrarUser() {
  //validacionDatos();
  $.ajax({
      url: '../controller/CtrlPaciente.php',
      data: retornarDatos("registrarUser"),
      type: 'POST',
      dataType: 'json'
  }).done(function(response) {
    console.log("ajax completado");
    let respuesta = response.split('-');
    if (respuesta[0] == "P") {
      console.log("ingresa al OK");
      Swal.fire({
        type: 'success',
        title: '¡Éxito!',
        text: 'Su cuenta ha sido creada con éxito.\n\nInicie Sesión ingresando su DUI como usuario o ingresando este código: '+response+'.',
        footer: 'E-MEDICINE ©'
      }).then((result)=>{
        window.location.href="../view/viewLogin.php";
      });
    } else {
      console.log("No ingresa al OK");
      Swal.fire({
        type: 'error',
        title: '¡ERROR!',
        text: response,
        footer: 'E-MEDICINE ©'
      });
    }
  }).fail(function(response) {
    console.log("Error del ajax");
    console.log(response);
  });
  return false
}

function validacionDatos() {
  let datosPaciente = retornarDatos("programarCita");

  if (/([5-500])/g.test(datosPaciente.pe)) {
    console.log("CORRECTO");
  }


}