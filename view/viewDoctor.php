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
    <link rel="stylesheet" href="../view/css/anuncios-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="jquery-3.6.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/start/jquery-ui.css">
</head>

<body>

    <?php menu(); ?>

    <main class="allContainer">
        <div class="bienvenida" id="container-bienvenida">
            <a href="#" class="imagen-texto">
                <div class="img-layout"><img src="../assets/imgs/imagenPrueba.png" alt="Imagen de Perfil" class="profile-picture" title="Imagen de Perfil"></div>
                <span class="editar" title="Editar Perfil"> </span>
            </a>
                <span id="bienvenida" title="Bienvenida">Bienvenido/a <b><?php
                    if ($datos[3] == "femenino" || $datos[3] == "masculino"){
                        if ($datos[3] == "femenino")
                            echo "Dra. " . $datos[1];
                        else if ($datos[3] == "masculino")
                            echo "Dr. " . $datos[1];
                    }else if ($datos[5] == "masculino" || $datos[5] == "femenino") {
                        if ($datos[5] == "femenino")
                            echo "Dra. " . $datos[1];
                        else
                            echo "Dr. ".$datos[1];
                    }else{
                        echo "Error";
                    }
                ?></b><span>
        </div>

        <section>
            <div class="anuncio-container">
                <div class="head-anuncio-container">
                    <span class="head-anuncio">Redactar Anuncio</span>
                </div>

                <div class="contenido-anuncio">
                    <form action="" method="post" onsubmit="submitForm(event)">
                        <?php echo "<input type='hidden' name='idUsuario' value='".$datos[0]."' id='idUsuario'>" ?>
                        <?php echo "<input type='hidden' name='nombre' value='".$datos[1]."' id='nombre'>" ?>
                        <textarea name="contenidoAnuncio" class="message-area" id="contenidoAnuncio" cols="30" rows="10" minlength="10" maxlength="255"></textarea>
                        <div class="submit">
                            <button type="submit" class="disenoBoton" id="accion" value="publicarAnuncio" onclick="publicarAnuncio('main');">Publicar Anuncio</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    <?php footer(); ?>

    <script src="javascript.js"></script>
    <script src="../view/js/funciones.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../view/js/all.min.js"></script>
    <script src="../view/js/bootstrap.min.js"></script>
    <script src="../assets/SweetAlert/dist/sweetalert2.all.min.js"></script>
    <script src="../view/js/selectCita.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
</body>
</html>
