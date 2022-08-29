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
    <link rel="stylesheet" href="../view/css/index-style.css">
    <link rel="stylesheet" href="../view/css/especialidades-medicas-style.css">
</head>

<body>

    <?php menu();?>

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
        if(!isset($anuncio)){
            require_once "../model/daoAnuncios.php";
        }else
            require_once "../controller/ctrlAnuncios.php";
        $dao = new DaoAnuncio();
        $anuncio=$dao->listadoAnuncios();
        foreach ($anuncio as $anun) {
            if ($numAnuncios < 5) {
                echo
                '
                <section class="tablonAnuncios">
                <div class="objetoTablon" id="autor">
                        <span class="autor-text" title="Escritor del Anuncio">'.$anun['nombre'].'</span>
                </div>
                <div class="objetoTablon" id="fechaPublicacion">
                    <span class="fecha-text" title="Fecha de Publicación del Anuncio">'.$anun['fechaPublicacion'].'</span>
                </div>
    
                <div class="objetoTablon" id="descripcion">
                    <p title="Contenido del Anuncio">
                        '.$anun['contenidoAnuncio'].'
                    </p>
                </div>
                </section>';
            } else {

            }

            $numAnuncios++;
            
        }

       
    ?>

        <a href="../controller/ctrlComentarios.php?idUsuario=" <?php $datos[0]; ?> ></a>
        </article>

        <article>
        <a href="" class="div-especialidades" title="Cardiología">
                <img src="../assets/imgs/corazon.png" alt="" class="imagenEspecialidad">
                <div class="especialidadNombre">Cardiología</div>
                <div class="especialidadDescripcion">La cardiología es la rama de la medicina que se encarga del estudio, diagnóstico y tratamiento de las enfermedades del corazón y del sistema circulatorio. Es médica, pero no quirúrgica; los especialistas en el abordaje quirúrgico del corazón son el cirujano cardiaco o el cirujano cardiovascular.</div>
            </a>

            <a href="" class="div-especialidades" title="Medicina General">
                <img src="../assets/imgs/medicina.png" alt="" class="imagenEspecialidad">
                <div class="especialidadNombre" title="Medicina General">Medicina General</div>
                <div class="especialidadDescripcion">La medicina general constituye el primer nivel de atención médica y es imprescindible para la prevención, detección, tratamiento y seguimiento de las enfermedades crónicas estabilizadas, responsabilizándose del paciente en su conjunto, para decidir su derivación a los especialistas cuando alguna patología se descompense.</div>
            </a>

            <a href="" class="div-especialidades" title="Neurología">
                <img src="../assets/imgs/idea-genial.png" alt="" class="imagenEspecialidad">
                <div class="especialidadNombre" title="Neurología">Neurología</div>
                <div class="especialidadDescripcion">La neurología es la especialidad médica que trata los trastornos del sistema nervioso.​ Específicamente se ocupa de la prevención, diagnóstico, tratamiento y rehabilitación de todas las enfermedades que involucran al sistema nervioso central, sistema nervioso periférico y el sistema nervioso autónomo.</div>
            </a>

            <a href="" class="div-especialidades" title="Pediatría">
                <img src="../assets/imgs/chico.png" alt="" class="imagenEspecialidad">
                <div class="especialidadNombre" title="Pediatría">Pediatría</div>
                <div class="especialidadDescripcion">La pediatría es la especialidad médica que estudia al niño y sus enfermedades. El término procede del griego paidos e iatrea,   pero su contenido es mucho mayor que la curación de las enfermedades de los niños, ya que la pediatría estudia tanto al niño sano como al enfermo.</div>
            </a>

            <a href="" class="div-especialidades" title="Otorrinolaringología">
                <img src="../assets/imgs/garganta.png" alt="" class="imagenEspecialidad">
                <div class="especialidadNombre">Otorrinolaringología</div>
                <div class="especialidadDescripcion">Es la especialidad médico-quirúrgica que se encarga del estudio de las enfermedades del oído, tanto auditivas como del equilibrio, de las vías respiratorias superiores y parte de las inferiores</div>
            </a>
        </article>

        <?php footer(); ?>
    </main>

    <script src="javascript.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../view/js/sweetAlert.js"></script>
</body>

</html>
