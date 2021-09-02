<?php
  session_start();
  require_once 'ctrlUsuario.php';
  require_once '../model/classComentarios.php';
  //require_once '../model/daoComentarios.php';

  $codUsuario = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
  $nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
  $mensaje = isset($_POST['mensaje'])?$_POST['mensaje']:"";
  $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";

  $_SESSION['codUsuario'] = $codUsuario;

  if ($accion == "") {
    require_once '../view/viewComentarios.php';
  }

  if ($accion == "publicar") {
    $comentario = new Comentario($codUsuario, $nombre, $mensaje);
    
  }
?>