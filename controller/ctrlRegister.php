<?php
  $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
  $idDoctor = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";

  $nombreDoctor = isset($_POST['nom'])?$_POST['nom']:"";
  $apellidoDoctor = isset($_POST['ape'])?$_POST['ape']:"";
  $fechaNac = isset($_POST['fn'])?$_POST['fn']:"";
  $genero = isset($_POST['gen'])?$_POST['gen']:"";
  $em = isset($_POST['em'])?$_POST['em']:"";
  $password = isset($_POST['pass'])?$_POST['pass']:"";
  $telefono = isset($_POST['tel'])?$_POST['tel']:"";
  $correo = isset($_POST['mail'])?$_POST['mail']:"";
  $eMail = isset($_POST['email'])?$_POST['email']:"";
  $dui = isset($_POST['dui'])?$_POST['dui']:"";

  if ($accion == "registrarUserD") {
    require_once "../model/classDoctor.php";
    require_once "../model/daoDoctor.php";
    require_once "../model/DaoPaciente.php";

    $dao = new daoDoctor();
  //  $duiVal = $dao->validarDui($dui);

   $cod = $dao->getCodigo();
   $doctor = new Doctor($cod, $nombreDoctor, $apellidoDoctor, $fechaNac, $genero, $em, $eMail, $password, $telefono, $dui);
   $dao->insertar($doctor);
   $r = $doctor->idDoctor;

  echo json_encode($r);

  }
?>