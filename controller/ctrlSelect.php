<?php
  require_once '../model/daoCitaFamiliar.php';
  require_once '../model/daoCita.php';
  $listar = isset($_POST['listar'])?$_POST['listar']:"";
  $idEspecialidad = isset($_POST['idEspecialidad'])?$_POST['idEspecialidad']:"";
  $idUsuario = isset($_POST['idPaciente'])?$_POST['idPaciente']:"";
  $familiarDatos = isset($_POST['idPerfil'])?$_POST['idPerfil']:"";

  if ($listar == "especialidad") {
    $dao = new daoCitaFamiliar();
    $consulta = $dao->listarEspecialidad();
    echo json_encode($consulta);
  }

  if ($listar == "doctor") {
    $dao = new daoCitaFamiliar();
    $consulta = $dao->listarDoctor($idEspecialidad);
    echo json_encode($consulta);
  }

  if ($listar == "familiar"){
    $dao = new daoCitaFamiliar();
    $idFamiliar = "";
    $consulta = $dao->listarFamiliar($idUsuario, $idFamiliar);
    echo json_encode($consulta);
  }

  if ($listar == "familiarDatos"){
    $dao = new daoCitaFamiliar();
    $idUsuario = "";
    $consulta = $dao->listarFamiliar($idUsuario, $familiarDatos);
    echo json_encode($consulta);
  }

  if ($listar == "pacienteDatos"){
    $dao = new daoCita();
    //$idUsuario = "";
    $consulta = $dao->listarPaciente($idUsuario);
    echo json_encode($consulta);
  }
?>