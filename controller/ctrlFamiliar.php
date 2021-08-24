<?php 
 
$nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
$peso = isset($_POST['peso'])?$_POST['peso']:"";
$altura = isset($_POST['altura'])?$_POST['altura']:"";
$fechaNac = isset($_POST['fechaNac'])?$_POST['fechaNac']:"";
$genero = isset($_POST['genero'])?$_POST['genero']:"";
$municipio = isset($_POST['municipio'])?$_POST['municipio']:"";
$enfermedad = isset($_POST['enfermedad'])?$_POST['enfermedad']:"";

if (!isset($nombre)) {
    require_once ("../view/perfilFamiliares-form.php");
} else {
    require_once("../model/classFamiliares.php");
    require_once("../model/DaoFamiliar.php");
    require_once("../model/classConexion.php");

    $dao = new DaoFamiliar;
    
    $familiar = new Familiar($nombre, $peso, $altura, $fechaNac, $genero, $municipio, $enfermedad);
    
    $dao->insertar($familiar);
    
}



?>