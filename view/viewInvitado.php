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
</head>

<body>

<nav class='barNav'>
    <ul class='barNavegacion' id='nav'>

        <li class='bar-item' id="li-title">
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

            <li class='bar-item' id='li-profile' title=''>
                <a href='../view/viewLogin.php' class='bar-link' id='li-perfil'>
                <i class="fa-solid fa-user-lock icon"></i>
                    <span class="link-text">Iniciar Sesión</span>
                </a>
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
            <li><img src="../assets/imgs/" alt=""></li>
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
        </footer>
    </main>



</body>
</html>