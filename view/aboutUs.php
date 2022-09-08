<?php
session_start();
require_once("plugins/funciones.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Nosotros - E-Medicine</title>
    <link rel="stylesheet" href="css/about-us-style.css">
    <?php links() ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/start/jquery-ui.css">
</head>
<body>

    <?php menu() ?>

<main class="all-container">
    <article>
        <section class="info-about">
            <div>
                <span class="title" id="QUIENESSOMOS">¿Quienes somos?</span>
                <p class="content">E-Medicine es un portal web para la clínica "x" el cual permite a los usuarios que esten registrados en él programar una cita médica con la clínica, sin la necesidad de salir de casa, evitando así aglomeraciones, brindando también una sección en la cual el administrador de la cuenta puede crear perfiles para los familiares de las tercera edad o para los menores de edad, brindandole así el mejor servicio a toda la familia.</p>
            </div>

            <div>
                <span class="title" id="MISION">Nuestra Misión</span>
                <p class="content">Somos una página dedicada a la programación de citas para agilizar y optimizar el proceso de consultas médicas; dandoles posibilidades de recibir la mejor experiencia a todo tipo de personas.</p>
            </div>

            <div>
                <span class="title" id="VISION">Nuestra Visión</span>
                <p class="content">Ser la mejor página para la programación de citas, conviritiendonos en una muy optimizada, con las mejores funciones y con el mejor sistema a nivel nacional.</p>
            </div>

            <div>
                <span class="title" id="HORARIOSDEATENCION">Horarios de Atención</span>
                <p class="content">La clínica a la que le brindamos nuestro servicio tiene sus puertas abiertas de <b>Lunes a Viernes</b> en los horarios desde las <b>7:00am</b> hasta las <b>6:00pm</b>.</p>
            </div>
        </section>

        <div id="creadores">Creadores</div>
        <section class="cards">
        <div class="card">
          <div class="card__image-container">
            <img
              src="../assets/imgs/20090066.jpg"
            />
          </div>
          <div class="card__content">
            <p class="card__title text--medium">
               Jefferson Alexis Castro Castro
            </p>
            <div class="card__info">
            <div class="social-networks">
                <div>
                    <a href="https://www.facebook.com/jefferson.castro.5264" target="_blank"><i class="fab fa-facebook-f" id="social-network-logo"></i></a><span class="social-network-about">Facebook</span>
                </div>

                <div>
                    <a href="https://www.instagram.com/alexis_castro50/" target="_blank"><i class="fab fa-instagram" id="social-network-logo"></i></a><span class="social-network-about">Instagram</span>
                </div>

                <div>
                    <a href="" target="_blank"><i class="fab fa-twitter" id="social-network-logo"></i></a><span class="social-network-about">Twitter</span>
                </div>
            </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card__image-container">
            <img
              src="../assets/imgs/20170252.jpg"
            />
          </div>
          <div class="card__content">
            <p class="card__title text--medium">
              Ulises Adonay Flores Martínez
            </p>
            <div class="card__info">
            <div class="social-networks">
                <div>
                    <a href="https://www.facebook.com/ulisesadonay.floresmartinez/" target="_blank"><i class="fab fa-facebook-f" id="social-network-logo"></i></a><span class="social-network-about">Facebook</span>
                </div>

                <div>
                    <a href="https://www.instagram.com/ulysses_flrss/" target="_blank"><i class="fab fa-instagram" id="social-network-logo"></i></a><span class="social-network-about">Instagram</span>
                </div>

                <div>
                    <a href="https://twitter.com/ulysses_flrss" target="_blank"><i class="fab fa-twitter" id="social-network-logo"></i></a><span class="social-network-about">Twitter</span>
                </div>
            </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card__image-container">
            <img
              src="../assets/imgs/20200090.jpg"
            />
          </div>
          <div class="card__content">
            <p class="card__title text--medium">
             José Guillermo Granadino Rivas
            </p>
            <div class="card__info">
            <div class="social-networks">
                <div>
                    <a href="https://www.facebook.com/Guillermo.granadino.11" target="_blank"><i  class="fab fa-facebook-f" id="social-network-logo"></i></a><span class="social-network-about">Facebook</span>
                </div>

                <div>
                    <a href="https://www.instagram.com/granadino11/" target="_blank"><i class="fab fa-instagram" id="social-network-logo" ></i></a><span class="social-network-about">Instagram</span>
                </div>

                <div>
                    <a href="https://twitter.com/Guillermo17u" target="_blank"><i class="fab fa-twitter" id="social-network-logo"></i></a><span class="social-network-about">Twitter</span>
                </div>
            </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card__image-container">
            <img
              src="../assets/imgs/20170001.jpg"
            />
          </div>
          <div class="card__content">
            <p class="card__title text--medium">
             Samuel Ernesto Bonilla Arias
            </p>
            <div class="card__info">
            <div class="social-networks">
                    <div>
                        <a href="https://facebook.com/samuelernesto.bonillaarias.9" target="_blank"><i class="fab fa-facebook-f" id="social-network-logo"></i></a><span class="social-network-about">Facebook</span>
                    </div>

                    <div>
                        <a href="https://www.instagram.com/samuel_the_phoenix/" target="_blank"><i class="fab fa-instagram" id="social-network-logo"></i></a><span class="social-network-about">Instagram</span>
                    </div>

                    <div>
                        <a href="" target="_blank"><i class="fab fa-twitter" id="social-network-logo"></i></a><span class="social-network-about">Twitter</span>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card__image-container">
            <img
              src="../assets/imgs/20200216.jpg"
            />
          </div>
          <div class="card__content">
            <p class="card__title text--medium">
              Carlos Leandro García Mena
            </p>
            <div class="card__info">
            <div class="social-networks">
                    <div>
                        <a href="" target="_blank"><i class="fab fa-facebook-f" id="social-network-logo"></i></a><span class="social-network-about">Facebook</span>
                    </div>

                    <div>
                        <a href="https://www.instagram.com/leandro_mena11/" target="_blank"><i class="fab fa-instagram" id="social-network-logo"></i></a><span class="social-network-about">Instagram</span>
                    </div>

                    <div>
                        <a href="https://twitter.com/auronplay" target="_blank"><i class="fab fa-twitter" id="social-network-logo"></i></a><span class="social-network-about">Twitter</span>
                    </div>
                </div>
        
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card__image-container">
            <img
              src="../assets/imgs/ludwig.jpg"
            />
          </div>
          <div class="card__content">
            <p class="card__title text--medium">
                Ludwig Ernesto Estrada Parada

            </p>
            <div class="card__info">
            <div class="social-networks">
                <div>
                        <a href="https://www.facebook.com/profile.php?id=100013734334106" target="_blank"><i class="fab fa-facebook-f" id="social-network-logo"></i></a><span class="social-network-about">Facebook</span>
                    </div>

                    <div>
                        <a href="https://www.instagram.com/estrada_3010/" target="_blank"><i class="fab fa-instagram" id="social-network-logo"></i></a><span class="social-network-about">Instagram</span>
                    </div>

                    <div>
                        <a href="https://twitter.com/auronplay" target="_blank"><i class="fab fa-twitter" id="social-network-logo"></i></a><span class="social-network-about">Twitter</span>
                    </div>
            </div>
          </div>
        </div>

        </section>
    </article>
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
