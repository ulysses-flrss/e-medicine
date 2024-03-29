<?php 
session_start();
require_once("plugins/funciones.php");
require_once("../controller/ctrlUsuario.php");
$idUsuario = $_SESSION['codUsuario'];?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Frecuentes - E-Medicine</title>
    <link rel="stylesheet" href="css/faq-style.css">

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
        <section class="question-container">
            <div class="question-card" id="Q1">
                <div class="objeto-pregunta" id="pregunta">
                    <span>¿Por qué la página?</span>
                </div>

                <div class="objeto-pregunta" id="respuesta">
                    <span>
                    Se creó con el fin de agendar citas médicas mucho más rápido, viendo también la situación actual del mundo con la pandemia y así no arriesgar vidas humanas asistiendo hasta alguna clínica para programar una cita.
                    </span>
                </div>
            </div>

            <div class="question-card" id="Q2">
                <div class="objeto-pregunta" id="pregunta">
                    <span>¿Con qué especialidades cuentan? </span>
                </div>

                <div class="objeto-pregunta" id="respuesta">
                    <span>
                            Contamos con la especialidad de cardiologia, Medicina general y. Pediatra, Neurología, Nutrición, Citologia, Otorrinolatingologia y gastroenterologia
                    </span>
                </div>
            </div>

            <div class="question-card" id="Q3">
                <div class="objeto-pregunta" id="pregunta">
                    <span>¿Puedo programar una cita para mi hijo menor de edad o mi papá?</span>
                </div>

                <div class="objeto-pregunta" id="respuesta">
                    <span>
                        Si, hay un apartado para crear un nuevo perfil en la sección "perfil familiar" y ahí se encarga de ingresar los datos
                    </span>
                </div>
            </div>

            <div class="question-card" id="Q4">
                <div class="objeto-pregunta" id="pregunta">
                    <span>¿Cuál es el límite de citas que se puede programar?</span>
                </div>

                <div class="objeto-pregunta" id="respuesta">
                    <span>
                        Teoricamente no lo hay, la unica condición es la de no programar dos citas para la misma hora y día o tratar de programar una cita en un horario no establecido.
                    </span>
                </div>
            </div>

            
            <div class="question-card" id="Q5">
                <div class="objeto-pregunta" id="pregunta">
                    <span>¿Le seguirán dando mantenimiento a la página web?</span>
                </div>

                <div class="objeto-pregunta" id="respuesta">
                    <span>
                        Si, seguiremos dándole mantenimiento a la página web, también dependerá de las calificaciones del usuario ya que siempre buscamos el bien para todos
                    </span>
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