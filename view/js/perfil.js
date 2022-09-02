function retornarDatos(accion) {
  let genre = '';
  if (document.getElementById('masculino').checked){
    genre = 'masculino';
  }else if (document.getElementById('femenino').checked){
    genre = 'femenino';
  }
  return {
    "idUsuario": document.getElementById('idUsuario').value,
    "peso": document.getElementById('pe').value,
    "altura": document.getElementById('al').value,
    "fechaNac": document.getElementById('fn').value,
    "enfermedades": document.getElementById('enfermedades').value,
    "municipio": document.getElementById('municipio').value,
    "genero": genre,
    "nombre": document.getElementById('nom').value,
    "apellido": document.getElementById('ape').value,
    "idPerfil": document.getElementById('idPerfil').value,
    "accion": accion
  };
}

function crearPerfil(){
  $.ajax({
      url: '../controller/ctrlFamiliar.php',
      data: retornarDatos("crearPerfil"),
      type: 'POST',
      dataType: 'json'
  }).done(function(response) {
    if (response == "OK") {
      Swal.fire({
        title: '¡Éxito!',
        text: 'Su perfil familiar ha sido creado con éxito.',
        type: 'success',
        footer: 'E-MEDICINE ©'
      }).then((result)=>{
        window.location.href="../view/viewFamiliares.php?sesion=true";
      });
    } else {
      alerta('error','¡ERROR!',response,'E-MEDICINE ©');
    }
  }).fail(function(response) {
    console.log(response);
  });
  return false
}

function eliminarPerfil(idPerfil,idPaciente){
  Swal.fire({
    title: '¿Desea eliminar este perfil familiar?',
    showCancelButton: true,
    showConfirmButton: true,
    confirmButtonText: "Sí, eliminar",
    cancelButtonText: "Cancelar",
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    type: 'question'
  }).then(resultado => {
        if (resultado.value) {
            // Hicieron click en "Sí"
            console.log("*se elimina la venta*");
          $.ajax({
            url: '../controller/ctrlFamiliar.php',
            data: {"idPerfil": idPerfil, "idUsuario": idPaciente, "accion":"eliminar"},
            type: 'POST',
            dataType: 'json'
          }).done(function(response) {
            if (response == "OK") {
              alerta('success','¡Éxito!','Se ha eliminado el perfil familiar con éxito. (Actualice la página para ver los cambios)','E-MEDICINE ©'
              )
            } else {
              alerta('error','¡ERROR!',response,'E-MEDICINE ©');
            }
          }).fail(function(response) {
            console.log(response);
          });
        } else {
            // Dijeron que no
        }
  })
  return false
}

function modificar(idPerfil){
  $.ajax({
    url: '../controller/ctrlFamiliar.php',
    data: retornarDatos("modificarPerfil"),
    type: 'POST',
    dataType: 'json'
  }).done(function(response) {
    if (response == "OK") {
      Swal.fire({
        title: 'Éxito!',
        text: 'Datos actualizados con éxito',
        type: 'success',
        footer: 'E-MEDICINE ©'
      }).then((result)=>{
        window.location.href="../view/viewFamiliares.php?sesion=true";
      });
    } else {
      MostrarAlerta("Error!", response, "error");
    }
  }).fail(function(response) {
    console.log(response);
  });
}

function alerta(tipoAlerta, titulo, descripcion, footer) {
  Swal.fire({
    title: titulo,
    text: descripcion,
    type: tipoAlerta,
    footer: footer
  });
}