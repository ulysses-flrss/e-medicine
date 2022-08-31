<?php
// Notificar todos los errores excepto E_NOTICE
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once 'plugins/funciones.php';
require_once '../controller/ctrlUsuario.php';
$cod = "";
$dataUser = username($cod);

$datos = explode('/', $dataUser);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | E-Medicine</title>
    <?php
    links();
    ?>
    <link rel="stylesheet" href="../view/css/index-styles.css">
    <link rel="stylesheet" href="../view/css/especialidades-medicas-style.css">
</head>

<body>

    <?php menu(); ?>

    <main class="allContainer">

        <div class="bienvenida" id="container-bienvenida">
            <a href="#" class="imagen-texto">
                <div class="img-layout"><img src="../assets/imgs/imagenPrueba.png" alt="Imagen de Perfil" class="profile-picture" title="Imagen de Perfil"></div>
                <span class="editar" title="Editar Perfil"> </span>
            </a>
            <span id="bienvenida" title="Bienvenida">Bienvenido <b><?php echo $datos[1]; ?></b><span>
        </div>

        <article class="mainArticle">
            <?php
            $numAnuncios = 0;
            if (!isset($anuncio)) {
                require_once "../model/daoAnuncios.php";
            } else
                require_once "../controller/ctrlAnuncios.php";
            $dao = new DaoAnuncio();
            $anuncio = $dao->listadoAnuncios();
            foreach ($anuncio as $anun) {
                if ($numAnuncios < 5) {
                    echo
                    '
                <section class="tablonAnuncios">
                <div class="objetoTablon" id="autor">
                        <span class="autor-text" title="Escritor del Anuncio">' . $anun['nombre'] . '</span>
                </div>
                <div class="objetoTablon" id="fechaPublicacion">
                    <span class="fecha-text" title="Fecha de Publicación del Anuncio">' . $anun['fechaPublicacion'] . '</span>
                </div>
    
                <div class="objetoTablon" id="descripcion">
                    <p title="Contenido del Anuncio">
                        ' . $anun['contenidoAnuncio'] . '
                    </p>
                </div>
                </section>';
                } else {
                }

                $numAnuncios++;
            }


            ?>

            <a href="../controller/ctrlComentarios.php?idUsuario=" <?php $datos[0]; ?>></a>
        </article>
        <main class="tittleE">
        <p>Principales Especialidades:</p>
        </main>




        <main class="cards">
            
            <div class="card">
                <div class="face front">
                    <img src="../assets/imgs/corazon.png" alt="" class="imagenEspecialidad">
                    <h3>Cardiologia</h3>
                </div>
                <div class="face back">
                    <h3>Cardiologia</h3>
                    <p>La cardiología es la rama de la medicina que se encarga del estudio, diagnóstico y tratamiento de las enfermedades del corazón y del sistema circulatorio.</p>
                    <div class="link">
                        <a href="cardiologia.php">Ver mas </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img src="../assets/imgs/medicina.png" alt="" class="imagenEspecialidad">
                    <h3>Medicina General</h3>
                </div>
                <div class="face back">
                    <h3>Medicina General</h3>
                    <p>La medicina general constituye el primer nivel de atención médica y es imprescindible para la prevención, detección, tratamiento y seguimiento de las enfermedades</p>
                    <div class="link">
                        <a href="medicinageneral.php">Ver mas </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img src="../assets/imgs/idea-genial.png" alt="" class="imagenEspecialidad">
                    <h3>Neurología</h3>
                </div>
                <div class="face back">
                    <h3>Neurología</h3>
                    <p>La neurología es la especialidad médica que trata los trastornos del sistema nervioso.</p>
                    <div class="link">
                        <a href="neurologia.php">Ver mas </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img src="../assets/imgs/chico.png" alt="" class="imagenEspecialidad">
                    <h3>Pediatría</h3>
                </div>
                <div class="face back">
                    <h3>Pediatría</h3>
                    <p>La pediatría es la especialidad médica que estudia al niño y sus enfermedades.</p>
                    <div class="link">
                        <a href="pediatria.php">Ver mas </a>
                    </div>
                </div>
            </div>

            </div>
        </main>
        <main class="booton">
       <button class="btn first">
        <a href="especialidadesMedicas.php">Ver mas+</a>
       </button>
       </main>

        <?php footer(); ?>
    </main>
   

    <script src="javascript.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../view/js/sweetAlert.js"></script>
</body>

</html>