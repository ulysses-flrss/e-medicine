<?php
  // Notificar todos los errores excepto E_NOTICE
  error_reporting(E_ALL ^ E_NOTICE);
  session_start();

  $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
  $cod = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
  $nombre = isset($_REQUEST['nom'])?$_REQUEST['nom']:"";
  $apellido = isset($_REQUEST['ape'])?$_REQUEST['ape']:"";
  $peso = isset($_REQUEST['pe'])?$_REQUEST['pe']:"";
  $altura = isset($_REQUEST['al'])?$_REQUEST['al']:"";
  $fechaNac = isset($_REQUEST['fn'])?$_REQUEST['fn']:"";
  $genero = isset($_REQUEST['gen'])?$_REQUEST['gen']:"";
  $municipio = isset($_REQUEST['muni'])?$_REQUEST['muni']:"";
  $eMail = isset($_REQUEST['email'])?$_REQUEST['email']:"";
  $password = isset($_REQUEST['pass'])?$_REQUEST['pass']:"";
  $telefono = isset($_REQUEST['tel'])?$_REQUEST['tel']:"";
  $duiP = isset($_REQUEST['dui'])?$_REQUEST['dui']:"";

  if($accion=="eliminar"){
      require_once '../model/daoPaciente.php';
      $dao = new DaoPaciente();
      $dao->eliminarCitas($cod);
      $r = $dao->eliminar($cod);
      echo json_encode($r);
  }

  if ($accion == "registrarUser") {
    require_once "../model/classPaciente.php";
    require_once "../model/DaoPaciente.php";
    $dao = new DaoPaciente();
    $cod = $dao->getCodigo();
    $paciente = new Paciente($cod, $nombre, $apellido, $peso, $altura, $fechaNac, $genero, $municipio, $eMail, $password, $telefono, $duiP);
    $dao -> insertar($paciente);
    $r = $paciente->idPaciente;
    echo json_encode($r);
  }

  function username($idUsuario){
    require_once '../model/classConexion.php';
    if (isset($idUsuario)) {
      $idUsuario = $_SESSION['codUsuario'];

      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "SELECT idPaciente, CONCAT(nombre, ' ', apellido), peso, altura, fechaNacimiento, municipio FROM pacientes WHERE idPaciente=:idUsuario";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':idUsuario', $idUsuario);
      $stmt->execute();
      $resultado = $stmt->fetch();
      if ($resultado == true) {
        $dataUser = $resultado[0].'/'.$resultado[1].'/paciente'.'/'.$resultado[2].'/'.$resultado[3].'/'.$resultado[4].'/'.$resultado[5];
        return $dataUser;
      }else{
        $sql = "SELECT idDoctor, CONCAT(nombreDoctor, ' ', apellidoDoctor), correo , telefono, genero FROM doctores WHERE idDoctor=:idUsuario";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':idUsuario', $idUsuario);
        $stmt->execute();
        $resultado = $stmt->fetch();
        if ($resultado == true) {
          $dataUser = $resultado[0].'/'.$resultado[1].'/doctor' .'/'. $resultado[2] .'/'. $resultado[3] . '/' . $resultado[4];
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
          }else{
            $dataUser = 'noRegistrado/es/invitado';
            return $dataUser;
          }
        }//FIN IF RESULTADO DOCTOR
      }
    }else{
      $cn = new Conexion();
      $dbh = $cn->getConexion();
      $sql = "SELECT idPaciente, CONCAT(nombre, ' ', apellido) , peso, altura, fechaNacimiento, municipio FROM pacientes WHERE idPaciente=:idUsuario";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':idUsuario', $idUsuario);
      $stmt->execute();
      $resultado = $stmt->fetch();
      if ($resultado == true) {
        $dataUser = $resultado[0].'/'.$resultado[1].'/paciente'.'/'.$resultado[2].'/'.$resultado[3].'/'.$resultado[4].'/'.$resultado[5];
        return $dataUser;
      }else{
          $sql = "SELECT idDoctor, CONCAT(nombreDoctor, ' ', apellidoDoctor), genero FROM doctores WHERE idDoctor=:idUsuario";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':idUsuario', $idUsuario);
        $stmt->execute();
        $resultado = $stmt->fetch();
        if ($resultado == true) {
          $dataUser = $resultado[0].'/'.$resultado[1].'/doctor'.'/'.$resultado[2];
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
          }else{
            $dataUser = 'noRegistrado/es/invitado';
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