<?php
require_once("../model/classConexion.php");


    class DaoFamiliar {
        public function insertar($familiar) {
            
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $sql = "INSERT INTO familiar (nombre, peso, altura, fechaNac, genero, municipio, enfermedades) VALUES (:nombre, :peso, :altura, :fechaNac, :genero, :municipio, :enfermedades)";

            try {
                $stmt = $dbh->prepare($sql);
                $stmt->execute((array) $familiar);
                $rowAf = $stmt->rowCount();
                echo $rowAf . " ";

                echo "<a href = '../view/perfilFamiliares.php'>GUARDADO EXITOSAMENTE</a>";

            } catch (PDOException $e) {
                echo "ERROR:" . $e->getMessage();
            }
        }}
?>