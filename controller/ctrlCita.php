<?php
  session_start();
  $codUsuario = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
  $perfil = isset($_POST['perfil'])?$_POST['perfil']:"";
  $peso = isset($_POST['pe'])?$_POST['pe']:"";
  $altura = isset($_POST['al'])?$_POST['al']:"";
  $fechaNac = isset($_POST['fn'])?$_POST['fn']:"";
  $especialidadM = isset($_POST['em'])?$_POST['em']:"";
  $doctor = isset($_POST['doctor'])?$_POST['doctor']:"";
  $fechaCita = isset($_POST['fc'])?$_POST['fc']:"";
  $horaCita = isset($_POST['hc'])?$_POST['hc']:"";
  $enfermedades = isset($_POST['enfermedades'])?$_POST['enfermedades']:"";
  $razonCita = isset($_POST['razon'])?$_POST['razon']:"";
  $accion = isset($_POST['accion'])?$_POST['accion']:"";
  $activador = isset($_POST['activador'])?$_POST['activador']:"";
  $_SESSION['codUsuario'] = $codUsuario;

  if ($accion == "") {
    require_once '../view/viewCita.php';
  }

  if ($accion == "programar cita") {
    require_once '../model/classCita.php';
    require_once '../model/daoCita.php';

    $cita = new Cita($codUsuario,$peso,$altura,$fechaNac,$especialidadM,$doctor,$fechaCita,$horaCita,$enfermedades,$razonCita);

    $dao = new daoCita();

    $dao->insertar($cita);

    $mensaje = "Su cita ha sido registrada con éxito";
    echo "<script>alert('".$mensaje."')";
    echo "<body style='background-color:#daffec;'><a href='../controller/ctrlPaciente.php?idUsuario='".$codUsuario."></a></body";
  }
?>