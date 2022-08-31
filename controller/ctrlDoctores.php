<?php

    session_start();
    $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
    $idDoctor = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";

    $nombreCompleto = isset($_POST['nom'])?$_POST['nom']:"";
    $nombreCompleto = isset($_POST['nom'])?$_POST['nom']:"";
    $telefono = isset($_POST['tel'])?$_POST['tel']:"";
    $correo = isset($_POST['mail'])?$_POST['mail']:"";

    if ($accion === "editar") {
        require_once "../model/daoDoctor.php";

        $dao = new daoDoctor();
        $dao->editarPerfil($idDoctor, $nombreCompleto, $telefono, $correo);
    }
?>