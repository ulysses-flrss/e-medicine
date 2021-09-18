<?php
  // Notificar todos los errores excepto E_NOTICE
  error_reporting(E_ALL ^ E_NOTICE);
  session_start();
  $codUsuario = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
  $password = isset($_POST['password'])?$_POST['password']:"";
  $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
  $mensaje = isset($_SESSION['mensaje'])?$_SESSION['mensaje']:"";

  $_SESSION['codUsuario'] = $codUsuario;

  if ($accion == "" && $codUsuario == "") {
    require_once 'view/viewLogin.php';
  }
  if ($accion == "cambiarPass"){
    require_once '../view/viewCambiarPass.php';
  }
  if($accion == "crearCuenta"){
    require_once '../view/viewRegister.php';
  }
  if ($accion == "enviar"){
    //Comparar Datos Ingresados con Base de Datos
    require_once '../model/daoPaciente.php';

    $_SESSION['codUsuario'] = $codUsuario;
    $dao = new DaoPaciente;
    $usuario = $dao->identificarUsuario($codUsuario);
  }
  if ($accion == "verCod") {
    echo $codUsuario;
  }
?>