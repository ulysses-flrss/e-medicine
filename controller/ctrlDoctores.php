<?php

    session_start();
    $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
    $idDoctor = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";

    $nombreDoctor = isset($_POST['nom'])?$_POST['nom']:"";
    $apellidoDoctor = isset($_POST['ape'])?$_POST['ape']:"";
    $telefono = isset($_POST['tel'])?$_POST['tel']:"";
    $correo = isset($_POST['mail'])?$_POST['mail']:""; 

    if ($accion === "editar") {
        require_once "../model/daoDoctor.php";

        $dao = new daoDoctor();
        $dao->editarPerfil($idDoctor, $nombreDoctor,$apellidoDoctor, $telefono, $correo);
    }
?>