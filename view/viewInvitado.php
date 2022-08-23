<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitado | E-Medicine</title>
     <script src='https://kit.fontawesome.com/b5142e7f7e.js' crossorigin='anonymous'></script>
      
      <link rel='stylesheet' href='../view/css/invitado-style.css'>
      <link rel='stylesheet' href='../view/css/root-style.css'>
      <link rel='stylesheet' href='../view/css/menu-style.css'>
      <link rel='stylesheet' href='../view/css/footer-style.css'>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU' crossorigin='anonymous'>

  <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
  <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
  <link rel='stylesheet' href='../assets/SweetAlert/dist/sweetalert2.min.css'>
  <link rel='stylesheet' href='../view/css/menu-style.css'>    <link rel="stylesheet" href="../view/css/index-style.css">
</head>
</head>
<body>
 <nav class='barNav'>
            <ul class='barNavegacion' id='nav'>

                <li class='bar-item'>
                    <a href='../view/viewPaciente.php?idUsuario=P-00001' class='bar-link'>
                        <img src='../assets/imgs/logoEMedicine.png' alt='Logo de E-Medicine' class='logo' title='Inicio'>
                        <span class='link-text' id ='welcome-text'>E-Medicine</span>
                    </a>
                </li>

                <li class='bar-item' id='li-cita' title='Programar Cita'>
                    <a  class='bar-link'>
                        <i class='fa-solid fa-book-medical icon'></i>
                        <span class='link-text'>Cita Médica</span>
                    </a>
                </li>

                <li class='bar-item' id='li-familiares' title='Familiares'>
                    <a href='../view/viewFamiliares.php?idUsuario=P-00001&sesion=true' class='bar-link' >

                    <i class='fa-solid fa-person-breastfeeding icon'></i>
                        <span class='link-text'>Familiares</span>
                    </a>
                </li><li class='bar-item' id='li-doctor' title='Especialidades Médicas'>
                    <a href='../view/especialidadesMedicas.php' class='bar-link'>
                        <i class='fa-solid fa-user-doctor icon'></i>
                        <span class='link-text'>Especialidades Medicas</span>
                    </a>
                </li>

                <li class='bar-item' id='li-faq' title='Preguntas Frecuentes'>
                    <a href='../view/faq.php' class='bar-link'>
                    <i class='fa-solid fa-clipboard-question icon'></i>
                    <span class='link-text'>Preguntas Frecuentes</span>
                    </a>
                </li><li class='bar-item' id='li-comentarios' title='Comentarios'>
                    <a href='../controller/ctrlComentarios.php?idUsuario=P-00001' class='bar-link'>
                    <i class='fa-solid fa-message icon'></i>

                        <span class='link-text'>Comentarios</span>
                    </a>
                </li>
                <li class='bar-item' id='li-about' title='Acerca de Nosotros'>
                    <a href='../view/aboutUs.php' class='bar-link' id='li-info'>
                        <i class='fa-solid fa-circle-info icon'></i>
                        <span class='link-text'>Acerca de Nosotros</span>
                    </a>
                </li>

                    
                        
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>

            <main class="allContainer">

        <div class="bienvenida" id="container-bienvenida">
            <a href="#" class="imagen-texto">
                <div class="img-layout"><img src="../assets/imgs/imagenPrueba.png" alt="Imagen de Perfil" class="profile-picture" title="Imagen de Perfil"></div>
                <span class="editar" title="Editar Perfil"> </span>
            </a>
            <span id="bienvenida" title="Bienvenida">Bienvenido Invitado <span>
        </div>

        <article class="mainArticle">
            </article>

            <br></br>

       <div class="slider">
       	<ul>
       		<li><img src="../assets/imgs/family.png" alt=""></li>
       		<li><img src="../assets/imgs/add.png" alt=""></li>
       		<li><img src="../assets/imgs/corazon.png" alt=""></li>
       		<li><img src="../assets/imgs/listado(1).png" alt=""></li>
       		
       	</ul>
       	
       </div>

       
        <footer class='footer'>
            <div class='social-networks-container'>
                <a href='https://www.facebook.com/' class='footer-item' title='Facebook: E-Medicine'><i class='fab fa-facebook' id='facebook'></i><span class='red-social'></span></a>
                <a href='https://www.instagaram.com/' class='footer-item' title='Instagram: @e-medicine'><i class='fab fa-instagram' id='instagram'></i><span class='red-social'></span></a>
                <a href='https://www.twitter.com/' class='footer-item' title='Twiiter: @eMedicine'><i class='fab fa-twitter' id='twitter'></i><span class='red-social' ></span></a>       
            </div>

            <a href='#' class='info'>E-Medicine - 2022</a>
        </footer>    </main>



</body>
</html>