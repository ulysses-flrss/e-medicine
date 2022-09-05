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
    $telefono = isset($_POST['tel'])?$_POST['tel']:"";
    $correo = isset($_POST['mail'])?$_POST['mail']:""; 

    if ($accion === "editarDoctor") {

        $dao = new daoDoctor();
        $datosDoc = $dao->extraerDatos($datos[0]);
        
        $r = $dao->editarPerfil($idDoctor, $nombreDoctor,$apellidoDoctor, $telefono, $correo);

        echo json_encode($r);

    }
?>