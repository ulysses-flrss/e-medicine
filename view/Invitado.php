<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel='preconnect' href='https://fonts.googleapis.com'>
      <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
      <link href='https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap' rel='stylesheet'>

      <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
      
      <link rel='stylesheet' href='../view/css/root-style.css'>
      <link rel='stylesheet' href='../view/css/menu-style.css'>
      <link rel='stylesheet' href='../view/css/footer-style.css'>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU' crossorigin='anonymous'>

  <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
  <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
  <link rel='stylesheet' href='../assets/SweetAlert/dist/sweetalert2.min.css'>    <link rel="stylesheet" href="../view/css/index-style.css">
<title>Invitado</title>
</head>

<body>
<nav class='barNav'>
            <ul class='barNavegacion' id='nav'>
                <li class='bar-item'>
                    <a href='../view/viewAdmin.php?idUsuario=A-003'><img src='../assets/imgs/logoEMedicine.png' alt='Logo de E-Medicine' class='logo' title='Inicio'></a>
                </li>

                <li class='bar-item' id='li-cita' title='Programar Cita'>
                  <a href='../view/viewAdminPacientes.php?idUsuario=A-003' class='bar-link'>
                    <img src='../assets/imgs/document.png' class='bar-picture' id='cita'>
                    <span class='link-text'>Gestionar Usuarios</span>
                  </a>
                </li><li class='bar-item' id='li-doctor' title='Especialidades M??dicas'>
                    <a href='../view/especialidadesMedicas.php' class='bar-link'>
                        <img src='../assets/imgs/doctor.png' alt='' class='bar-picture' id='doctor'>
                        <span class='link-text'>Especialidades Medicas</span>
                    </a>
                </li>

                <li class='bar-item' id='li-faq' title='Preguntas Frecuentes'>
                    <a href='../view/faq.php' class='bar-link'>
                        <img src='../assets/imgs/faq.png' alt='' class='bar-picture' id='faq'>
                        <span class='link-text'>Preguntas Frecuentes</span>
                    </a>
                </li><li class='bar-item' id='li-about' title='Acerca de Nosotros'>
                    <a href='../view/aboutUs.php' class='bar-link' id='li-info'>
                        <img src='../assets/imgs/information.png' alt='' class='bar-picture' id='about'>
                        <span class='link-text'>Acerca de Nosotros</span>
                    </a>
                </li>

                <li class='bar-item' id='li-logout' title='Cerrar Sesi??n'>
                    <a href='../controller/ctrlPaciente.php?accion=cerrarSesion' class='bar-link'>
                        <img src='../assets/imgs/sign-out.png' alt='' class='bar-picture' id='logout'>
                        <span class='link-text'>Cerrar Sesi??n</span>
                    </a>
                </li>
            </ul>
        </nav>    


        
</body>
</html>
