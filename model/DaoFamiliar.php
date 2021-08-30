<?php
require_once("../model/classConexion.php");


    class DaoFamiliar {
        public function insertar($familiar) {
            
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $sql = "INSERT INTO familiar (id, nombre, peso, altura, fechaNac, genero, municipio, enfermedades) VALUES (:id, :nombre, :peso, :altura, :fechaNac, :genero, :municipio, :enfermedades)";

            try {
                $stmt = $dbh->prepare($sql);
                $stmt->execute((array) $familiar);
                $rowAf = $stmt->rowCount();
                echo $rowAf . " ";

                echo "<a href = '../view/perfilFamiliares.php'>GUARDADO EXITOSAMENTE</a>";

            } catch (PDOException $e) {
                echo "ERROR:" . $e->getMessage();
            }
        }

        public function modificar($familiar){
            $cn = new Conexion();        
            $dbh = $cn->getConexion();
            $sql = "UPDATE familiar SET nombre=:nombre,  peso=:peso, altura=:altura, fechaNac=:fechaNac, genero=:genero, municipio=:municipio, enfermedades=:enfermedades";
            try{
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':nombre',$familiar->nombre);
                $stmt->bindParam(':peso',$familiar->peso);
                $stmt->bindParam(':altura',$familiar->altura);
                $stmt->bindParam(':fechaNac',$familiar->fechaNac);
                $stmt->bindParam(':genero',$familiar->genero);
                $stmt->bindParam(':municipio',$familiar->municipio);
                $stmt->bindParam(':enfermedades',$familiar->enfermedades);
                
    
                $stmt->execute();
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        } 

 

        
      


        public function eliminar($familiar){
            $cn = new Conexion;        
            $dbh = $cn->getConexion();
            $sql = "DELETE FROM familiar WHERE id=:id";

            try{
                $stmt = $dbh->prepare($sql);
               
                $stmt->execute();    
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        } 


        public function listadoFamiliar(){
            $sql = "SELECT id, nombre FROM familiar ORDER BY id";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $familiar = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $familiar;
        }

    public function mostrarFamiliar() {
        $sql = "SELECT * FROM familiar";
        $cn = new Conexion;
        $dbh = $cn->getConexion();
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $familiar = $stmt->fetch();
        return $familiar;


            
            
    

    }
    
    
    }
?>