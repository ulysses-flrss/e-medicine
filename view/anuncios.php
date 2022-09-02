<?php
    session_start();
    require_once("plugins/funciones.php");
    require_once '../controller/ctrlUsuario.php';
    $cod = "";
    $dataUser = username($cod);
?>

<!DOCTYPE html>
<html=lang="es">
<head>
<meta charset="UTF-8">
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anuncios-Doctores</title>
    <link rel="stylesheet" href="css/anuncios-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="jquery-3.6.0.js"></script>
    <?php links() ?>

</head>
<body>
 <!--INICIO DEL MENÚ-->

    <?php menu() ?>

    <!--FIN DEL MENÚ-->
<main class="all-container">

    <article>
        <section>
            <div class="anuncio-container">
                <div class="imagen-texto">
                    <img src="../imagenPrueba.png" class= "imagen-anuncio" alt="">
                    <h1> <?php echo "Dr. ".$datos[1];?></h1>
                </div>

                <div class="contenido-anuncio">
                    <form action="" method="post" id="formularioE">
                        <?php echo "<input type='hidden' id='idUsuario' value='".$datos[0]."'>";
                        echo "<input type='hidden' id='nom' value='".$datos[1]."'>";
                        ?>
                        <textarea name="contenidoAnuncio" class="message-area" id="contenidoAnuncio" cols="30" rows="10">

                        </textarea>
                    <div class="submit">
                        <button type="submit"  value="Publicar Anuncio" onclick="publicarAnuncio();">Publicar Anuncio</button>
                    </div>

                    </form>
                </div>
            </div>
        </section>
    </article>

</main>

    <?php footer() ?>
    <script src="javascript.js"></script>
   </body>