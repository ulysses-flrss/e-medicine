<?php
  require_once 'classConexion.php';
  class daoCita{
    public function insertar($cita){
      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "INSERT INTO citas (Paciente, peso, altura, fechaNacimiento, especialidadM, doctor, fechaCita, horaCita, enfermedades, razonCita) VALUES (:idPaciente, :peso, :altura, :fechaNac, :especialidadM, :doctor, :fechaCita, :horaCita, :enfermedades, :razonCita)";
      try{
        $stmt = $dbh->prepare($sql);
        $stmt->execute((array) $cita);
        $rowAf = $stmt->rowCount();
        return $rowAf;
      }catch (PDOException $e){
        echo "ERROR: " . $e->getMessage();
      }
    }

    function listarEspecialidad(){
      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "SELECT idEspecialidad, nombreEsp FROM especialidades";
      $stmt = $dbh->prepare($sql);
      $stmt->execute();
      $resultado = $stmt->fetchAll();
      $especialidades[] = $resultado;
      return $resultado;
    }

    function listarDoctor($idEspecialidad){
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
  }
?>