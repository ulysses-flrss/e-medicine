<?php
session_start();
require_once 'plugins/funciones.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | E-Medicine</title>
    <link rel='stylesheet' href='../view/css/invitado.css'>
    <link rel="stylesheet" href="../view/css/index-style.css">

    <?php links() ?>
</head>

<body>

    <?php menu() ?>

    <main class="allContainer">

        <div class="bienvenida" id="container-bienvenida">
            <a href="#" class="imagen-texto">
                <div class="img-layout"><img src="../assets/imgs/imagenPrueba.png" alt="Imagen de Perfil" class="profile-picture" title="Imagen de Perfil"></div>
                <span class="editar" title="Editar Perfil"> </span>
            </a>
            <span id="bienvenida" title="Bienvenida">Bienvenido <b>Invitado</b><span>

        </div>

        <div class="container">

            <!-- BUTTONS (input/labels) -->
            <input type="radio" name="slider" id="slide-1-trigger" class="trigger" checked>
            <label class="btn" for="slide-1-trigger"></label>
            <input type="radio" name="slider" id="slide-2-trigger" class="trigger">
            <label class="btn" for="slide-2-trigger"></label>
            <input type="radio" name="slider" id="slide-3-trigger" class="trigger">
            <label class="btn" for="slide-3-trigger"></label>
            <input type="radio" name="slider" id="slide-4-trigger" class="trigger">
            <label class="btn" for="slide-4-trigger"></label>

            <!-- SLIDES -->
            <div class="slide-wrapper">
                <div id="slide-role">
                    <div class="slide slide-1"></div>
                    <div class="slide slide-2"></div>
                    <div class="slide slide-3"></div>
                    <div class="slide slide-4"></div>
                </div>
            </div>
        </div>
        </div>

        <article class="mainArticle" id="dSlider">
            <main class="tittleE">
                <p>Últimos Anuncios:</p>
            </main>
            <?php
            $numAnuncios = 0;
            if (!isset($anuncio)) {
                require_once "../model/daoAnuncios.php";
            } else
                require_once "../controller/ctrlAnuncios.php";
            $dao = new DaoAnuncio();
            $anuncio = $dao->listadoAnuncios();
            foreach ($anuncio as $anun) {
                if ($numAnuncios < 3) {
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

            <a href="../view/viewAnuncios.php" class="links">
                <button class="botonVerMas">
                    <span>Ver más+</span>
                </button>
            </a>
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
        <a href="../view/especialidadesMedicas.php" class="links">
            <button class="botonVerMas">
                <span>Ver mas+</span>
            </button>
        </a>
        </main>


        <?php footer() ?>

    </main>

    <script src="../view/js/funciones.js"></script>
</body>

</html>