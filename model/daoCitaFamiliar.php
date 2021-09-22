<?php
  require_once 'classConexion.php';
  class daoCita{
    public function insertar($cita){
      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "INSERT INTO citasfamiliares (idPerfil, idPaciente, peso, altura, fechaNacimiento, fechaCreacion, especialidadM, doctor, fechaCita, horaCita, enfermedades, razonCita) VALUES (:idPerfil, :idPaciente, :peso, :altura, :fechaNac, :fechaCreacion, :especialidadM, :doctor, :fechaCita, :horaCita, :enfermedades, :razonCita)";
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

    public function validarCitaFamiliar($idDoctor, $fechaCita, $horaCita){
      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "SELECT fechaCita, horaCita FROM citasfamiliares WHERE doctor=:idDoctor";
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
      $sql = "SELECT idDoctor, CONCAT(nombreDoctor, ' ', apellidoDoctor), genero, vacaciones FROM doctores WHERE especialidadM=:idEspecialidad";
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
      $sql = "SELECT idPerfil, CONCAT(nombres, ' ', apellidos) FROM familiar WHERE idPaciente=:idUsuario";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':idUsuario', $idUsuario);
      $stmt->execute();
      $resultado = $stmt->fetchAll();
      $especialidades[] = $resultado;
      return $resultado;
    }

    
  }
?>