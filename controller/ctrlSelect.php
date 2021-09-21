<?php

  $idUsuario = isset($_POST['idUsuario'])?$_POST['idUsuario']:"";
   
  require_once '../model/daoCita.php';
  $listar = isset($_POST['listar'])?$_POST['listar']:"";
  $idEspecialidad = isset($_POST['idEspecialidad'])?$_POST['idEspecialidad']:"";
  
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

  if ($listar == "familiar") {
    $dao = new daoCita();
    $consulta = $dao->listarFamiliar($idUsuario);
    echo json_encode($consulta); 
  }
?>