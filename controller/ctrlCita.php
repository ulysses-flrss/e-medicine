<?php
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

  if ($accion == "") {
    require_once '../view/viewCita.php';
  }

  if ($accion == "programar cita") {
    
  }
?>