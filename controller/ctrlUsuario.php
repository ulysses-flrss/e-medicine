<?php
  // Notificar todos los errores excepto E_NOTICE
  error_reporting(E_ALL ^ E_NOTICE);
    session_start();

  function username($idUsuario){
    require_once '../model/classConexion.php';
    
    if (isset($idUsuario)) {
      $idUsuario = $_SESSION['codUsuario'];

      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "SELECT idPaciente, CONCAT(nombre, ' ', apellido) FROM pacientes WHERE idPaciente=:idUsuario";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':idUsuario', $idUsuario);
      $stmt->execute();
      $resultado = $stmt->fetch();
      if ($resultado == true) {
        $dataUser = $resultado[0].'/'.$resultado[1].'/paciente';
        return $dataUser;
      }else{
        $sql = "SELECT idDoctor, CONCAT(nombreDoctor, ' ', apellidoDoctor) FROM doctores WHERE idDoctor=:idUsuario";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':idUsuario', $idUsuario);
        $stmt->execute();
        $resultado = $stmt->fetch();
        if ($resultado == true) {
          $dataUser = $resultado[0].'/'.$resultado[1].'/doctor';
          return $dataUser;
        }else{
          $sql = "SELECT idAdmin, CONCAT(nombreAdmin, ' ', apellidoAdmin) FROM admins WHERE idAdmin=:idUsuario";
          $stmt = $dbh->prepare($sql);
          $stmt->bindParam(':idUsuario', $idUsuario);
          $stmt->execute();
          $resultado = $stmt->fetch();
          if ($resultado == true) {
            $dataUser = $resultado[0].'/'.$resultado[1].'/admin';
            return $dataUser;
          }
        }//FIN IF RESULTADO DOCTOR
      }
    }else{
      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "SELECT idPaciente, CONCAT(nombre, ' ', apellido) FROM pacientes WHERE idPaciente=:idUsuario";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':idUsuario', $idUsuario);
      $stmt->execute();
      $resultado = $stmt->fetch();
      if ($resultado == true) {
        $dataUser = $resultado[0].'/'.$resultado[1].'/paciente';
        return $dataUser;
      }else{
          $sql = "SELECT idDoctor, CONCAT(nombreDoctor, ' ', apellidoDoctor) FROM doctores WHERE idDoctor=:idUsuario";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':idUsuario', $idUsuario);
        $stmt->execute();
        $resultado = $stmt->fetch();
        if ($resultado == true) {
          $dataUser = $resultado[0].'/'.$resultado[1].'/doctor';
          return $dataUser;
        }else{
          $sql = "SELECT idAdmin, CONCAT(nombreAdmin, ' ', apellidoAdmin) FROM admins WHERE idAdmin=:idUsuario";
          $stmt = $dbh->prepare($sql);
          $stmt->bindParam(':idUsuario', $idUsuario);
          $stmt->execute();
          $resultado = $stmt->fetch();
          if ($resultado == true) {
            $dataUser = $resultado[0].'/'.$resultado[1].'/admin';
            return $dataUser;
          }
        }//FIN IF RESULTADO DOCTOR
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