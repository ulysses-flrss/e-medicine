
<?php 
$nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
$peso = isset($_POST['peso'])?$_POST['peso']:"";
$altura = isset($_POST['altura'])?$_POST['altura']:"";
$fechaNac = isset($_POST['fechaNac'])?$_POST['fechaNac']:"";
$genero = isset($_POST['genero'])?$_POST['genero']:"";
$municipio = isset($_POST['municipio'])?$_POST['municipio']:"";
$enfermedades = isset($_POST['enfermedades'])?$_POST['enfermedades']:"";
$accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
$id = isset($_GET['id'])?$_GET['id']:"";


    require_once("../model/classFamiliares.php");
    require_once("../model/DaoFamiliar.php");
    require_once("../model/classConexion.php");
    

    $familiar = new Familiar($id, $nombre, $peso, $altura, $fechaNac, $genero, $municipio, $enfermedades);

    $dao = new DaoFamiliar;
    
    $dao->insertar($familiar);




if($accion=="eliminar"){
    require_once("../model/DaoFamiliar.php");
    $dao = new DaoFamiliar();
    $dao->eliminar($id);
    echo "<p>Registro Eliminado exitosamente...</p>";
    echo "<a href='../view/perfilFamiliares.php'>Regresar</a>";
}


if($accion=="modificar"){
    require_once '../model/DaoFamiliar.php';
    $dao = new DaoFamiliar();
    $familiar = $dao->mostrarFamiliar($id); 
    $html = '
    <!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<?php require_once("../view/plugins/default-head.php") ?>
<title>familia</title>
</head>
<body>

<div class="container">';

echo $html;
require_once("../view/plugins/menu-file.php");

echo '

<section class="form-container">
<form action="../controller/ctrlFamiliar.php" class="form-register" method="POST">
    
<div class="first-line">
    <label for="">Nombre: *</label>
    <input type="text" name="nombre" id="" placeholder="Ingrese su Nombre" value =' .$familiar['1'].' >
</div>
    
<div class="second-line">
    <div class="peso">
        <label for="">Peso(lb): *</label>
        <input type="text" name="peso" id="" placeholder="Peso en Libras" value= '.$familiar['2'].'  >
    </div>
    
    <div class="altura">
        <label for="">Altura(cm): *</label>
        <input type="text" name="altura" id="" placeholder="Altura en cm"value = '.$familiar['3'].' >
    </div>  
</div>
    

<div class="third-line">
    
    <div class="genre">
        <div class="masculino">
            <label for="masculino">Masculino</label>
            <input type="radio" name="genero" id="masculino" value="Masculino" >
        </div>
    
        
        <div class="female">
            <label for="femenino">Femenino</label>
            <input type="radio" name="genero" id="femenino" value="Femenino" >
        </div>

        
    </div>
    
    <div class="municipio">
        <label for="municipio">Municipio *</label>
        <select name="municipio" id="" required>
            <option value='.$familiar['6'].'>-- Actual:'.$familiar['6'].'</option>
            <option value="San Salvador">San Salvador</option>
            <option value="Aguilares">Aguilares</option>
            <option value="Apopa">Apopa</option>
            <option value="Ayutuxtepeque">Ayutuxtepeque</option>
            <option value="Ciudad Delgado">Ciudad Delgado</option>
            <option value="Cuscatancingo">Cuscatancingo</option>
            <option value="El Paisnal">El Paisnal</option>
            <option value="Guazapa">Guazapa</option>
            <option value="Ilopango">Ilopango</option>
            <option value="Mejicanos">Mejicanos</option>
            <option value="Nejapa">Nejapa</option>
            <option value="Panchimalco">Panchimalco</option>
            <option value="Rosario de Mora">Rosario de Mora</option>
            <option value="San Marcos">San Marcos</option>
            <option value="San Martin">San Martin</option>
            <option value="Santiago Texacuangos">Santiago Texacuangos</option>
            <option value="Santo Tomas">Santo Tomas</option>
            <option value="Soyapango">Soyapango</option>
            <option value="Tonacatepeque">Tonacatepeque</option>
        </select>
    </div>
</div>

<div class="fourth-line">
    <label for="">¿Tiene alguna Enfermedad o Alergia? Describalas (Si no tiene, omita este campo)</label>
</div>

<div class="fifth-line">
    <textarea name="enfermedades" id="textarea" cols="50" rows="1" maxlength="255">'.$familiar['7'].'</textarea>
</div>

    <div class="submit">
        <input type="submit" value="Modificar Perfil">
    </div>';    
    
    
}
if($accion == "modificar"){
    require_once '../model/classFamiliares.php';
    require_once '../model/DaoFamiliar.php';
    $dao = new DaoFamiliar();
    $familiar = new Familiar($id, $nombre, $peso, $altura, $fechaNac, $genero, $municipio, $enfermedades); 
    $dao->modificar($familiar);
    echo "<p>Registro modificado exitosamente...</p>";
    echo "<a href='../view/perfilFamiliares.php'>Regresar</a>";
}



?>