<?php session_start();
require_once("plugins/funciones.php");
?>

<!DOCTYPE html> 
<html> 
<head>
	<meta charset="utf-8"> 
    <?php links(); ?>
	<title>Campo de la Ginecología</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/root-style.css">
    <link rel="stylesheet" href="css/especialidades-medicas-style.css">
    <link rel="stylesheet" href="css/ginecologia.css">
</head> 

<?php menu() ?>
    
 <body>
    <section>
    <article class="titulo"> 
        <h1>Campo de la Ginecología</h1>
    </article>
    <article class="rama">
        <p>La ginecología es una parte de la medicina que se ocupa de la salud femenina relacionada con el aparato reproductor femenino y de las mamas. Estudia y trata todo lo relacionado con la vagina, útero y ovarios. Tiene una especialidad que es la obstetricia que se encarga del embarazo, el parto y el puerperio (periodo posterior al parto). Hoy en día es muy frecuente que sea obstetra.</p>
        <img src="../assets/imgs/Gine.jpg" alt="" class="Gine">
        <p>La ginecología también se encarga del diagnóstico y tratamiento de enfermedades ginecológicas, como el cáncer ginecológico, la endometriosis, la, incontinencia urinaria, las infecciones vaginales, miomas o fibromas, quistes en los ovarios o el útero en retroversión entre otras enfermedades. La ginecología también trata los problemas hormonales que pueden presentarse durante la etapa reproductiva de la mujer, la menstruación y la menopausia.</p>
        <img src="../assets/imgs/Gine1.jpg" alt="" class="Gine1">
        <p>Aunque estés completamente sana y no tengas ningún síntoma, es importante que te realices controles de ginecología, principalmente para realizar algunos estudios de rutina que pueden detectar precozmente algunas enfermedades, como alteraciones en las células del cuello uterino y el cáncer de mama.</p>
    </article>
    </section>
    <?php footer() ?>
    <script src="javascript.js"></script>
</body>
</html>

