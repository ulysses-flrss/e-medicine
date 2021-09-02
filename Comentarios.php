<?php require_once 'php/funciones.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios - E-Medicine</title>
    <?php links(); ?>
    <link rel="stylesheet" href="css/comentarios.css">
</head>

<body>
    <?php menu(); session_start()?>

    <center><h2>COMENTARIOS</h2></center>

    <div class="allContainer">
      <form id="formucom" action="controlador/ctrlComentarios.php" method="POST">
        <div class="cajita">
        <p><!--<?php/* echo $_SESSION['usuario'];*/?>-->Nombre del Usuario:</p>
        <textarea type="text" placeholder="Escriba su opinión..." id="mensaje" name="mensaje"></textarea>
        <input type="submit" name="enviar" id="enviar"></div>
      </form>
    </div>

    <div class="division">
        <hr id="barra">
    </div>

    <?php footer(); ?>
    <script src="javascript.js"></script>
</body>
</html>