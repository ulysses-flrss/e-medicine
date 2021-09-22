<?php
  require_once 'classConexion.php';
  class daoCitaFamiliar{
    public function insertar($cita){
      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "INSERT INTO citas (paciente, peso, altura, fechaNacimiento, fechaCreacion, especialidadM, doctor, fechaCita, horaCita, enfermedades, razonCita) VALUES (:idPaciente, :peso, :altura, :fechaNac, :fechaCreacion, :especialidadM, :doctor, :fechaCita, :horaCita, :enfermedades, :razonCita)";
      try{
        $stmt = $dbh->prepare($sql);
        if ($stmt->execute((array) $cita)) {
          return "OK";
        }else{
          return "Error: se ha generado un error al guardar la información";
        }
        /*$rowAf = $stmt->rowCount();
        return $rowAf;*/
      }catch (PDOException $e){
        echo "ERROR: " . $e->getMessage();
      }
    }

    public function validarCita($idDoctor, $fechaCita, $horaCita){
      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "SELECT fechaCita, horaCita FROM citas WHERE doctor=:idDoctor";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':idDoctor', $idDoctor);
      $stmt->execute();
      $citas = $stmt->fetchAll();
      foreach ($citas as $cita) {
        if (($cita['horaCita'] == $horaCita) && ($cita['fechaCita'] == $fechaCita)) {
          $validacion = "copia";
          return $validacion;
        }
      }
    }

    public function listarEspecialidad(){
      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "SELECT idEspecialidad, nombreEsp FROM especialidades";
      $stmt = $dbh->prepare($sql);
      $stmt->execute();
      $resultado = $stmt->fetchAll();
      $especialidades[] = $resultado;
      return $resultado;
    }

    public function listarDoctor($idEspecialidad){
      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "SELECT idDoctor, CONCAT(nombre, ' ', apellido), genero, vacaciones FROM doctores WHERE especialidadM=:idEspecialidad";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':idEspecialidad', $idEspecialidad);
      $stmt->execute();
      $resultado = $stmt->fetchAll();
      $especialidades[] = $resultado;
      return $resultado;
    }

    public function listarFamiliar($idUsuario){
      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "SELECT idPaciente, CONCAT(nombre, ' ', apellido) FROM familiar WHERE idPaciente=:idUsuario";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':idUsuario', $idUsuario);
      $stmt->execute();
      $resultado = $stmt->fetchAll();
      $especialidades[] = $resultado;
      return $resultado;
    }

    public function listadoCitasFamiliar() {
      $cn = new Conexion;
      $dbh = $cn->getConexion();
      $sql = "SELECT idPerfil,  Concat(nombre, ' ', apellido) AS nombre, fechaCita, horaCita, enfermedades, razonCita  FROM citasfamiliares INNER JOIN familiar ON familiar.idPerfil=citasfamiliares.idPerfil ORDER BY fechaCita DESC";

      try {
          $stmt = $dbh->prepare($sql);
          $stmt->execute();
          $citaFamiliar = $stmt->fetchAll();
          return $citaFamiliar;
      } catch (Exception $e) {
          $e->getMessage();
      }

    }
  }
?>