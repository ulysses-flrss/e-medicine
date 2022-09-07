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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/start/jquery-ui.css">
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../view/js/all.min.js"></script>
  <script src="../view/js/bootstrap.min.js"></script>
  <script src="../assets/SweetAlert/dist/sweetalert2.all.min.js"></script>
  <script src="../view/js/selectCita.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
</body>
</html>