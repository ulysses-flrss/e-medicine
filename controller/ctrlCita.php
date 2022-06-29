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

  if ($accion == "programarCita") {
    require_once '../model/classCita.php';
    require_once '../model/daoCita.php';

    if ($peso == "") {
      echo json_encode("Error. Debe ingresar su peso en libras.");
      return;
    }
    if ($altura == "") {
      echo json_encode("Error. Debe ingresar su altura en cm.");
      return;
    }
    if ($fechaNac == ""){
      echo json_encode("Error. Debe ingresar su fecha de nacimiento.");
      return;
    }
    if ($especialidadM == ""){
      echo json_encode("Error. Debe ingresar la especialidad médica para su cita.");
      return;
    }
    if ($doctor == ""){
      echo json_encode("Error. Debe ingresar el doctor para su cita.");
      return;
    }
    if ($fechaCita == "") {
      echo json_encode("Error. Debe ingresar la fecha para su cita.");
      return;
    }
    if ($horaCita == "") {
      echo json_encode("Error. Debe ingresar la hora de su cita.");
      return;
    }
    if ($razonCita == "") {
      echo json_encode("Error. Debe ingresar la razón de la cita médica y/o sus síntomas.");
      return;
    }

    $dao = new daoCita();

    $fecha = explode('/', $fechaCita);

    $fechaCita = $fecha[2] . '-' . $fecha[1] . '-' . $fecha[0];
    

    $citas = $dao->validarCita($doctor, $fechaCita, $horaCita);

    /*foreach ($citas as $cita) {
      if (($cita['horaCita'] == $horaCita) && ($cita['fechaCita'] == $fechaCita)) {
        $validacion = "copia";
      }
    }*/

    if ($citas == "copia") {
      $r = "El doctor ya tiene ocupado ese horario.";
      echo json_encode($r);
    }else{
      $citas = $dao->validarCitaFamiliar($doctor, $fechaCita, $horaCita);
      if ($citas == "copia") {
        $r = "El doctor ya tiene ocupado ese horario.";
        echo json_encode($r);
      }else{
        $cita = new Cita($perfil, $codUsuario,$peso,$altura,$fechaNac,$especialidadM,$doctor,$fechaCita,$horaCita,$enfermedades,$razonCita);

        $r = $dao->insertar($cita);
        echo json_encode($r);
      }
    }    
  }
?>