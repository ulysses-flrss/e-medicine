<?php 

//$idUsuario = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
$anuncio = isset($_POST['anuncio'])?$_POST['anuncio']:"";


    require_once("../model/classConexion.php");
    require_once("../model/daoAnuncios.php");
    require_once("../model/classAnuncios.php");


    $anuncio = new Anuncio($anuncio);

    $dao = new DaoAnuncio;

    $dao->publicarAnuncio($anuncio);

?>