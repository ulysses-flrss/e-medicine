

<?php 

'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>';

$nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
$peso = isset($_POST['peso'])?$_POST['peso']:"";
$altura = isset($_POST['altura'])?$_POST['altura']:"";
$fechaNac = isset($_POST['fechaNac'])?$_POST['fechaNac']:"";
$genero = isset($_POST['genero'])?$_POST['genero']:"";
$municipio = isset($_POST['municipio'])?$_POST['municipio']:"";
$enfermedades = isset($_POST['enfermedades'])?$_POST['enfermedades']:"";

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