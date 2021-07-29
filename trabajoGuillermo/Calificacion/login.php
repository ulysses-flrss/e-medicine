<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
  
  <body>
    <div class="forminicio">
      <form action="loguear.php" method="POST">
        <div class="usuario">
          <label for="usuario">Usuario:</label>
          <input type="text" name="usuario" required>
        </div>
        <div class="contra">
          <label for="pass">Contraseña:</label>
          <input type="password" name="pass" required>
        </div>
        <input type="submit" name="enviar" id="enviar" value="Enviar" required>
      </form>
      <?php 
        if(isset($_GET["error"])){
          require_once("funciones.php");
          $titulo = "Error";
          $msj = "Credenciales incorrectas, por favor volver a ingresarlas";
          modal($titulo, $msj);
        }
      ?>
    </div>
  </body>
</html>