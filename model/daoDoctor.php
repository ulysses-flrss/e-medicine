<?php 
    require_once "../model/classConexion.php";

    class daoDoctor {
        public function editarPerfil ($idDoctor, $nombreCompleto, $telefono, $correo) {

            $cn = new Conexion;
            $dbh = $cn->getConexion();
            explode(" ", $nombreCompleto);

            $nombre = $nombreCompleto[0];
            $apellido = $nombreCompleto[1];

            $sql = "UPDATE doctores SET nombreDoctor=:nombreDoctor, apellidoDoctor=:apellidoDoctor, telefono=:telefono, correo=:correo WHERE idDoctor=:idDoctor";

            try{
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':nombreDoctor',$nombre);
                $stmt->bindParam(':apellidoDoctor',$apellido);
                $stmt->bindParam(':telefono', $telefono);
                $stmt->bindParam(':correo',$correo);
                $stmt->bindParam(':idDoctor',$idDoctor);
                $stmt->execute();
                echo "<script>alert('Correcto')</script>";
            }catch(PDOException $e){
                echo "<script>alert(". $e->getMessage() .")</script>";
            }
        }
    }

?>