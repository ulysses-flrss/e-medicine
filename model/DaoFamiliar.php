<?php
  // Notificar todos los errores excepto E_NOTICE
  error_reporting(E_ALL ^ E_NOTICE);
require_once("../model/classConexion.php");


    class DaoFamiliar {
        public function insertar($familiar) {
            
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $sql = "INSERT INTO familiar (idPerfil, idPaciente, nombres, apellidos, peso, altura, fechaNac, genero, municipio, enfermedades) VALUES (:idPerfil, :idPaciente, :nombre, :apellido, :peso, :altura, :fechaNac, :genero, :municipio, :enfermedades)";

            try {
                $stmt = $dbh->prepare($sql);
                //$stmt->execute((array) $familiar);
                
                if ($stmt->execute((array) $familiar)) {
                    return "OK";
                }else{
                    return "Error: se ha generado un error al crear el perfil";
                }

                /*echo $rowAf . "";
                $rowAf = $stmt->rowCount();
                echo "<a href = '../view/perfilFamiliares.php'>GUARDADO EXITOSAMENTE</a>";*/

            } catch (PDOException $e) {
                echo "ERROR:" . $e->getMessage();
            }
        }

        public function modificar($idPerfil, $nombre, $apellido, $peso, $altura, $municipio, $enfermedades){
            $cn = new Conexion();        
            $dbh = $cn->getConexion();
            $sql = "UPDATE familiar SET nombres=:nombre, apellidos=:apellido,  peso=:peso, altura=:altura, municipio=:municipio, enfermedades=:enfermedades WHERE idPerfil=:idPerfil";
            try{
                $stmt = $dbh->prepare($sql);

                $stmt->bindParam(':nombre',$nombre);
                $stmt->bindParam(':apellido',$apellido);
                $stmt->bindParam(':peso',$peso);
                $stmt->bindParam(':altura',$altura);
                $stmt->bindParam(':municipio',$municipio);
                $stmt->bindParam(':enfermedades',$enfermedades);
                $stmt->bindParam(':idPerfil', $idPerfil);
    
                if ($stmt->execute()) {
                    return "OK";
                }else{
                    return "Error: se ha generado un error al crear el perfil";
                }
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        } 

 
        public function eliminar($idPerfil){
            $cn = new Conexion;        
            $dbh = $cn->getConexion();
            $sql = "DELETE FROM familiar WHERE idPerfil=:idPerfil";

            try{
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':idPerfil',$idPerfil);
                if ($stmt->execute()) {
                    return "OK";
                }else{
                    return "ERROR: el perfil ya ha sido borrado.";
                }
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        }

        public function reasignarId($idPerfil){
            $cn = new Conexion;
            $dbh = $cn->getConexion();
            $sql = "SELECT idPerfil FROM familiar WHERE idPerfil>:idPerfil ORDER BY idPerfil";
            try{
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':idPerfil',$idPerfil);
                $stmt->execute();
                $codigos = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $codigos;
            }catch(PDOException $e){
                echo "ERROR: ".$e->getMessage();;
            }
        }

        public function actualizarId($newIdPerfil, $idPerfil){
            $cn = new Conexion;
            $dbh = $cn->getConexion();
            $sql = "UPDATE familiar SET idPerfil=:newIdPerfil WHERE idPerfil=:idPerfil";
            try{
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':newIdPerfil',$newIdPerfil);
                $stmt->bindParam(':idPerfil',$idPerfil);
                $stmt->execute();
            }catch(PDOException $e){
                echo "ERROR: ".$e->getMessage();;
            }
        }

        public function listadoFamiliar($idPaciente){
            $sql = "SELECT idPerfil, CONCAT(nombres, ' ', apellidos) AS nombre, peso, altura, municipio FROM familiar WHERE idPaciente=:idPaciente ORDER BY idPerfil;";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':idPaciente',$idPaciente);
            $stmt->execute();
            $familiar = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $familiar;
        }

        public function listadoFamiliarCompleto() {
            $cn = new Conexion;
            $dbh = $cn->getConexion();
            $sql = "SELECT idPerfil, nombres, apellidos FROM familiar ORDER BY idPerfil";
    
            try {
                $stmt = $dbh->prepare($sql);
                $stmt->execute();
                $paciente = $stmt->fetchAll();
                return $paciente;
            } catch (Exception $e) {
                $e->getMessage();
            }
            
        }

        public function mostrarFamiliar($idPerfil) {
            $sql = "SELECT idPerfil, idPaciente, nombres, apellidos, peso, altura, fechaNac, genero, municipio, enfermedades FROM familiar WHERE idPerfil=:idPerfil";
            $cn = new Conexion;
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':idPerfil', $idPerfil);
            $stmt->execute();
            $familiar = $stmt->fetch(PDO::FETCH_ASSOC);
            return $familiar;
        }

        public function obtenerIdPerfil($idPaciente){
            $cn = new Conexion();        
            $dbh = $cn->getConexion();
            $sql = "SELECT count(*) AS correlativo FROM familiar WHERE idPaciente=:idPaciente";
            $stmt=$dbh->prepare($sql);
            $stmt->bindParam(':idPaciente',$idPaciente);
            $stmt->execute();
            $row = $stmt->fetch();
            if(isset($row[0])){
                $c = $idPaciente . "-" .($row[0]+1);
                return $c;
            }else{
                $c = $idPaciente . "-1";
                return $c;
            }
        }
    }
?>