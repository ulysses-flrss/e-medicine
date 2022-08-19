<?php
  require_once '../model/daoCitaFamiliar.php';
  $listar = isset($_POST['listar'])?$_POST['listar']:"";
  $idEspecialidad = isset($_POST['idEspecialidad'])?$_POST['idEspecialidad']:"";
  $idUsuario = isset($_POST['idPaciente'])?$_POST['idPaciente']:"";
  $familiarDatos = isset($_POST['idPerfil'])?$_POST['idPerfil']:"";

  if ($listar == "especialidad") {
    $dao = new daoCita();
    $consulta = $dao->listarEspecialidad();
    echo json_encode($consulta);
  }

  if ($listar == "doctor") {
    $dao = new daoCita();
    $consulta = $dao->listarDoctor($idEspecialidad);
    echo json_encode($consulta);
  }

  if ($listar == "familiar"){
    $dao = new daoCita();
    $idFamiliar = "";
    $consulta = $dao->listarFamiliar($idUsuario, $idFamiliar);
    echo json_encode($consulta);
  }

  if ($listar == "familiarDatos"){
    $dao = new daoCita();
    $idUsuario = "";
    $consulta = $dao->listarFamiliar($idUsuario, $familiarDatos);
    echo json_encode($consulta);
  }
?>