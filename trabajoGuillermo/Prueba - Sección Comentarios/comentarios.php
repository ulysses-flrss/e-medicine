<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <!--
    <header class="barraSuperior">
      <div>
        <nav>
          <ul>
            <li>
              <a href="#Inicio" class="opciones">Inicio</a>
            </li>
            <li>
              <a href="#Citas" class="opciones">Citas</a>
            </li>
            <li>
              <a href="#Comentarios" class="opciones">Comentarios</a>
            </li>
            <li>
              <a href="#FAQ" class="opciones">FAQ</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    -->

    <center><h1>Bienvenido <?php session_start(); echo $_SESSION['usuario']; ?>.</h1></center>

    <center><h2>COMENTARIOS</h2></center>

    <div class="coment">
      <form id="formucom" action="sendcomentario.php" method="POST">
        <!--
        <?php 
          /*echo 
            "<div id=\"usuario\">" 
              $_SESSION['usuario']
            "</div>"  */
          ?>
          $_SESSION['usuario']; -->
        <div class="cajita">
        <p><?php echo $_SESSION['usuario']; ?></p>
        <textarea type="text" placeholder="Escriba su opinión..." id="mensaje" name="mensaje"></textarea>
        <input type="submit" name="enviar" id="enviar"></div>
      </form>
    </div>

    <?php  

      require_once('conexion.php');
      require_once('funciones.php');

      $resultado = mysqli_query($conexion, "SELECT nombrePaciente, comentario, DATE_FORMAT(fechaComentario, '%H:%i %d/%m/%Y') as fecha FROM coments INNER JOIN pacientes ON pacientes.codPaciente=coments.paciente ORDER BY fechaComentario DESC;");

      if ($resultado){
        mostrarComentarios($resultado);
      } else{
        $resultado = mysqli_query($conexion, "SELECT * coments");
      }

    ?>

    <?php
      /*$usuario = $_SESSION['username'];*/

      if(!isset($usuario)){
        /*header("location: login.php");*/
        echo "No pudo entrar";
      }

      echo "<a href=salir.php>SALIR</a>";
    ?>
  </body>
</html>