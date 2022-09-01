function submitForm(event){
  event.preventDefault();
}
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
    }else if (document.getElementById('femenino').checked) {
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
  }else if (accion == "citaFamiliar"){
    return {
      "idUsuario": document.getElementById('idUsuario').value,
      "idPerfil": document.getElementById('idPerfil').value,
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
}

function programarCita() {
  if (document.getElementById('citaFamiliar').checked){
    console.log('cita para familiar');
    if (validacionDatos("programarCita")){
      console.log(document.getElementById('idPerfil').value);
      $.ajax({
          url: '../controller/ctrlCitaFamiliar.php',
          data: retornarDatos('citaFamiliar'),
          type: 'POST',
          dataType: 'json'
      }).done(function(response) {
        console.log("entra función response " + response);
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
          console.log("no entra función response");
          console.log(response);
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
      return false;
    }else{
      Swal.fire({
        type: 'error',
        title: '¡ERROR!',
        text: 'Está malo....',
        footer: 'E-MEDICINE ©'
      });
    }
  }else{
    if (validacionDatos("programarCita")) {
      $.ajax({
          url: '../controller/ctrlCita.php',
          data: retornarDatos('programarCita'),
          type: 'POST',
          dataType: 'json'
      }).done(function(response) {
        console.log("entra función response " + response);
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
          console.log("no entra función response");
          console.log(response);
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
      return false;
    } else {
      Swal.fire({
        type: 'error',
        title: '¡ERROR!',
        text: 'Está malo....',
        footer: 'E-MEDICINE ©'
      });
    }
  }
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
  if (validacionDatos("registrarUser")){
    document.getElementById("form").addEventListener("submit",e=> {
      e.preventDefault();
    });
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
  }
  return false
}

function validacionDatos(accion) {
  let hoy = new Date();
  let dia = hoy.getDate();
  let mes = hoy.getMonth() + 1;
  let year = hoy.getFullYear();
  let expAltura = /^([0-1][0-9][0-9])|([2][0-2][0-9])$/;
  let expPeso = /^([0-4][0-9][0-9])$/;
  let expFechaNac = /^([1][9][2-9][0-9]|[2][0][0-1][0-9]|[2][0][2][0-2])[-]([0][1-9]|[1][0-2])[-]([0-2][0-9]|[3][0-1])$/;
  if (accion == "programarCita"){
    console.log("Programar Cita");
    let datosUsuario = retornarDatos("programarCita");
    let expEnf = /^([a-zA-Z]*)$/;
    let expRazCita = /^([a-zA-Z0-9]{4,})$/;

    if (expAltura.test(datosUsuario.al) && expPeso.test(datosUsuario.pe) && expFechaNac.test(datosUsuario.fn) && expEnf.test(datosUsuario.enfermedades) && expRazCita.test(datosUsuario.razon)) {      
      console.log(retornarDatos('programarCita'));
      return true;
    } else {
      return false;
    }
  }else if (accion == "registrarUser"){
    console.log("Registrar User");
    let datosUsuario = retornarDatos("registrarUser");
    let expCorreo = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
    let expTel =  /^\d{4}-\d{4}/;
    //let expPass =  /\((?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,30})/;
    let expNom = /^[a-zA-Z\u00C0-\u017F\s]+$/;
    let expDui = /^\d{8}-\d$/;
    let password2 = document.getElementById("password2").value;
    let fecha = (datosUsuario.fn).split("-");
    //return false;
    if (datosUsuario.nom === "" && datosUsuario.ape === "" && datosUsuario.pe === "" && datosUsuario.al === "" && datosUsuario.fn === "" && datosUsuario.email === "" && datosUsuario.pass === "" && datosUsuario.tel === "" && datosUsuario.dui === "" && datosUsuario.muni === "") {
      sweetAl("Debe llenar todos los campos.");
      return false;
    }else{
      if (!expNom.test(datosUsuario.nom) || datosUsuario.nom == ""){
        sweetAl("El nombre ingresado es inválido");
        return false;
      }
      if (!expNom.test(datosUsuario.ape) || datosUsuario.ape == ""){
        sweetAl("El apellido ingresado es inválido. Recuerde colocar sus 2 apellidos.");
        return false;
      }
      if (!expPeso.test(datosUsuario.pe) || datosUsuario.pe == ""){
        sweetAl("El peso ingresado es inválido.");
        return false;
      }
      if (!expAltura.test(datosUsuario.al) || datosUsuario.al == ""){
        sweetAl("La altura ingresada es inválida.");
        return false;
      }
      if (!expFechaNac.test(datosUsuario.fn) || datosUsuario.fn == "" || ((year - fecha[0]) < 18)){
        sweetAl("La fecha ingresada es inválida. Recuerde que tiene que ser mayor de edad.");
        return false;
      }
      if (datosUsuario.muni == ""){
        sweetAl("Debe seleccionar el municipio donde vive.");
        return false;
      }
      if (datosUsuario.gen == ""){
        sweetAl("Debe seleccionar su genero");
        return false;
      }
      if (!expCorreo.test(datosUsuario.email) || datosUsuario.email == ""){
        sweetAl("El correo electrónico ingresado es inválido.");
        return false;
      }
      if (datosUsuario.pass.length < 8 || datosUsuario.pass.length > 20){
        sweetAl("La contraseña ingresada es inválida. Debe ingresar una contraseña que posea entre 8 a 20 carácteres.");
        return false;
      }
      if (datosUsuario.pass != password2){
        sweetAl("Ha ingresado contraseñas diferentes.");
        return false;
      }
      console.log(datosUsuario.dui);
      console.log(expDui.test(datosUsuario.dui));
      if (!expDui.test(datosUsuario.dui) || datosUsuario.dui == ""){
        sweetAl("El DUI ingresado es inválido. Recuerde que debe incluir el guion. Ejemplo: 12345678-9");
        return false;
      }
      if (!expTel.test(datosUsuario.tel) || datosUsuario.tel == ""){
        sweetAl("El teléfono ingresado es inválido. Recuerde que debe colocar el guion. Ejemplo: 1234-5678");
        return false;
      }
      /*let validarDui = "";
      $.ajax({
        url: '../controller/CtrlPaciente.php',
        data: {"dui": datosUsuario.dui, "accion": 'validarDui'},
        type: 'POST',
        dataType: 'json'
      }).done(function(response) {
        console.log("Completa AJAX");
        if (response == "OK") {
          console.log("Es diferente");
          validarDui = true;
        } else {
          console.log("Es igual");
          validarDui = false;
        }
      }).fail(function(response) {
        console.log("Error del ajax");
        console.log(response);
      });

      if (!validarDui){
        sweetAl("Este DUI ya ha sido registrado");
        return false;
      }*/
      return true;
    }
  }
}

document.getElementById('citaInv').addEventListener("click", e =>{
  Swal.fire({
    type: 'info',
    title: 'OPS...',
    text: 'Querido Usuario, para acceder a esta función debe iniciar sesión.',
    footer: 'E-MEDICINE ©'
  });
});

document.getElementById('famiInvi').addEventListener("click", e =>{
  Swal.fire({
    type: 'info',
    title: 'OPS...',
    text: 'Querido Usuario, para acceder a esta función debe iniciar sesión.',
    footer: 'E-MEDICINE ©'
  });
});

function sweetAl(descrip){
  Swal.fire({
    type: 'error',
    title: '¡ERROR!',
    text: descrip,
    footer: 'E-MEDICINE ©'
  });
}