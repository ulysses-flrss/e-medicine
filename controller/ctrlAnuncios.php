
<?php 

$idUsuario = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
$nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
$contenidoAnuncio = isset($_POST['contenidoAnuncio'])?$_POST['contenidoAnuncio']:"";



    require_once("../model/classConexion.php");
    require_once("../model/daoAnuncios.php");
    require_once("../model/classAnuncios.php");

if($contenidoAnuncio == "" || $contenidoAnuncio == " ") {
    header("location:../view/viewDoctor.php");
} else {
    
    $anuncio = new Anuncio($idUsuario, $nombre, $contenidoAnuncio);

    $dao = new DaoAnuncio;

    $dao->publicarAnuncio($anuncio);

    echo "id: " . $idUsuario." nombre: ".$nombre." contenido: ".$contenidoAnuncio;
}
    

?>