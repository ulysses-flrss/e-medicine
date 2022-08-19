function listarEspecial(){
  $.ajax({
    url:'../controller/ctrlSelect.php',
    type:'POST',
    data:{listar:'especialidad'}
  }).done(function(resp){
    console.log(resp);
    var data = JSON.parse(resp);
    var cadena="";
    if (data.length>0) {
      cadena +="<option value=''>-- Seleccione una Especialidad --</option>"
      $("#em").html(cadena);
      for (var i=0; i<data.length; i++){
        cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
      }
        $("#em").html(cadena);
      var idEspecialidad = $('#em').val();
      listarDoctor(idEspecialidad);
    }else{
        cadena +="<option value=''>-- Seleccione una Especialidad --</option>";
        $("#em").html(cadena);
      }
  })
}

function listarFamiliar(idUsuario, nameUsuario){
  console.log("hola");
  $.ajax({
    url:'../controller/ctrlSelect.php',
    type:'POST',
    data:{listar:'familiar',idPaciente:idUsuario}
  }).done(function(resp){
    console.log("Termina función");
    console.log(resp);
    var data = JSON.parse(resp);
    var cadena="";
    if (data.length>0) {
      console.log("Parte true");
      cadena +="<option value=''>" + nameUsuario + "</option>"
      $("#idPerfil").html(cadena);
      for (var i=0; i<data.length; i++){
        cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
      }
        $("#idPerfil").html(cadena);
    }else{
      console.log("Hubo Error");
      cadena +="<option value=''>" + nameUsuario + "</option>"
        $("#idPerfil").html(cadena);
      }
  })
}

function listarDatosFamiliar(idPerfil, idUsuario){
  $.ajax({
    url:'../controller/ctrlSelect.php',
    type:'POST',
    data:{listar:'familiarDatos',idPerfil:idPerfil, idPaciente:idUsuario}
  }).done(function (resp) {
    console.log("listarDatos");
    console.log(resp);
    let data = JSON.parse(resp);
    console.log(data);
    document.getElementById("pe").value = data[0][2];
    document.getElementById("al").value = data[0][3];
    document.getElementById("fn").value = data[0][4];
    document.getElementById("enfermedades").value = data[0][7];


    
    
    
  })
}

function listarDoctor(idEspecialidad){
  $.ajax({
    url:'../controller/ctrlSelect.php',
    type:'POST',
    data:{listar:'doctor',idEspecialidad:idEspecialidad}
  }).done(function(resp){
    console.log(resp);
    var data = JSON.parse(resp);
    var cadena="";
    if (data.length>0) {
      cadena +="<option value=''>-- Seleccione un Doctor --</option>"
      $("#doctor").html(cadena);
      for (var i=0; i<data.length; i++){
        if (data[i][2] == "femenino") {
          cadena +="<option value='"+data[i][0]+"'>Dra. "+data[i][1]+"</option>";
          $("#doctores").html(cadena);
        }else{
          cadena +="<option value='"+data[i][0]+"'>Dr. "+data[i][1]+"</option>";
          $("#doctores").html(cadena);
        }
      }
    }else{
        cadena +="<option value=''>-- Seleccione un Doctor --</option>";
        $("#doctores").html(cadena);
      }
  })
}


