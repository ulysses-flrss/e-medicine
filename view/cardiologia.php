<?php session_start();
require_once("plugins/funciones.php");
?>

<!DOCTYPE html> 
<html> 
<head>
	<meta charset="utf-8"> 
    <?php links(); ?>
	<title>Campo de la Cardiología</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/root-style.css">
    <link rel="stylesheet" href="css/especialidades-medicas-style.css">
    <link rel="stylesheet" href="css/cardiologia.css">
</head> 

<?php menu() ?>
    
 <body>
    <section>
    <article class="titulo"> 
        <h1>Campo de la Cardiología</h1>
    </article>
    <article class="rama">
        <p>Los cardiólogos son médicos que se especializan en el diagnóstico y tratamiento de las enfermedades del corazón y los vasos sanguíneos: el aparato cardiovascular. También se puede consultar a un cardiólogo para saber más sobre los factores de riesgo cardiovascular y averiguar las medidas que pueden tomarse para mejorar la salud cardiovascular.</p>
        <img src="../assets/imgs/Cardio.jpg" alt="" class="Cardio">
        <p>Cuando uno se enfrenta a una enfermedad compleja como una enfermedad del corazón, es importante encontrar al especialista más indicado. Un diagnóstico de enfermedad cardíaca o vascular a menudo comienza con el médico de atención primaria, quien deriva al paciente a un cardiólogo. El cardiólogo evalúa los síntomas y los antecedentes médicos y puede recomendar estudios que permitan realizar un diagnóstico más preciso. A continuación, el cardiólogo decide si puede tratar la enfermedad él mismo con medicamentos u otros tratamientos disponibles. Si el cardiólogo decide que el paciente necesita cirugía, lo derivará a un cirujano cardiovascular, quien se especializa en operaciones del corazón, los pulmones y los vasos sanguíneos. El paciente permanece bajo el cuidado del cardiólogo incluso cuando es derivado a otros especialistas.</p>
        <img src="../assets/imgs/Cardio1.jpg" alt="" class="Cardio1">
        <p>La cardiología es un campo complejo, por eso muchos cardiólogos se especializan en diferentes áreas. Todos los cardiólogos son cardiólogos clínicos que se dedican al diagnóstico, el tratamiento farmacológico (uso de medicamentos) y la prevención de las enfermedades cardiovasculares. Algunos cardiólogos clínicos se especializan en cardiología pediátrica, que es el diagnóstico y tratamiento de los problemas del corazón en los niños. Los cardiólogos clínicos que tratan sólo a pacientes adultos se especializan en cardiología de adultos. Otros cardiólogos clínicos pueden especializarse en procedimientos intervencionistas (angioplastia con balón y colocación de stents), ecocardiografía y electrofisiología.</p>
    </article>
    </section>
    <?php footer() ?>
    <script src="javascript.js"></script>
</body>
</html>

