<?php
  // Notificar todos los errores excepto E_NOTICE
  error_reporting(E_ALL ^ E_NOTICE);

  function links(){
    echo "<link rel='preconnect' href='https://fonts.googleapis.com'>
      <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
      <link href='https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap' rel='stylesheet'>

      <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
      
      <link rel='stylesheet' href='../view/css/root-style.css'>
      <link rel='stylesheet' href='../view/css/menu-style.css'>
      <link rel='stylesheet' href='../view/css/footer-style.css'>";
  }

  function menu(){
    //INICIO MENÚ
    require_once '../controller/ctrlUsuario.php';
    $dataUser = username();
    $datos = explode('/', $dataUser);
      
        echo "<nav class='nav'>
            <ul class='navbar-nav' id='nav'>
                <li class='nav-item'>
                    <a href='../view/viewPaciente.php?idUsuario=".$datos[0]."'><img src='../assets/logoEMedicine.png' alt='Logo de E-Medicine' class='logo' title='Inicio'></a>
                </li>

                <li class='nav-item' id='li-cita' title='Programar Cita'>
                    <a href='../controller/ctrlCita.php?idUsuario=".$datos[0]."' class='nav-link' >
                        <img src='../assets/document.png' alt='' class='nav-picture' id='cita'>
                        <span class='link-text'>Programar Cita</span>
                    </a>
                </li>

                <li class='nav-item' id='li-familiares' title='Familiares'>
                    <a href='../view/perfilFamiliares.php?idUsuario=".$datos[0]."' class='nav-link' >
                        <img src='../assets/family.png' alt='' class='nav-picture' id='familiares'>
                        <span class='link-text'>Familiares</span>
                    </a>
                </li>

                <li class='nav-item' id='li-doctor' title='Especialidades Médicas'>
                    <a href='#' class='nav-link'>
                        <img src='../assets/doctor.png' alt='' class='nav-picture' id='doctor'>
                        <span class='link-text'>Especialidades Medicas</span>
                    </a>
                </li>

                <li class='nav-item' id='li-faq' title='Preguntas Frecuentes'>
                    <a href='../view/faq.php' class='nav-link'>
                        <img src='../assets/faq.png' alt='' class='nav-picture' id='faq'>
                        <span class='link-text'>Preguntas Frecuentes</span>
                    </a>
                </li>

                <li class='nav-item' id='li-comentarios' title='Comentarios'>
                    <a href='../controller/ctrlComentarios.php?idUsuario=".$datos[0]."' class='nav-link'>
                        <img src='../assets/comments.png' alt='' class='nav-picture' id='comentarios'>
                        <span class='link-text'>Comentarios</span>
                    </a>
                </li>

                <li class='nav-item' id='li-about' title='Acerca de Nosotros'>
                    <a href='../view/aboutUs.php' class='nav-link' id='li-info'>
                        <img src='../assets/information.png' alt='' class='nav-picture' id='about'>
                        <span class='link-text'>Acerca de Nosotros</span>
                    </a>
                </li>

                <li class='nav-item' id='li-logout' title='Cerrar Sesión'>
                    <a href='../controller/ctrlPaciente.php?accion=cerrarSesion' class='nav-link'>
                        <img src='../assets/sign-out.png' alt='' class='nav-picture' id='logout'>
                        <span class='link-text'>Cerrar Sesión</span>
                    </a>
                </li>
            </ul>
        </nav>";
    //FINAL MENÚ
  }

  

  function footer(){
    echo "<footer class='footer'>
        <div class='columna1'>
            <strong class='titulo-footer' title='Nuestra Empresa'>Nuestra Empresa</strong>
            <a href='aboutUs.php' class='footer-item' title='¿Quiénes Somos?'>¿Quiénes Somos?</a>
            <a href='#' class='footer-item' title='Misión'>Misión</a>
            <a href='#' class='footer-item' title='Visión'>Visión</a>


        </div>

        <div class='columna2'>
            <strong class='titulo-footer' title='¿Te Ayudamos?'>¿Te Ayudamos?</strong>
            <a href='#' class='footer-item' title='Contactanos'>Contactanos</a>
            <a href='faq.php' class='footer-item' title='Preguntas Frecuentes'>Preguntas Frecuentes</a>
            <a href='#' class='footer-item' title='Comentarios'>Comentarios</a>
        </div>
            
        <div class='columna3'>
            <strong class='titulo-footer' title='Siguenos En'>Siguenos En:</strong>
        
                    <a href='https://www.facebook.com/' class='footer-item' title='Facebook: E-Medicine'><i class='fab fa-facebook' id='facebook'></i><span class='red-social'>Facebook</span></a>
                    <a href='https://www.instagaram.com/' class='footer-item' title='Instagram: @e-medicine'><i class='fab fa-instagram' id='instagram'></i><span class='red-social'>Instagram</span></a>
                    <a href='https://www.twitter.com/' class='footer-item' title='Twiiter: @eMedicine'><i class='fab fa-twitter' id='twitter'></i><span class='red-social' >Twitter</span></a>
        </div>
    </footer>";
  }

  function modal($titulo, $mensaje){
      echo "
        <div id='miModal' class='miModal'>
          <div class='modal' id='modal'>
            <div class='modalContainer'>
              <div class='modalHeader'>
                <h2>". $titulo ."</h2>
                <span class='close' id='close'>&times;</span>
              </div class='modalHeader'>
                  ". $mensaje ."
              <div class='modalBody'>
              </div>
            </div>

            <div class='modalFooter'>
              <h3>E-MEDICINE</h3>
            </div>
          </div>
        </div>";
  }
?>