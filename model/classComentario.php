<?php
  require_once 'classConexion.php';

  class Comentario{
    public function publicar($idPaciente, $mensaje){
      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "INSERT INTO comentarios (idPaciente, mensaje) VALUES(:idPaciente, :mensaje)";
      try{
          $stmt = $dbh->prepare($sql);
          $stmt->bindParam(':idPaciente',$idPaciente);
          $stmt->bindParam(':mensaje',$mensaje);
          $stmt->execute();
      }catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
      }
    }//FIN PUBLICAR

    public function mostrarComentarios(){
      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "SELECT CONCAT(nombre, ' ', apellido) AS nombre, mensaje, DATE_FORMAT(fecha, '%H:%i %d/%m/%Y') AS fecha FROM comentarios INNER JOIN pacientes ON pacientes.idPaciente=comentarios.idPaciente ORDER BY idComentario DESC";
      $stmt = $dbh->prepare($sql);
      $stmt->execute();
      $resultado = $stmt->fetchAll();
      return $resultado;
    }//FIN MOSTRAR
  }
?>