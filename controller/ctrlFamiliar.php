<?php
  // Notificar todos los errores excepto E_NOTICE
  error_reporting(E_ALL ^ E_NOTICE);
  session_start();
  $idUsuario = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
  $nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
  $apellido = isset($_POST['apellido'])?$_POST['apellido']:"";
  $peso = isset($_POST['peso'])?$_POST['peso']:"";
  $altura = isset($_POST['altura'])?$_POST['altura']:"";
  $fechaNac = isset($_POST['fechaNac'])?$_POST['fechaNac']:"";
  $genero = isset($_POST['genero'])?$_POST['genero']:"";
  $municipio = isset($_POST['municipio'])?$_POST['municipio']:"";
  $enfermedades = isset($_POST['enfermedades'])?$_POST['enfermedades']:"";
  $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
  $idPerfil = isset($_REQUEST['idPerfil'])?$_REQUEST['idPerfil']:"";

  $_SESSION['idUsuario'] = $idUsuario;
    require_once("../model/classFamiliares.php");
    require_once("../model/DaoFamiliar.php");
    require_once("../model/classConexion.php");

if($accion == "crearPerfil") {
    if ($nombre == "") {
      echo json_encode("Error. Debe ingresar sus nombres.");
      return;
    }
    if ($apellido == "") {
      echo json_encode("Error. Debe ingresar sus apellidos.");
      return;
    }
    if ($peso == "") {
      echo json_encode("Error. Debe ingresar su peso en libras.");
      return;
    }
    if ($altura == "") {
      echo json_encode("Error. Debe ingresar su altura en cm.");
      return;
    }
    if ($fechaNac == "") {
      echo json_encode("Error. Debe ingresar su fecha de nacimiento.");
      return;
    }
    if ($genero == "") {
      echo json_encode("Error. Debe ingresar su genero.");
      return;
    }
    if ($municipio == "") {
      echo json_encode("Error. Debe ingresar el municipio donde vive.");
      return;
    }
    $dao = new DaoFamiliar;
    $c = $dao->obtenerIdPerfil($idUsuario);
    $familiar = new Familiar($c, $idUsuario, $nombre, $apellido, $peso, $altura, $fechaNac, $genero, $municipio, $enfermedades);
    $r = $dao->insertar($familiar);
    echo json_encode($r);
}


if($accion=="eliminar"){
    $dao = new DaoFamiliar();
    $dao->eliminarCitas($idPerfil);
    $r = $dao->eliminar($idPerfil, $idPaciente);
    $codigos = $dao->reasignarId($idPerfil);
    foreach ($codigos as $codigo) {
        $datos = explode('-', $codigo['idPerfil']);
        $num = $datos[2];
        $c = ($num-1);
        $newId = $idUsuario . '-' . $c;
        $dao->actualizarId($newId,$codigo['idPerfil']);
    }
    echo json_encode($r);

    /*echo "<p>Registro Eliminado exitosamente...</p>";
    echo "<a href='../view/perfilFamiliares.php'>Regresar</a>";*/
}

if($accion == "modificarPerfil"){
    require_once '../model/classFamiliares.php';
    require_once '../model/DaoFamiliar.php';

    if ($nombre == "") {
      echo json_encode("Error. Debe ingresar sus nombres.");
      return;
    }
    if ($apellido == "") {
      echo json_encode("Error. Debe ingresar sus apellidos.");
      return;
    }
    if ($peso == "") {
      echo json_encode("Error. Debe ingresar su peso en libras.");
      return;
    }
    if ($altura == "") {
      echo json_encode("Error. Debe ingresar su altura en cm.");
      return;
    }
    if ($fechaNac == "") {
      echo json_encode("Error. Debe ingresar su fecha de nacimiento.");
      return;
    }
    if ($genero == "") {
      echo json_encode("Error. Debe ingresar su genero.");
      return;
    }
    if ($municipio == "") {
      echo json_encode("Error. Debe ingresar el municipio donde vive.");
      return;
    }

    $dao = new DaoFamiliar();
    /*$familia = new Familiar($idPerfil, $idUsuario, $nombre, $apellido, $peso, $altura, $fechaNac, $genero, $municipio, $enfermedades);*/
    $r=$dao->modificar($idPerfil, $nombre, $apellido, $peso, $altura, $municipio, $enfermedades);
    echo json_encode($r);
}

