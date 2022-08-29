<?php
    session_start();
    $idUsuario = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
    $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";

    if ($accion == "addPaciente") {
        echo "agregando paciente ". $idUsuario;
    }else if ($accion == "addDoctor") {
        echo "agregando doctor ". $idUsuario;
    } else {
        echo "ninguna";
    }

?>