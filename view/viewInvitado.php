<?php
  // Notificar todos los errores excepto E_NOTICE
    error_reporting(E_ALL ^ E_NOTICE);
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
    <?php links(); ?>
    <link rel='stylesheet' href='../view/css/invitado-style.css'>
    <link rel="stylesheet" href="../view/css/index-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

<?php menu() ?> 



    <main class="allContainer">

        <div class="bienvenida" id="container-bienvenida">
            <a href="#" class="imagen-texto">
                <div class="img-layout"><img src="../assets/imgs/imagenPrueba.png" alt="Imagen de Perfil" class="profile-picture" title="Imagen de Perfil"></div>
                <span class="editar" title="Editar Perfil"> </span>
            </a>
            <span id="bienvenida" title="Bienvenida">Bienvenido Invitado <span>
        </div>

       

            <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                <center><img  src="../assets/imgs/family.png" alt="First slide"></center>
           </div>
            <div class="carousel-item">
                 <img " src="..." alt="Second slide">
             </div>
            <div class="carousel-item">
            <img  src="..." alt="Third slide">
           </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
              </a>
        </div>
       	
       </div>
          <center>
            <h3>Comentarios</h3>
          <INPUT TYPE=“text” Name="Comentarios" Size="90"></INPUT>
          <br></br>
          <input type="submit" name="submit" value="Enviar">
         </center>
            

        <footer class='footer'>
            <div class='social-networks-container'>
                <a href='https://www.facebook.com/' class='footer-item' title='Facebook: E-Medicine'><i class='fab fa-facebook' id='facebook'></i><span class='red-social'></span></a>
                <a href='https://www.instagaram.com/' class='footer-item' title='Instagram: @e-medicine'><i class='fab fa-instagram' id='instagram'></i><span class='red-social'></span></a>
                <a href='https://www.twitter.com/' class='footer-item' title='Twiiter: @eMedicine'><i class='fab fa-twitter' id='twitter'></i><span class='red-social' ></span></a>       
            </div>

            <a href='#' class='info'>E-Medicine - 2022</a>
        </footer>
    </main>



</body>
</html>