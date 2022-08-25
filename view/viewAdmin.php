<?php 
   error_reporting(E_ALL ^ E_NOTICE);
    session_start();
    require_once 'plugins/funciones.php';
    require_once '../controller/ctrlUsuario.php';
    $cod = "";
    $dataUser = username($cod);

    $datos = explode('/', $dataUser);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | E-Medicine</title>
    <?php
      links();
    ?>
    <link rel="stylesheet" href="../view/css/index-style.css">
</head>

<body>

    <?php menu(); ?>
    
    <main class="allContainer">
        <div class="bienvenida" id="container-bienvenida">
            <a href="#" class="imagen-texto">
                <div class="img-layout"><img src="../view/imgs/imagenPrueba.png" alt="Imagen de Perfil" class="profile-picture" title="Imagen de Perfil"></div>
                <span class="editar" title="Editar Perfil"> </span>
            </a>
                <span id="bienvenida" title="Bienvenida">Bienvenido/a <b><?php echo $datos[1]; ?></b><span>
        </div>
        

        <article class="mainArticle">
    <?php
        if(!isset($anuncio)){
            require_once "../model/daoAnuncios.php";
        }else
            require_once "../controller/ctrlAnuncios.php";
        $dao = new DaoAnuncio();
        $anuncio=$dao->listadoAnuncios();
        foreach($anuncio as $anun){
            echo
            '
            <section class="tablonAnuncios">
            <div class="objetoTablon" id="autor">
            <span title="Escritor del Anuncio">'.$anun['nombre'].'</span>
            </div>
            <div class="objetoTablon" id="fechaPublicacion">
                <span title="Fecha de Publicación del Anuncio">'.$anun['fechaPublicacion'].'</span>
            </div>

            <div class="objetoTablon" id="descripcion">
                <p title="Contenido del Anuncio">
                    '.$anun['contenidoAnuncio'].'
                </p>
            </div>
            </section>';
        }
    ?>
        </article>
    </main>

    <?php footer(); ?>

    <!-- <script src="javascript.js"></script> -->
</body>

</html>