<?php
  require_once 'classConexion.php';
  class daoCita{
    public function insertar($cita){
      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "INSERT INTO citas (idPaciente, peso, altura, fechaNacimiento, fechaCreacion, especialidadM, doctor, fechaCita, horaCita, enfermedades, razonCita) VALUES (:idPaciente, :peso, :altura, :fechaNac, :fechaCreacion, :especialidadM, :doctor, :fechaCita, :horaCita, :enfermedades, :razonCita)";
      try{
        // $msgsql = "";
        // foreach ($cita as $citas) {
        //   $msgsql += $citas . ", ";
        // }
        //return $sql;
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

    public function listadoCitas($idDoctor) {
      $cn = new Conexion;
      $dbh = $cn->getConexion();
      $sql = "SELECT citas.idPaciente,  CONCAT(nombre, ' ', apellido) AS nombre, fechaCita, horaCita, enfermedades, razonCita FROM citas INNER JOIN pacientes ON pacientes.idPaciente = citas.idPaciente WHERE doctor=:idDoctor  ORDER BY fechaCita DESC ";
  
      try {
          $stmt = $dbh->prepare($sql);
          $stmt->bindParam(':idDoctor', $idDoctor);
          $stmt->execute();
          $cita = $stmt->fetchAll();
          return $cita;
      } catch (Exception $e) {
          echo $e->getMessage();
      }
  }

    public function listarPaciente($idPaciente){
      $cn = new Conexion;
      $dbh = $cn->getConexion();
      $sql = "SELECT peso, altura, fechaNacimiento FROM pacientes WHERE idPaciente=:idPaciente";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':idPaciente', $idPaciente);
      $stmt->execute();
      $resultado = $stmt->fetchAll();
      $especialidades[] = $resultado;
      return $resultado;
    }

    public function listadoCitasPaciente($idPaciente) {
      $cn = new Conexion;
      $dbh = $cn->getConexion();
      $sql = "SELECT CONCAT(doctores.nombreDoctor, ' ', doctores.apellidoDoctor) AS nomDoc, citas.especialidadM, fechaCita, horaCita, razonCita FROM citas INNER JOIN doctores ON doctores.idDoctor = citas.doctor WHERE idPaciente = :idPaciente ORDER BY fechaCita DESC ";
  
      try {
          $stmt = $dbh->prepare($sql);
          $stmt->bindParam(':idPaciente', $idPaciente);
          $stmt->execute();
          $cita = $stmt->fetchAll();
          return $cita;
      } catch (Exception $e) {
          echo $e->getMessage();
      }
  }

  }
?>