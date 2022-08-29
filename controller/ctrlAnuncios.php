
<?php 

$idUsuario = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
$nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
$contenidoAnuncio = isset($_POST['contenidoAnuncio'])?$_POST['contenidoAnuncio']:"";



    require_once("../model/classConexion.php");
    require_once("../model/daoAnuncios.php");
    require_once("../model/classAnuncios.php");

if (substr($idUsuario, 0,3) == "P-0") {
    header("location:../view/viewAnuncios.php");
} else if($contenidoAnuncio == "" || $contenidoAnuncio == " ") {
        header("location:../view/viewDoctor.php");
    
} else {
    
    $anuncio = new Anuncio($idUsuario, $nombre, $contenidoAnuncio);

    $dao = new DaoAnuncio;

    $dao->publicarAnuncio($anuncio);

    $mensaje = 'PUBLICADO EXITOSAMENTE!.';
    echo "<script>alert('".$mensaje."')</script>"; //MISION: SUSTITUIR EL ALERT POR UNA VENTANA MODAL.
    echo "<body style='background-color:#daffec;'><a href='../view/viewDoctor.php' style='text-decoration:none;color:black;font-size:1.5rem;font-weight:bold;'>REGRESAR</a></body>";
}
    

?>