if($accion=="modificar"){
    require_once '../model/DaoFamiliar.php';
    require_once("../view/plugins/funciones.php");
    links();
    $dao = new DaoFamiliar();
    $familiar = $dao->mostrarFamiliar($idPerfil); 
    $html = "
    <!DOCTYPE html>
<html lang='es'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' integrity='sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf' crossorigin='anonymous'>
<link rel = 'stylesheet' href='../view/css/form-familiares-style.css'>
<title>Familiar ".$familiar['nombres']." ".$familiar['apellidos']."</title>";



echo $html;
echo "</head>
<body class='body'>

<div class='contenedor'>

<div class='inicio-registro'>
            <img src='../assets/imgs/logoEMedicine.png' alt='' class='logo'>
            <h1 class='bienvenida-registro'>Modifica el perfil de ".$familiar['nombres']." ".$familiar['apellidos']."</h1>
        </div>

<section class='form-container'>

    <input type='hidden' name='idPaciente' value='".$familiar['idPaciente']."' id='idUsuario'>

    <input type='hidden' name='idPerfil' id='idPerfil' value = '" .$familiar['idPerfil']."'>
    
<div class='third-line'>
    <div class='nombres'>
    <label for=''>Nombres: *</label>
    <input type='text' name='nom' id='nom' placeholder='Ingrese sus Nombres' value ='" .$familiar['nombres']."'>
    </div>

    <div class='apellidos'>
    <label for=''>Apellidos: *</label>
    <input type='text' name='ape' id='ape' placeholder='Ingrese sus Apellidos' value = '" .$familiar['apellidos']."'>
    </div>
</div>
    
<div class='second-line'>
    <div class='peso'>
        <label for=''>Peso(lb): *</label>
        <input type='text' name='pe' id='pe' placeholder='Peso en Libras' value= ".$familiar['peso']." required>
    </div>
    
    <div class='altura'>
        <label for=''>Altura(cm): *</label>
        <input type='text' name='al' id='al' placeholder='Altura en cm'value = '".$familiar['altura']."' required>
    </div>  
</div>
    <div class = 'fecha'>
   
        <input type = 'hidden' name = 'fn' id='fn' value =".$familiar['fechaNac']." required>
    </div>

<div class = 'fourth-line'>
    <div class='municipio'>
        <label for='municipio'>Municipio *</label>
        <select name='municipio' id='municipio' required>
            <option value='".$familiar['municipio']."'>-- Actual:".$familiar['municipio']."</option>
            <option value='San Salvador'>San Salvador</option>
            <option value='Aguilares'>Aguilares</option>
            <option value='Apopa'>Apopa</option>
            <option value='Ayutuxtepeque'>Ayutuxtepeque</option>
            <option value='Ciudad Delgado'>Ciudad Delgado</option>
            <option value='Cuscatancingo'>Cuscatancingo</option>
            <option value='El Paisnal'>El Paisnal</option>
            <option value='Guazapa'>Guazapa</option>
            <option value='Ilopango'>Ilopango</option>
            <option value='Mejicanos'>Mejicanos</option>
            <option value='Nejapa'>Nejapa</option>
            <option value='Panchimalco'>Panchimalco</option>
            <option value='Rosario de Mora'>Rosario de Mora</option>
            <option value='San Marcos'>San Marcos</option>
            <option value='San Martin'>San Martin</option>
            <option value='Santiago Texacuangos'>Santiago Texacuangos</option>
            <option value='Santo Tomas'>Santo Tomas</option>
            <option value='Soyapango'>Soyapango</option>
            <option value='Tonacatepeque'>Tonacatepeque</option>
        </select>
    </div>
</div>


<div class='genre'>
<input type = 'hidden' name = 'genero' id='genero' value ='".$familiar['genero']."'>
</div>


</div>
<div class='fourth-line'>
    <label for=''>¿Tiene alguna Enfermedad o Alergia? Describalas (Si no tiene, omita este campo)</label>
</div>

<div class='fifth-line'>
    <textarea name='enfermedades' id='enfermedades' cols='50' rows='1' maxlength='255'>".$familiar['enfermedades']."</textarea>
</div>

    <div class='submit'>
        <button type='submit' class='disenoBoton' name = 'accion' id='modificar' class='btn btn-secondary' value='Modificar Perfil' onclick='modificar(\"".$familiar['idPerfil']."\")'>Modificar</button>
    </div>

        <script src='../view/js/perfil.js'></script>
    <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src='../view/js/bootstrap.min.js'></script>
    <script src='../view/js/jquery.js'></script>
    <script src='../assets/SweetAlert/dist/sweetalert2.all.min.js'></script>";

    echo footer(); 
}
    
?>