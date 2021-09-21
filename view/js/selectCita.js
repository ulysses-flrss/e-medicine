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

function listaFamiliar(){
  "idUsuario" = document.getElementById('idUsuario').value;
  $.ajax({
    url:'../controller/ctrlSelect.php',
    type:'POST',
    data:{listar:'familiar',idUsuario:idUsuario}
  }).done(function(resp){
    console.log(resp);
    var data = JSON.parse(resp);
    var cadena="";
    if (data.length>0) {
      cadena +="<option value=''>-- Seleccione un Familiar --</option>"
      $("#prof").html(cadena);
      for (var i=0; i<data.length; i++){
        cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
      }
        $("#prof").html(cadena);
  
    }else{
        cadena +="<option value=''>-- Seleccione una Especialidad --</option>";
        $("#prof").html(cadena);
      }
  })  
}