<?php
  session_start();
  require_once('conexion.php');

  $puntaje = $_POST['puntuacion'];
  $comentario = $_POST['comentario'];
  $codPaciente = $_SESSION['codUsuario'];

  $resultado = mysqli_query($conexion, "INSERT INTO rate(paciente, rate, comentarioRate) VALUES ('$codPaciente', '$puntaje','$comentario')");

  if($resultado){
    echo "Fue enviado con éxito";
    echo "<br/> <a href='index.php'>volver</a>";
  } else{
    echo "ERROR";
  }

  mysqli_close($conexion);
?>