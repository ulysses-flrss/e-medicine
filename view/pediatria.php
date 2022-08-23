<?php session_start();
require_once("plugins/funciones.php");
?>

<!DOCTYPE html> 
<html> 
<head>
	<meta charset="utf-8"> 
    <?php links(); ?>
	<title>Campo de la Pediatría</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/root-style.css">
    <link rel="stylesheet" href="css/especialidades-medicas-style.css">
    <link rel="stylesheet" href="css/pediatria.css">
</head> 

<?php menu() ?>
    
 <body>
    <section>
    <article class="titulo"> 
        <h1>Campo de la Pediatría</h1>
    </article>
    <article class="rama">
        <>La pediatría es la rama de la medicina que promueve, vigila y cuida de la salud de las personas durante la fase de desarrollo. Esta etapa va desde el nacimiento hasta la adolescencia. Los profesionales de esta área realizan diagnósticos y tratamiento de las patologías propias de estas edades, además coordinan actividades de promoción y prevención que permiten realizar una asistencia médica integral y si es necesario brindan atención continúa cuando se encuentra alguna anormalidad en el desarrollo.</p>
        <img src="../assets/imgs/Pedia.jpg" alt="" class="Pedia">
        <p>Es importante tener en cuenta que, para garantizar un desarrollo óptimo, padres y profesionales deben trabajar como equipo. Por ejemplo, es responsabilidad de los padres asistir a los controles médicos y a los programas de promoción y prevención. De esta forma, se facilita la detección temprana de enfermedades que ponen en riesgo la vida de los niños.<p>
        <img src="../assets/imgs/Pedia1.jpg" alt="" class="Pedia1">
        <p>Se debe tener presente que el tratamiento integral incluye un seguimiento meticuloso y constante. Así, se disminuye la probabilidad de mortalidad y de la aparición de complicaciones. Sin embargo, para que se tenga éxito, es indispensable que los padres sean adherentes con el tratamiento. Es decir, seguir las indicaciones del profesional y procurar mantener una relación de confianza y apertura. Para que esta relación padres-profesional funcione, el pediatra establecerá una comunicación directa, clara y amable. Los pediatras están capacitados para responder inquietudes y para dar indicaciones a los padres sobre aspectos importantes. Por ejemplo, los pediatras deben entrenar a los familiares en la detección de señales de alarma. Así, ellos sabrán cuando deben llevar al menor a urgencias médicas.<p>
    </article>
    </section>
    <?php footer() ?>
    <script src="javascript.js"></script>
</body>
</html>

