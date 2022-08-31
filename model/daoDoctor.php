<?php 

    class daoDoctor {
        public function editarPerfil ($doctor) {

            $cn = new Conexion;
            $dbh = $cn->getConexion();

            

            $sql = "UPDATE doctores SET nombre=:nombre, apellido=:apellido, peso=:peso, altura=:altura, fechaNacimiento=:fechaNac, genero=:genero, municipio=:municipio, email=:email, password=:password WHERE iddoctor=:iddoctor";

            try{
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':nombre',$doctor->nombre);
                $stmt->bindParam(':apellido',$doctor->apellido);
                $stmt->bindParam(':peso',$doctor->peso);
                $stmt->bindParam(':altura',$doctor->altura);
                $stmt->bindParam(':fechaNac',$doctor->fechaNac);
                $stmt->bindParam(':genero',$doctor->genero);
                $stmt->bindParam(':municipio',$doctor->municipio);
                $stmt->bindParam(':email',$doctor->eMail);
                $stmt->bindParam(':password',$doctor->password);
                $stmt->bindParam(':iddoctor',$doctor->iddoctor);
                $stmt->execute();
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        }
    }

?>