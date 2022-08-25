<?php
session_start();
require_once("plugins/funciones.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/404.css">
    <?php links() ?>
    <title>Error 404</title>
</head>
<body>
    <div class="container">
        <h1 class="tittle">Error 404</h1>
        <p>Disculpa las molestias pero en estos momentos estammos trabajando para una mejor experiencia
        </p>
        <img src="../assets/imgs/Error 404.png"><br>
        <a href="../index.php" class="regresar">Regresar a la pagina de inicio</a>
        <h6>Como sabemos que no leerás esto salvo haciendo click en alguna pagina que no existe<br> (y todas nuestras paginas existen 
            ), podemos permitirnos el lujo de escribir cualquier cosa. por ejemplo: Los muslos están sobrevalorados</h6>
            
    </div>
    
</body>
</html>