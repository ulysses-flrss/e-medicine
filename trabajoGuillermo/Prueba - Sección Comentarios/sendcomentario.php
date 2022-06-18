<?php  

  require_once("conexion.php");

  session_start();

  $mensaje = $_POST['mensaje'];

  $usuario = $_SESSION['codUsuario'];

  //código para limpiar cualquier variable de cualquier posbile código malicioso
  $comentario = mysqli_real_escape_string($conexion, $mensaje);

  $resultado = mysqli_query($conexion, "INSERT INTO comentarios(paciente, comentario) VALUES('$usuario','$mensaje')");

  if($resultado){
    echo "comentario enviado con éxito";
    echo "<br/><br/><a href='comentarios.php'>regresar a la página anterior</a>";
  } else{
    echo "ERROR";
  }

  mysqli_close($conexion);

?>