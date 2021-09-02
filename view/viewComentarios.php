<?php
  require_once 'plugins/funciones.php'; 
  require_once '../controller/ctrlUsuario.php';

  $dataUser = username();
  $datos = explode("/", $dataUser);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sección de Comentarios | E-MEDICINE</title>
  <?php
    links();
  ?>
  <link rel="stylesheet" href="../view/css/comentarios.css">
</head>
<body>
  <?php menu(); ?>
  <center><h2>COMENTARIOS</h2></center>

    <div class="allContainer">
      <form id="formucom" action="../controller/ctrlComentarios.php" method="POST">
        <div class="cajita">
        <h3><?php echo $datos[1].":";?></h3>
        <?php echo "<input type='hidden' name='idUsuario' value='".$datos[0]."'>"  ?>
        <?php echo "<input type='hidden' name='nombre' value='".$datos[1]."'>"  ?>
        <textarea type="text" placeholder="Escriba su opinión..." id="mensaje" name="mensaje"></textarea>
        <input type="submit" name="accion" id="accion" value="publicar" required></div>
      </form>
    </div>

    <div class="division">
        <hr id="barra">
    </div>

  <?php footer() ?>
</body>
</html>