<?php 

$nombre = isset($_POST['nombre-F'])?$_POST['nombre-F']:"";
$peso = isset($_POST['peso-F'])?$_POST['peso-F']:"";
$altura = isset($_POST['altura-F'])?$_POST['altura-F']:"";
$fechaNac = isset($_POST['fechaNac-F'])?$_POST['fechaNac-F']:"";
$genero = isset($_POST['gender'])?$_POST['gender']:"";
$municipio = isset($_POST['municipio-F'])?$_POST['municipio-F']:"";
$enfermedades = isset($_POST['enfermedades-F'])?$_POST['enfermedades-F']:"";

if (!isset($nombre)) {
    require_once ("../view/perfilFamiliares-form.php");
} else {
    require_once("../model/classFamiliares.php");
    require_once("../model/DaoFamiliar.php");
    require_once("../model/classConexion.php");
    
    $familiar = new Familiar($nombre, $peso, $altura, $fechaNac, $genero, $municipio, $enfermedades);

    $dao = new DaoFamiliar;
    
    $dao->insertar($familiar);
    
}



?>