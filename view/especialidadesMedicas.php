<?php session_start();
require_once("plugins/funciones.php");
?>

<!DOCTYPE html> 
<html> 
<head>
	<meta charset="utf-8"> 
	<title>Especialidades de medicos.</title>
    <?php links() ?>
    <link rel="stylesheet" href="css/especialidades-medicas-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/root-style.css">
</head> 

<!--INICIO DEL MENÚ-->
    <?php menu() ?>
    <!--FIN DEL MENÚ-->

 <body> 
 	<main class="all-container">
         <article>
         <section class="especialidadesMedica">
         
            <a href="cardiologia.php" class="div-especialidades" title="Cardiología">
                <img src="../assets/imgs/corazon.png" alt="" class="imagenEspecialidad">
                <div class="especialidadNombre">Cardiología</div>
                <div class="especialidadDescripcion">La cardiología es la rama de la medicina que se encarga del estudio, diagnóstico y tratamiento de las enfermedades del corazón y del sistema circulatorio. Es médica, pero no quirúrgica; los especialistas en el abordaje quirúrgico del corazón son el cirujano cardiaco o el cirujano cardiovascular.</div>
            </a>

            <a href="medicinageneral.php" class="div-especialidades" title="Medicina General">
                <img src="../assets/imgs/medicina.png" alt="" class="imagenEspecialidad">
                <div class="especialidadNombre" title="Medicina General">Medicina General</div>
                <div class="especialidadDescripcion">La medicina general constituye el primer nivel de atención médica y es imprescindible para la prevención, detección, tratamiento y seguimiento de las enfermedades crónicas estabilizadas, responsabilizándose del paciente en su conjunto, para decidir su derivación a los especialistas cuando alguna patología se descompense.</div>
            </a>

            <a href="neurologia.php" class="div-especialidades" title="Neurología">
                <img src="../assets/imgs/idea-genial.png" alt="" class="imagenEspecialidad">
                <div class="especialidadNombre" title="Neurología">Neurología</div>
                <div class="especialidadDescripcion">La neurología es la especialidad médica que trata los trastornos del sistema nervioso.​ Específicamente se ocupa de la prevención, diagnóstico, tratamiento y rehabilitación de todas las enfermedades que involucran al sistema nervioso central, sistema nervioso periférico y el sistema nervioso autónomo.</div>
            </a>

            <a href="pediatria.php" class="div-especialidades" title="Pediatría">
                <img src="../assets/imgs/chico.png" alt="" class="imagenEspecialidad">
                <div class="especialidadNombre" title="Pediatría">Pediatría</div>
                <div class="especialidadDescripcion">La pediatría es la especialidad médica que estudia al niño y sus enfermedades. El término procede del griego paidos e iatrea,   pero su contenido es mucho mayor que la curación de las enfermedades de los niños, ya que la pediatría estudia tanto al niño sano como al enfermo.</div>
            </a>
            
            
            <a href="nutriologia.php" class="div-especialidades" title="Nutriología">
                <img src="../assets/imgs/hoja.png" alt="" class="imagenEspecialidad">
                <div class="especialidadNombre">Nutriología</div>
                <div class="especialidadDescripcion">La nutriología es la ciencia que estudia el proceso de alimentación y sus efectos en el metabolismo, en el estado de salud y en la composición corporal y su relación con los procesos químicos. </div>
            </a>

            <a href="otorrinolaringologia.php" class="div-especialidades" title="Otorrinolaringología">
                <img src="../assets/imgs/garganta.png" alt="" class="imagenEspecialidad">
                <div class="especialidadNombre">Otorrinolaringología</div>
                <div class="especialidadDescripcion">Es la especialidad médico-quirúrgica que se encarga del estudio de las enfermedades del oído, tanto auditivas como del equilibrio, de las vías respiratorias superiores y parte de las inferiores</div>
            </a>

            <a href="ginecologia.php" class="div-especialidades" title="Ginecología">
                <img src="../assets/imgs/ginecologia.png" alt="" class="imagenEspecialidad">
                <div class="especialidadNombre">Ginecología</div>
                <div class="especialidadDescripcion">La ginecología es una especialidad de la medicina que se centra en el estudio del sistema reproductor femenino.</div>
            </a>

            <a href="gastroenterologia.php" class="div-especialidades" title="Gastroenterología">
                <img src="../assets/imgs/estomago.png" alt="" class="imagenEspecialidad">
                <div class="especialidadNombre">Gastroenterología</div>
                <div class="especialidadDescripcion">La gastroenterología es el estudio de la función normal y las enfermedades del esófago, estómago, intestino delgado, colon y recto, páncreas, vesícula biliar, conductos biliares e hígado.</div>
            </a>

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