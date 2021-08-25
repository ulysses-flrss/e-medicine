<?php
require_once("../model/classConexion.php");
require_once("../model/classPaciente.php");


    class DaoPaciente {
        public function insertar($paciente) {
            $cn = new Conexion;
            $dbh = $cn->getConexion();
            $sql = "INSERT INTO paciente (nombre, peso, altura, fechaNac, genero, municipio, email, password1) VALUES (:nombre, :peso, :altura, :fechaNac, :genero, :municipio, :email, :password1)";

            try {
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':nombre',$paciente->nombre);
                $stmt->bindParam(':peso',$paciente->peso);
                $stmt->bindParam(':altura',$paciente->altura);
                $stmt->bindParam(':fechaNac',$paciente->fechaNac);
                $stmt->bindParam(':genero',$paciente->genero);
                $stmt->bindParam(':municipio',$paciente->municipio);
                $stmt->bindParam(':email',$email->email);
                $stmt->bindParam(':password1',$password1->password1);
                $stmt->execute();

                echo "<a href = '../view/main-page.pgp'>GUARDADO EXITOSAMENTE</a>";

            } catch (PDOException $e) {
                echo "ERROR:" . $e->getMessage();
            }
        }}
?>