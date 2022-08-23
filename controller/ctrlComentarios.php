<?php
  session_start();
  require_once 'ctrlUsuario.php';
  require_once '../model/classComentario.php';

  $idPaciente = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
  $nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
  $mensaje = isset($_POST['mensaje'])?$_POST['mensaje']:"";
  $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";

  $_SESSION['codUsuario'] = $idPaciente;
  if ($accion == "") {
    require_once '../view/viewComentarios.php';
  }

  if ($accion == "Publicar") {
    $comentario = new Comentario();
    $comentario->publicar($idPaciente,$mensaje);
    $mensaje = "Querido Usuario, su comentario a sido publicado con éxito.";
    echo "<script>alert('".$mensaje."')</script>"; //MISION: SUSTITUIR EL ALERT POR UNA VENTANA MODAL.
    echo "<body style='background-color:#daffec;'><a href='../controller/ctrlComentarios.php?idUsuario=".$idPaciente."' style='text-decoration:none;color:black;font-size:1.5rem;font-weight:bold;'>Volver a la Página Anterior</a></body>";
  }
?>