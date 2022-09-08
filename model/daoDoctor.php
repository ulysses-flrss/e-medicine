<?php
    require_once "../model/classConexion.php";

    class daoDoctor {
        public function insertar($doctor){
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $sql = "INSERT INTO doctores (idDoctor, nombreDoctor, apellidoDoctor, fechaNacDoctor, genero, especialidadM, correo, pass, telefono, DUI) VALUES (:idDoctor, :nombreDoctor, :apellidoDoctor, :fechaNacDoctor, :genero, :especialidadM, :eMail, :pass, :telefono, :dui)";
            try{
                $stmt = $dbh->prepare($sql);
                if ($stmt->execute((array) $doctor)){
                    /*echo "<script>console.log('Entro al try')</script>";
                    sleep(10);*/
                    return "OK";
                }else{
                    /*echo "<script>console.log('Entro al try')</script>";
                    sleep(10);*/
                    return "ERROR: Se ha generado un error inesperado al crear su cuenta.";
                }
            }catch (PDOException $e) {
                echo "<script>console.log('Entro al error')</script>";
                sleep(10);
                echo "Error: " . $e->getMessage();
            }
        }

        public function editarPerfil($idDoctor, $nombreDoctor, $apellidoDoctor, $telefono, $correo) {

            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $sql = "UPDATE doctores SET nombreDoctor=:nombreDoctor, apellidoDoctor=:apellidoDoctor, telefono=:telefono, correo=:correo WHERE idDoctor=:idDoctor";

            try{
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':nombreDoctor',$nombreDoctor);
                $stmt->bindParam(':apellidoDoctor',$apellidoDoctor);
                $stmt->bindParam(':telefono', $telefono);
                $stmt->bindParam(':correo',$correo);
                $stmt->bindParam(':idDoctor',$idDoctor);
                if ($stmt->execute()) {
                    return "OK";
                } else {
                    return "ERROR";
                }
            }catch(PDOException $e){
                echo  $e->getMessage() . $idDoctor.$nombreDoctor.$apellidoDoctor.$telefono.$correo;
            }
        }

        public function extraerDatos($idDoctor){
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $sql = "SELECT nombreDoctor, apellidoDoctor, telefono, correo FROM doctores WHERE idDoctor=:idDoctor";

            try {
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':idDoctor',$idDoctor);
                $stmt->execute();
                $datosDoc = $stmt->fetch();
                return $datosDoc;
            } catch (PDOException $e) {
                echo "ERROR: " . $e->getMessage();
            }
        }

        public function getCodigo(){
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $sql = "SELECT idDoctor FROM doctores WHERE idDoctor LIKE 'D-%' ORDER BY idDoctor DESC";
            $stmt=$dbh->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch();
            if(isset($row[0])){
                $division = explode('-', $row[0]);
                if ($division[1] > 0 && $division[1] < 9){
                    $c = "D-0000" . ($division[1]+1);
                    return $c;
                }elseif ($division[1] < 99){
                    $c = "D-000" . ($division[1]+1);
                    return $c;
                }elseif ($division[1] < 999) {
                    $c = "D-00" . ($division[1]+1);
                    return $c;
                }else{
                    $c = "D-0" . ($division[1]+1);
                    return $c;
                }
            }else{
                $c = "D-00001";
                return $c;
            }
        }
        public function eliminar($id){
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $sql = "DELETE FROM doctores WHERE idDoctor = :idDoctor";
            try{
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':idDoctor',$id);
                if ($stmt->execute()){
                    return "OK";
                }else{
                    return "Ha ocurrido un error inesperado al eliminar la cuenta.";
                }
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        }
        public function eliminarCitas($idDoctor){
            $cn = new Conexion;
            $dbh = $cn->getConexion();
            $sql = "DELETE FROM citasfamiliares WHERE idDoctor=:idDoctor";

            try{
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':idDoctor',$idDoctor);
                if ($stmt->execute()) {
                    $sql = "DELETE FROM citas WHERE idDoctor=:idDoctor";
                    $stmt = $dbh->prepare($sql);
                    $stmt->bindParam(':idDoctor',$idDoctor);
                    if ($stmt->execute()) {
                        return "OK";
                    }else{
                        return "ERROR: el doctor ya ha sido borrado.";
                    }
                }else{
                    return "ERROR: el doctor ya ha sido borrado.";
                }
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        }
    }

?>