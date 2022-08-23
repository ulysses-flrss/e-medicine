<?php session_start();
require_once("plugins/funciones.php");
?>

<!DOCTYPE html> 
<html> 
<head>
	<meta charset="utf-8"> 
    <?php links(); ?>
	<title>Campo de la Gastroenterología</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/root-style.css">
    <link rel="stylesheet" href="css/especialidades-medicas-style.css">
    <link rel="stylesheet" href="css/gastroenterologia.css">
</head> 

<?php menu() ?>
    
 <body>
    <section>
    <article class="titulo"> 
        <h1>Campo de la Gastroenterología</h1>
    </article>
    <article class="rama">
        <p>La gastroenterología es la rama de la medicina que se encarga del diagnóstico, tratamiento y prevención de los trastornos que afectan al aparato gastrointestinal. Los médicos que ejercen la gastroenterología se conocen como médicos gastroenterólogos. La gastroenterología cuenta además con una subespecialidad que es la hepatología, esta se dedica específicamente a los trastornos que afectan al hígado.</p>
        <img src="../assets/imgs/Gastro.jpg" alt="" class="Gastro">
        <p>El gastroenterólogo es el especialista que trata enfermedades o alteraciones en todo el tracto gastrointestinal, que va desde la boca hasta el ano, siendo el responsable por tratar diversas enfermedades relacionadas con la digestión, dolores de estómago, cólicos intestinales, estreñimiento y diarrea. El gastroenterólogo puede trabajar en clínicas u hospitales, realizar consultas, exámenes recetar medicamentos y orientar sobre qué hacer para mantenerse saludable y con un buen funcionamiento de los órganos del abdomen.</p>
        <img src="../assets/imgs/Gastro1.jpg" alt="" class="Gastro1">
        <p>Las principales enfermedades tratadas por el gastroenterólogo son: <b>Enfermedad por reflujo gastroesofágico</b>, que produce acidez, dolor y quemazón en la región del estómago. <b>Gastritis y úlcera gástrica</b>, que causan quemazón y dolor en el estómago, además de náuseas y mala digestión; <b>Piedra en la vesícula:</b> que puede provocar dolor y vómitos después de comer; <b>Hepatitis y cirrosis</b>, que son enfermedades graves del hígado que pueden producir ojos amarillos, vómitos, sangrado y aumento de la tamaño del abdomen.</p>
    </article>
    </section>
    <?php footer() ?>
    <script src="javascript.js"></script>
</body>
</html>

