<?php
session_start();
require_once 'plugins/funciones.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitado | E-Medicine</title>
    <link rel='stylesheet' href='../view/css/invitado.css'>
    <link rel="stylesheet" href="../view/css/index-styles.css">

    <?php links() ?>
</head>

<body>

    <?php menu() ?>

    <main class="allContainer">

        <div class="bienvenida" id="container-bienvenida">
            <a href="#" class="imagen-texto">
                <div class="img-layout"><img src="../assets/imgs/imagenPrueba.png" alt="Imagen de Perfil" class="profile-picture" title="Imagen de Perfil"></div>
                <span class="editar" title="Editar Perfil"> </span>
            </a>
            <span id="bienvenida" title="Bienvenida">Bienvenido <b>Invitado</b><span>

        </div>

        <div class="container">

            <!-- BUTTONS (input/labels) -->
            <input type="radio" name="slider" id="slide-1-trigger" class="trigger" checked>
            <label class="btn" for="slide-1-trigger"></label>
            <input type="radio" name="slider" id="slide-2-trigger" class="trigger">
            <label class="btn" for="slide-2-trigger"></label>
            <input type="radio" name="slider" id="slide-3-trigger" class="trigger">
            <label class="btn" for="slide-3-trigger"></label>
            <input type="radio" name="slider" id="slide-4-trigger" class="trigger">
            <label class="btn" for="slide-4-trigger"></label>

            <!-- SLIDES -->
            <div class="slide-wrapper">
                <div id="slide-role">
                    <div class="slide slide-1"></div>
                    <div class="slide slide-2"></div>
                    <div class="slide slide-3"></div>
                    <div class="slide slide-4"></div>
                </div>
            </div>
        </div>
        </div>


        <?php footer() ?>

    </main>

    <script src="../view/js/funciones.js"></script>
</body>

</html>