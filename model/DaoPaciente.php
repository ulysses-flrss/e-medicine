<?php
  // Notificar todos los errores excepto E_NOTICE
  error_reporting(E_ALL ^ E_NOTICE);
require_once 'classConexion.php';
class DaoPaciente{
    public function insertar($paciente){
        $cn = new Conexion();
        $dbh = $cn->getConexion();
        $sql = "INSERT INTO pacientes (idPaciente, nombre, apellido, peso, altura, fechaNacimiento, fechaIngreso, genero, municipio, correo, pass, telefono, DUI) VALUES (:idPaciente, :nombre, :apellido, :peso, :altura, :fechaNac, :fechaIng, :genero, :municipio, :eMail, :pass, :telefono, :dui)";
        try{
            $stmt = $dbh->prepare($sql);
            if ($stmt->execute((array) $paciente)){
                /*echo "<script>console.log('Entro al try')</script>";
                sleep(10);*/
                return "OK";
            }else{
                echo "<script>console.log('Entro al try')</script>";
                sleep(10);
                return "ERROR: Se ha generado un error inesperado al crear su cuenta.";
            }
        }catch (PDOException $e) {
            echo "<script>console.log('Entro al error')</script>";
            sleep(10);
            echo "Error: " . $e->getMessage();
        }
    }
    public function modificar($paciente){
        $cn = new Conexion();
        $dbh = $cn->getConexion();
        $sql = "UPDATE pacientes SET nombre=:nombre, apellido=:apellido, peso=:peso, altura=:altura, fechaNacimiento=:fechaNac, genero=:genero, municipio=:municipio, email=:email, password=:password WHERE idPaciente=:idPaciente";
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':nombre',$paciente->nombre);
            $stmt->bindParam(':apellido',$paciente->apellido);
            $stmt->bindParam(':peso',$paciente->peso);
            $stmt->bindParam(':altura',$paciente->altura);
            $stmt->bindParam(':fechaNac',$paciente->fechaNac);
            $stmt->bindParam(':genero',$paciente->genero);
            $stmt->bindParam(':municipio',$paciente->municipio);
            $stmt->bindParam(':email',$paciente->eMail);
            $stmt->bindParam(':password',$paciente->password);
            $stmt->bindParam(':idPaciente',$paciente->idPaciente);
            $stmt->execute();
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }
    public function eliminar($id){
        $cn = new Conexion();
        $dbh = $cn->getConexion();
        $sql = "DELETE FROM pacientes WHERE idPaciente=:idPaciente";
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':idPaciente',$id);
            $stmt->execute();
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }
    public function getCodigo(){
        $cn = new Conexion();
        $dbh = $cn->getConexion();
        $sql = "SELECT count(*) AS correlativo FROM pacientes WHERE idPaciente LIKE 'P-%'";
        $stmt=$dbh->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch();
        if(isset($row[0])){
            if ($row[0] < 9){
                $c = "P-0000" . ($row[0]+1);
                return $c;
            }elseif ($row[0] < 99){
                $c = "P-000" . ($row[0]+1);
                return $c;
            }elseif ($row[0] <   999) {
                $c = "P-00" . ($row[0]+1);
                return $c;
            }else{
                $c = "P-0" . ($row[0]+1);
                return $c;
            }
        }else{
            $c = "P-00001";
            return $c;
        }
    }

    public function listadoPacientes() {
        $cn = new Conexion;
        $dbh = $cn->getConexion();
        $sql = "SELECT idPaciente, nombre, apellido FROM pacientes ORDER BY idPaciente ";

        try {
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $paciente = $stmt->fetchAll();
            return $paciente;
        } catch (Exception $e) {
            $e->getMessage();
        }

    }

    public function listadoDoctores() {
        $cn = new Conexion;
        $dbh = $cn->getConexion();
        $sql = "SELECT idDoctor, nombreDoctor, apellidoDoctor, especialidadM FROM doctores ORDER BY idDoctor";

        try {
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $doctores = $stmt->fetchAll();
            return $doctores;
        } catch (Exception $e) {
            $e->getMessage();
        }

    }

    public function identificarUsuario($idUser, $passUser){
        //VERIFICANDO SI EL USERNAME Y PASSWORD ES DE UN PACIENTE YA REGISTRADO
        $conexion = new Conexion();
        $dbh = $conexion->getConexion();
        $sql = "SELECT idPaciente, CONCAT(nombre, '', apellido) AS 'Nombre Completo', pass  FROM pacientes WHERE idPaciente=:idUser OR DUI=:idUser";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':idUser', $idUser);
        $stmt->execute();
        $resultado = $stmt->fetch();
        if(isset($resultado[0])){
            $datos = "si;";
            if ($resultado[2] == $passUser) {
                $datos .= "si";
                $datos .=";paciente";
                $datos .= ";".$resultado[0];
                return $datos;
            }else{
                $datos .= "no";
                return $datos;
            }
        }else{ //VERIFICANDO SI ES DE UN DOCTOR YA REGISTRADO
            $sql = "SELECT idDoctor, CONCAT(nombreDoctor, ' ', apellidoDoctor), pass FROM doctores WHERE idDoctor=:idUser";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->execute();
            $resultado1 = $stmt->fetch();
            if(isset($resultado1[0])){
                $datos = "si;";
                if ($resultado1[2] == $passUser) {
                    $datos .= "si";
                    $datos .=";doctor";
                    $datos .= ";".$resultado1[0];
                    return $datos;
                }else{
                    $datos .= "no";
                    return $datos;
                }
            }else{ //VERIFICANDO SI ES DE UN ADMIN YA REGISTRADO
                $sql = "SELECT idAdmin, CONCAT(nombreAdmin, ' ', apellidoAdmin), pass FROM admins WHERE idAdmin=:idUser";
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':idUser', $idUser);
                $stmt->execute();
                $resultado2 = $stmt->fetch();
                if(isset($resultado2[0])){
                    $datos = "si;";
                    if ($resultado2[2] == $passUser) {
                        $datos .= "si";
                        $datos .=";admin";
                        $datos .= ";".$resultado2[0];
                        return $datos;
                    }else{
                        $datos .= "no";
                        return $datos;
                    }
                }else{
                    $datos = "no;no";
                    return $datos;
                }
            }
        }
    }

    public function cerrarSesion($idPaciente) {
        $conexion = new Conexion;
        $dbh = $conexion->getConexion();

        session_unset();
        return header("location:../index.php");
    }

    public function validarDui($dui){
        $conexion = new Conexion;
        $dbh = $conexion->getConexion();
        $sql = "SELECT DUI FROM pacientes";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $listDui = $stmt->fetchAll();
        foreach ($listDui as $listDuis) {
            if ($listDuis['DUI'] == $dui){
                $validacion = "copia";
                return $validacion;
            }
        }
    }
}
?>