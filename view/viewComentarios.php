<?php
  require_once 'plugins/funciones.php'; 
  require_once '../controller/ctrlUsuario.php';
  require_once '../model/classComentario.php';

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
  <link rel="stylesheet" href="../view/css/comentarios-style.css">
</head>
<body>
  <?php menu(); ?>
  

    <main class="all-container">
      <article>
        <section class="publicarComentario">
        <h2>Comentarios</h2>
          <form id="formucom" action="../controller/ctrlComentarios.php" method="POST">
            <div class="cajita">
            <div class="nombrePerfil"><?php echo $datos[1].":";?></div>
            <?php echo "<input type='hidden' name='idUsuario' value='".$datos[0]."'>"  ?>
            <?php echo "<input type='hidden' name='nombre' value='".$datos[1]."'>"  ?>
            <textarea type="text" placeholder="Escriba su opinión..." id="mensaje" name="mensaje"></textarea>
            <div class="submit">
                <input type="submit" name="accion" id="accion" value="publicar" required></div>
            </div>
            
          </form>
        </section>

        <section>
            <h2>Comentarios Publicados</h2>

            <?php
              $coment = new Comentario();
              $comentarios = $coment->mostrarComentarios();
              
              foreach ($comentarios as $comentario) {
                echo '
                <div class = "comentariosPublicados">
                  
                    <div class="objetoComentarios"  id="autor">
                        <span title="Escritor del Comentario">'.$comentario['nombre'].'</span>
                    </div>

                    <div class="objetoComentarios" id="fechaPublicacion">
                        <span title="Fecha de Publicación del Anuncio">'.$comentario['fecha'].'</span>
                    </div>

                    <div class="objetoComentarios" id="descripcion">
                        <p title="Contenido del Anuncio">
                          '.$comentario['mensaje'].'
                        </p>
                    </div>
                  
                </div>';

                
                
              }
            ?>
        </section>
      </article>
  

      

        </main>
  <?php footer() ?>
</body>
</html>