<?php session_start();
require_once("plugins/funciones.php");
?>

<!DOCTYPE html> 
<html> 
<head>
	<meta charset="utf-8"> 
    <?php links(); ?>
	<title>Campo de la Medicina General</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/root-style.css">
    <link rel="stylesheet" href="css/especialidades-medicas-style.css">
    <link rel="stylesheet" href="css/medicinageneral.css">
</head> 

<?php menu() ?>
    
 <body>
    <section>
    <article class="titulo"> 
        <h1>Campo de la Medicina General</h1>
    </article>
    <article class="rama">
        <p>La medicina general es una rama de la medicina que no requiere especialización y trata un espectro muy amplio y variado de patologías. Su función es fundamental, ya que se centra, entre otras cosas, en la prevención de enfermedades y en garantizar un estado de salud general óptimo en los pacientes.</p>
        <img src="../assets/imgs/General.jpg" alt="" class="General">
        <p>La medicina general constituye el primer nivel de atención médica y es imprescindible para la prevención, detección, tratamiento y seguimiento de las enfermedades crónicas estabilizadas, responsabilizándose del paciente en su conjunto, para decidir su derivación a los especialistas cuando alguna patología se descompense. Lo más importante de esta disciplina médica, es que se encarga de mantener la salud en todos los aspectos, analizando y estudiando el cuerpo humano de todas las edades, sexo o enfermedades.</p>
        <img src="../assets/imgs/General1.jpg" alt="" class="General1">
        <p>La medicina de familia es multidisciplinar y abarca todas las especialidades que hay en la medicina pero, destacando que si la patología o enfermedad padecida es compleja, después de hacer un primer diagnóstico, el paciente es derivado al especialista en cuestión. El médico general o de familia puede detectar a tiempo cualquier enfermedad como, por ejemplo: Lesiones, Virus estacionales, Colesterol, Diabetes, Hipertensión, Anemia, etc.<p>
    </article>
    </section>
    <?php footer() ?>
    <script src="javascript.js"></script>
</body>
</html>

