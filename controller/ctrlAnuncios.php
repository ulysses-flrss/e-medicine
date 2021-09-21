<?php 

$idUsuario = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
$contenidoAnuncio = isset($_POST['contenidoAnuncio'])?$_POST['contenidoAnuncio']:"";


    require_once("../model/classConexion.php");
    require_once("../model/daoAnuncios.php");
    require_once("../model/classAnuncios.php");


    $anuncio = new Anuncio($idUsuario, $contenidoAnuncio);

    $dao = new DaoAnuncio;

    $dao->publicarAnuncio($anuncio);

?>