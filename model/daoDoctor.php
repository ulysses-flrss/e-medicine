<?php 
    require_once "../model/classConexion.php";

    class daoDoctor {
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
    }

?>