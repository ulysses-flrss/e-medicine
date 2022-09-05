<?php
  require_once 'plugins/funciones.php';
  require_once '../controller/ctrlUsuario.php';
  require_once '../model/classAnuncios.php';

  $cod = "";

  $dataUser = username($cod);
  $datos = explode("/", $dataUser);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anuncios | E-Medicine</title>
  <?php
    links();
  ?>
  <link rel="stylesheet" href="../view/css/anunciosPaciente-style.css">
</head>
<body>
  <?php menu(); ?>
    <main class="all-container">
      <section>
        <h2>Anuncios Publicados</h2>
        <article class="mainArticle">

        <?php
          if(!isset($anuncio)){
            require_once "../model/daoAnuncios.php";
          }else
            require_once "../controller/ctrlAnuncios.php";

          $dao = new DaoAnuncio();
          $anuncio=$dao->listadoAnuncios();
          foreach ($anuncio as $anun) {
            echo
            '
            <section class="tablonAnuncios">
            <div class="objetoTablon" id="autor">
              <span class="autor-text" title="Escritor del Anuncio">'.$anun['nombre'].'</span>
            </div>
            <div class="objetoTablon" id="fechaPublicacion">
              <span class="fecha-text" title="Fecha de Publicación del Anuncio">'.$anun['fechaPublicacion'].'</span>
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
      </section>

        </main>
  <?php footer() ?>
  <script src="../view/js/funciones.js"></script>
</body>
</html>