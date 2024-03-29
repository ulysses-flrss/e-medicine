<?php
  // Notificar todos los errores excepto E_NOTICE
  error_reporting(E_ALL ^ E_NOTICE);

  function links(){
    echo " <script src='https://kit.fontawesome.com/b5142e7f7e.js' crossorigin='anonymous'></script>
      <link rel='stylesheet' href='../view/css/root-style.css'>
      <link rel='stylesheet' href='../view/css/menu-style.css'>
      <link rel='stylesheet' href='../view/css/footer-style.css'>
      <meta name='viewport' content='width=device-width', initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU' crossorigin='anonymous'>

  <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
  <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
  <link rel='stylesheet' href='../assets/SweetAlert/dist/sweetalert2.min.css'>
  <link rel='stylesheet' href='../view/css/menu-style.css'>";
  }

  function menu(){
    //INICIO MENÚ
    require_once '../controller/ctrlUsuario.php';
    $cod = "";
    $dataUser = username($cod);
    $datos = explode('/', $dataUser);
    $tipoUsuario = $datos[2];
    // <a href='../controller/ctrlPaciente.php?accion=cerrarSesion' class='bar-link'>
    // <img src='../assets/imgs/sign-out.png' alt='' class='bar-picture' id='logout'>
    // <i class="fa-solid fa-right-from-bracket"></i>
    switch ($tipoUsuario) {
        case 'paciente':
            echo "  <nav class='barNav'>
            <ul class='barNavegacion' id='nav'>

                <li class='bar-item'>
                    <a href='../view/viewPaciente.php?idUsuario=".$datos[0]."' class='bar-link'>
                        <img src='../assets/imgs/logoEMedicine.png' alt='Logo de E-Medicine' class='logo' title='Inicio'>
                        <span class='link-text' id ='welcome-text'>E-Medicine</span>
                    </a>
                </li>

                <li class='bar-item' id='li-cita' title='Programar Cita'>
                    <a href='viewCita.php?idUsuario=".$datos[0]."' class='bar-link'>
                        <i class='fa-solid fa-book-medical icon'></i>
                        <span class='link-text'>Cita Médica</span>
                    </a>
                </li>

                <li class='bar-item' id='li-familiares' title='Familiares'>
                    <a href='../view/viewFamiliares.php?idUsuario=".$datos[0]."&sesion=true' class='bar-link' >

                    <i class='fa-solid fa-person-breastfeeding icon'></i>
                        <span class='link-text'>Familiares</span>
                    </a>
                </li>
                
                <li class='bar-item' id='li-familiares' title='Familiares'>
                    <a href='../view/viewPacienteCitas.php?idUsuario=".$datos[0]."&sesion=true' class='bar-link' >

                    <i class='fa-regular fa-calendar-check icon'></i>
                        <span class='link-text'>Citas Programadas</span>
                    </a>
                </li>

        ";
        break;

        case 'invitado':
            echo "  <nav class='barNav'>
            <ul class='barNavegacion' id='nav'>

                <li class='bar-item'>
                    <a href='../view/viewInvitado.php' class='bar-link'>
                        <img src='../assets/imgs/logoEMedicine.png' alt='Logo de E-Medicine' class='logo' title='Inicio'>
                        <span class='link-text' id ='welcome-text'>E-Medicine</span>
                    </a>
                </li>

                <li class='bar-item' id='li-cita' title='Programar Cita'>
                    <a href='#' class='bar-link ' id='citaInv'>
                        <i class='fa-solid fa-book-medical icon'></i>
                        <span class='link-text'>Cita Médica</span>
                    </a>
                </li>

                <li class='bar-item' id='li-familiares' title='Familiares'>
                    <a href='#' class='bar-link' id='famiInvi'>

                    <i class='fa-solid fa-person-breastfeeding icon'></i>
                        <span class='link-text'>Familiares</span>
                    </a>
                </li>";
            break;

        case 'doctor':
            echo "<nav class='barNav'>
            <ul class='barNavegacion' id='nav'>
            <li class='bar-item'>
            <a href='../view/viewDoctor.php?idUsuario=".$datos[0]."' class='bar-link'>
                <img src='../assets/imgs/logoEMedicine.png' alt='Logo de E-Medicine' class='logo' title='Inicio'>
                <span class='link-text' id ='welcome-text'>E-Medicine</span>
            </a>
        </li>

                <li class='bar-item' id='li-cita' title='Programar Cita'>
                  <a href='../view/viewDoctorCitas.php?idUsuario=".$datos[0]."' class='bar-link'>
                    <i class='fa-solid fa-calendar-days icon'></i>
                    <span class='link-text'>Ver Citas Programadas</span>
                  </a>
                </li>

                <li class='bar-item' id='li-cita' title='Programar Cita'>
                  <a href='../view/viewCrearAnuncios.php?idUsuario=".$datos[0]."' class='bar-link'>
                    <i class='fa-solid fa-bullhorn icon'></i>
                    <span class='link-text'>Agregar <br>   Anuncios</span>
                  </a>
                </li>";
        break;

        case 'admin':
            echo "<nav class='barNav'>
            <ul class='barNavegacion' id='nav'>
            <li class='bar-item'>
            <a href='../view/viewAdmin.php?idUsuario=".$datos[0]."' class='bar-link'>
                <img src='../assets/imgs/logoEMedicine.png' alt='Logo de E-Medicine' class='logo' title='Inicio'>
                <span class='link-text' id ='welcome-text'>E-Medicine</span>
            </a>
        </li>

                <li class='bar-item' id='li-cita' title='Gestionar Pacientes'>
                  <a href='../view/viewAdminPacientes.php?idUsuario=".$datos[0]."' class='bar-link'>
                  <i class='fa-solid fa-user-gear icon'></i>
                    <span class='link-text'>Gestionar Pacientes</span>
                  </a>
                </li>

                <li class='bar-item' id='li-cita' title='Gestionar Doctores'>
                  <a href='../view/viewAdminDoctores.php?idUsuario=".$datos[0]."' class='bar-link'>
                  <i class='fa-solid fa-user-doctor icon'></i>
                    <span class='link-text'>Gestionar Doctores</span>
                  </a>
                </li>

";

        break;
    }
            echo    "<li class='bar-item' id='li-doctor' title='Especialidades Médicas'>
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
                </li>";
        switch ($tipoUsuario) {
            case 'paciente':
                echo "<li class='bar-item' id='li-comentarios' title='Anuncios'>
                    <a href='../view/viewAnuncios.php' class='bar-link'>
                    <i class='fa-solid fa-message icon'></i>

                        <span class='link-text'>Anuncios</span>
                    </a>
                </li>
                <li class='bar-item' id='li-about' title='Acerca de Nosotros'>
                    <a href='../view/aboutUs.php' class='bar-link' id='li-info'>
                        <i class='fa-solid fa-circle-info icon'></i>
                        <span class='link-text'>Acerca de Nosotros</span>
                    </a>
                </li>

                    <li class='bar-item' id='li-profile'>
                        "/*<a href='#' class='bar-link'>
                            <i class='fa-solid fa-user icon'></i>
                            <span class='link-text'>".$datos[1]." <br><span class='mini-text'>Entrar a Perfil</span></span>
                        </a>*/
                        .
                        "<div class='submenuRaiz'><a href='#' class='bar-link'>
                        <i class='fa-solid fa-user icon'></i><span class='link-text'>".$datos[1]."</span></a></div>
                        <div class='submenu'>
                            <ul>
                                <li class='bar-item'><a href='../view/viewPacienteEdit.php' class='link-text'><span class='bar-link'>Ver Perfil</span></a></li>
                                <li class='bar-item'><a href='../controller/CtrlPaciente.php?accion=cerrarSesion' class='bar-link'><span class='link-text'>Cerrar Sesión</span></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>";
        break;
    //FINAL MENÚ";

            case 'invitado':
                echo "<li class='bar-item' id='li-comentarios' title='Anuncios'>
                    <a href='../view/viewAnuncios.php' class='bar-link'>
                    <i class='fa-solid fa-message icon'></i>

                        <span class='link-text'>Anuncios</span>
                    </a>
                </li>
                <li class='bar-item' id='li-about' title='Acerca de Nosotros'>
                    <a href='../view/aboutUs.php' class='bar-link' id='li-info'>
                    <i class='fa-solid fa-circle-info icon'></i>
                    <span class='link-text'>Acerca de Nosotros</span>
                    </a>
                    </li>

                    <li class='bar-item' id='li-profile'>
                        <div class='submenuRaiz'><a href='../view/viewLogin.php' class='bar-link'><i class='fa-solid fa-user icon'></i><span class='link-text'>Iniciar Sesión</span></a></div>
                    </li>
                </ul>
            </nav>";
            break;

            case 'doctor':
                echo "<li class='bar-item' id='li-about' title='Acerca de Nosotros'>
                    <a href='../view/aboutUs.php' class='bar-link' id='li-info'>
                    <i class='fa-solid fa-circle-info icon'></i>
                        <span class='link-text'>Acerca de Nosotros</span>
                    </a>
                </li>

                <li class='bar-item' id='li-about' title='Editar Perfil'>
                    <a href='../view/viewDoctoresEdit.php' class='bar-link' id='li-info'>
                    <i class='fa-solid fa-user-pen icon'></i>
                        <span class='link-text'>Editar Perfil</span>
                    </a>
                </li>

                <li class='bar-item' id='li-logout' title='Cerrar Sesión'>
                    <a href='../controller/ctrlPaciente.php?accion=cerrarSesion' class='bar-link'>
                    <i class='fa-solid fa-right-to-bracket icon'></i>
                        <span class='link-text'>Cerrar Sesión</span>
                    </a>
                </li>
            </ul>
        </nav>";
    //FINAL MENÚ
            break;

            case 'admin':
                echo "<li class='bar-item' id='li-about' title='Acerca de Nosotros'>
                    <a href='../view/aboutUs.php' class='bar-link' id='li-info'>
                    <i class='fa-solid fa-circle-info icon'></i>
                        <span class='link-text'>Acerca de Nosotros</span>
                    </a>
                </li>

                <li class='bar-item' id='li-logout' title='Cerrar Sesión'>
                    <a href='../controller/ctrlPaciente.php?accion=cerrarSesion' class='bar-link'>
                        <i class='fa-solid fa-right-to-bracket icon'></i>
                        <span class='link-text'>Cerrar Sesión</span>
                    </a>
                </li>
            </ul>
        </nav>";
    //FINAL MENÚ
            break;
            default:
                // code...
                break;
        }
  }


  function footer(){
    echo "<footer class='footer'>
            <div class='social-networks-container'>
                <a href='https://www.facebook.com/' class='footer-item' title='Facebook: E-Medicine'><i class='fab fa-facebook' id='facebook'></i><span class='red-social'></span></a>
                <a href='https://www.instagaram.com/' class='footer-item' title='Instagram: @e-medicine'><i class='fab fa-instagram' id='instagram'></i><span class='red-social'></span></a>
                <a href='https://www.twitter.com/' class='footer-item' title='Twiiter: @eMedicine'><i class='fab fa-twitter' id='twitter'></i><span class='red-social' ></span></a>
            </div>

            <a href='#' class='info'>E-Medicine - 2022</a>
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