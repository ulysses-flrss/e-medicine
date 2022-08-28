
<?php

error_reporting(E_ALL ^ E_NOTICE);
session_start();


$accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:""; 
        

if ($accion == "invitado") {
    require_once "../view/viewInvitado.php";
} else if ($accion == "inicioSesion") {
    require_once "../view/viewLogin.php";
} else {
    require_once "../view/viewInvitado.php";
}


?>