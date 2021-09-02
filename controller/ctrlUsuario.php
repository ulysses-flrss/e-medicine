<?php

  function username(){
    require_once '../model/classConexion.php';
    $idUsuario = $_SESSION['codUsuario'];

    $cn = new Conexion();
    $dbh = $cn->getConexion();
    $sql = "SELECT idPaciente, CONCAT(nombre, ' ', apellido) FROM pacientes WHERE idPaciente=:idUsuario";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':idUsuario', $idUsuario);
    $stmt->execute();
    $resultado = $stmt->fetch();
    if ($resultado == true) {
      $dataUser = $resultado[0].'/'.$resultado[1];
      return $dataUser;
    }else{
      $sql = "SELECT CONCAT(nombre, ' ', apellido) FROM doctores WHERE idDoctor=:idUsuario";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':idUsuario', $idUsuario);
      $stmt->execute();
      $resultado = $stmt->fetch();
      if (isset($resultado)) {
        $nombreUsuario = $resultado[0];
        return $nombreUsuario;
      }
    }
  }

  function mostrarPaciente($id){
    $sql = "SELECT * FROM pacientes WHERE idPaciente=:id";
    $cn = new Conexion();
    $dbh = $cn->getConexion();
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    $pacientes = $stmt->fetch();
    return $pacientes;
  }
?>