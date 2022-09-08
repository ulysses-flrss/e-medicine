<?php

    session_start();
    require_once("../view/plugins/funciones.php");
    require_once '../controller/ctrlUsuario.php';
    require_once "../model/daoDoctor.php";

    $cod = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";

        $dataUser = username($cod);

    $datos = explode('/', $dataUser);
    $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
    $idDoctor = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";

    $nombreDoctor = isset($_POST['nom'])?$_POST['nom']:"";
    $apellidoDoctor = isset($_POST['ape'])?$_POST['ape']:"";
    $fechaNac = isset($_POST['fn'])?$_POST['fn']:"";
    $genero = isset($_POST['gen'])?$_POST['gen']:"";
    $em = isset($_POST['em'])?$_POST['em']:"";
    $password = isset($_POST['pass'])?$_POST['pass']:"";
    $telefono = isset($_POST['tel'])?$_POST['tel']:"";
    $correo = isset($_POST['mail'])?$_POST['mail']:"";
    $eMail = isset($_POST['email'])?$_POST['email']:"";
    $dui = isset($_POST['dui'])?$_POST['dui']:"";

    if ($accion === "editarDoctor") {

        $dao = new daoDoctor();
        $datosDoc = $dao->extraerDatos($datos[0]);
        $r = $dao->editarPerfil($idDoctor, $nombreDoctor,$apellidoDoctor, $telefono, $correo);

        echo json_encode($r);
    } else if ($accion == "registrarUserD"){
        require_once '../model/classDoctor.php';
        require_once '../model/daoDoctor.php';
        require_once '../model/DaoPaciente.php';

        $dao = new daoDoctor();
        $daoD = new DaoPaciente();
        $duiVal = $daoD->validarDui($duiP);

        $cod = $dao->getCodigo();
        $Doctor = new Doctor($cod,$nombreDoctor,$apellidoDoctor,$fechaNac,$genero,$em,$eMail,$password,$telefono,$dui);
        $dao->insertar($Doctor);
        $r = $Doctor->idDoctor;
        echo json_encode($r);
    } else if ($accion == "validarDui") {
        require_once "../model/classConexion.php";
        $conexion = new Conexion;
        $dbh = $conexion->getConexion();
        $sql = "SELECT * DUI FROM pacientes";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $listDui = $stmt->fetchAll();
        foreach ($listDui as $listDuis) {
            if ($listDuis['DUI'] == $dui){
                $validacion = "copia";
                echo json_encode($validacion);
            }
        }
        $sql = "SELECT * DUI FROM doctores";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $listDui = $stmt->fetchAll();
        foreach ($listDui as $listDuis) {
            if ($listDuis['DUI'] == $dui){
                $validacion = "copia";
                echo json_encode($validacion);
            }
        }
        $r = "OK";
        echo json_encode($r);
    }
?>