<?php

$idUsuario = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
$nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
$contenidoAnuncio = isset($_POST['contenidoAnuncio'])?$_POST['contenidoAnuncio']:"";
$accion = isset($_REQUEST['accion'])?$_REQUEST['idUsuario']:"";

require_once("../model/classConexion.php");
require_once("../model/daoAnuncios.php");
require_once("../model/classAnuncios.php");

if (substr($idUsuario, 0,3) == "P-0") {
    header("location:../view/viewAnuncios.php");
}/* else if($contenidoAnuncio == "" || $contenidoAnuncio == " ") {
        header("location:../view/viewDoctor.php");

} */elseif ($accion == "publicarAnuncio") {

    if ($contenidoAnuncio == "" || $contenidoAnuncio == " "){
        $r = "ERROR: No puede subir un anuncio vacío";
        echo json_encode($r);
    }
    $anuncio = new Anuncio($idUsuario, $nombre, $contenidoAnuncio);

    $dao = new DaoAnuncio;

    $r = $dao->publicarAnuncio($anuncio);

    echo json_encode($r);

    /*$mensaje = 'PUBLICADO EXITOSAMENTE!.';
    echo "<script>alert('".$mensaje."')</script>"; //MISION: SUSTITUIR EL ALERT POR UNA VENTANA MODAL.
    echo "<body style='background-color:#daffec;'><a href='../view/viewDoctor.php' style='text-decoration:none;color:black;font-size:1.5rem;font-weight:bold;'>REGRESAR</a></body>";*/
}

?>