<?php
require_once("../model/classConexion.php");


    class DaoFamiliar {
        public function insertar($familiar) {
            
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $sql = "INSERT INTO familiar(id, nombre, peso, altura, fechaNac, genero, municipio, enfermedad) VALUES (:id, :nombre, :peso, :altura, :fechaNac, :genero, :municipio, :enfermedad)";

            try {
                $stmt = $dbh->prepare($sql);
    
                $stmt->bindParam(':id', $id, PDO::PARAM_INT, 11);
                $stmt->bindParam(':nombre',$familiar->nombre);
                $stmt->bindParam(':peso',$familiar->peso);
                $stmt->bindParam(':altura',$familiar->altura);
                $stmt->bindParam(':fechaNac',$familiar->fechaNac);
                $stmt->bindParam(':genero',$familiar->genero);
                $stmt->bindParam(':municipio',$familiar->municipio);
                $stmt->bindParam(':enfermedad',$familiar->enfermedad);
                $stmt->execute();
                $rowAf = $stmt->rowCount();
                echo $rowAf . " ";

                echo "<a href = '../view/perfilFamiliares.php'>GUARDADO EXITOSAMENTE</a>";

            } catch (PDOException $e) {
                echo "ERROR:" . $e->getMessage();
            }
        }}
?>