<?php

require_once("../model/classPaciente.php");
require_once("../model/DaoPaciente.php");
require_once("../model/classConexion.php");

$nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
$altura = isset($_POST['altura'])?$_POST['altura']:"";
$peso = isset($_POST['peso'])?$_POST['peso']:"";
$fechaNac = isset($_POST['fechaNac'])?$_POST['fechaNac']:"";
$genero = isset($_POST['genero'])?$_POST['genero']:"";
$municipio = isset($_POST['municipio'])?$_POST['municipio']:"";
$email = isset($_POST['email'])?$_POST['email']:""; 
$password1 = isset($_POST['password'])? $_POST['password']:"";

if (!isset($nombre)) {
    require ("../view/register.php");
} else {
    $dao = new DaoPaciente;
    
    $familiar = new Paciente($codigo, $nombre, $peso, $altura, $fechaNac, $genero, $municipio, $email, $password1);
    
    $dao->insertar($paciente);
    
}



?>