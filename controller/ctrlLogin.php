<?php
  // Notificar todos los errores excepto E_NOTICE
  error_reporting(E_ALL ^ E_NOTICE);
  session_start();
  $codUsuario = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
  $password = isset($_POST['password'])?$_POST['password']:"";
  $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
  $mensaje = isset($_SESSION['mensaje'])?$_SESSION['mensaje']:"";

  $pass = $password; //encriptar pass enviada por el usuario para compararla con la pass de la BD

  $_SESSION['codUsuario'] = $codUsuario;

  if ($accion == "" && $codUsuario == "") {
    require_once 'view/viewWelcomePage.php';
  }
  if ($accion == "cambiarPass"){
    require_once '../view/viewCambiarPass.php';
  }
  if($accion == "crearCuenta"){
    require_once '../view/viewRegister.php';
  }
  if ($accion == "iniciarSesion"){
    //Comparar Datos Ingresados con Base de Datos
    require_once '../model/daoPaciente.php';

    $_SESSION['codUsuario'] = $codUsuario;
    $dao = new DaoPaciente;
    $usuario = $dao->identificarUsuario($codUsuario, $pass);
    $datos = explode(";", $usuario);
    /*echo "<script>console.log('espacio 0: ".$user[0]."')
    console.log('espacio 1: ".$user[1]."')</script>";*/
    if ($datos[0] == "si") {
      if ($datos[1] == "no") {
        echo json_encode("ERROR. La contraseña ingresada es incorrecta.");
        return;
      }else{
        echo json_encode("OK");
      }
    }else{
      echo json_encode("ERROR. El usuario ingresado es incorrecto.");
      return;
    }
  }
  if ($accion == "verCod") {
    echo $codUsuario;
  }
?>