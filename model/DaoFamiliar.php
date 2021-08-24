<?php
require_once("../model/classConexion.php");


    class DaoFamiliar {
        public function insertar($familiar) {
            
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $sql = "INSERT INTO familiar(nombre, peso, altura, fechaNac, genero, municipio, enfermedades) VALUES (:nombre, :peso, :altura, :fechaNac, :genero, :municipio, :enfermedades)";

            try {
                $stmt = $dbh->prepare($sql);
    
                // $stmt->bindParam(':nombre',$familiar->nombre);
                // $stmt->bindParam(':peso',$familiar->peso);
                // $stmt->bindParam(':altura',$familiar->altura);
                // $stmt->bindParam(':fechaNac',$familiar->fechaNac);
                // $stmt->bindParam(':genero',$familiar->genero);
                // $stmt->bindParam(':municipio',$familiar->municipio);
                // $stmt->bindParam(':enfermedades',$familiar->enfermedades);
                $stmt->execute((array) $familiar);

                echo "<a href = '../view/perfilFamiliares.php'>GUARDADO EXITOSAMENTE</a>";

            } catch (PDOException $e) {
                echo "ERROR:" . $e->getMessage();
            }
        }}
?>