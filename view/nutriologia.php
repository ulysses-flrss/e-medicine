<?php session_start();
require_once("plugins/funciones.php");
?>

<!DOCTYPE html> 
<html> 
<head>
	<meta charset="utf-8"> 
    <?php links(); ?>
	<title>Campo de la nutriología</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/root-style.css">
    <link rel="stylesheet" href="css/especialidades-medicas-style.css">
    <link rel="stylesheet" href="css/nutriologia.css">
</head> 

<?php menu() ?>
    
 <body>
    <section>
    <article class="titulo"> 
        <h1>Campo de la Nutriología</h1>
    </article>
    <article class="rama">
        <p>La nutriología es la ciencia que se encarga del estudio del proceso de alimentación, así como sus efectos en el metabolismo, en la composición corporal y en el estado de salud. Una vez que los alimentos son consumidos, deben ser procesados por el tubo digestivo para separarlos en sus nutrientes y se absorbidos posteriormente. Tras su ingreso al organismo muchos de ellos pasan al hígado en donde son procesados por distintas reacciones con la finalidad de elaborar distintas proteínas necesarias para el buen funcionamiento de los diversos órganos y sistemas. La nutriología también estudia la forma en la que estas sustancias son eliminadas una vez utilizadas.</p>
        <img src="../assets/imgs/Nutri.jpg" alt="" class="Nutri">
        <p>Una buena alimentación es parte importante una vida saludable. De hecho existe una gran cantidad de trastornos de la salud cuyo origen se relaciona directamente con la forma en la que se alimenta quien la padece, tal es el caso de la Gota, Diabetes mellitus tipo II, Arterioesclerosis, Cálculos renales y biliares, así como algunos tipos de cáncer entre muchas otras. El consumo de alimentos saludables en las cantidades y distribución adecuada es parte importante del tratamiento de afecciones cardiometabólicas como la resistencia a la insulina, diabetes e hipertensión arterial.<p>
        <img src="../assets/imgs/Nutri1.jpg" alt="" class="Nutri1">
        <p>A pesar de la disponibilidad de una amplia variedad de fármacos diseñados para el tratamiento de diversos trastornos de la salud, la alimentación siempre será parte importante del tratamiento de las diversas enfermedades. La mayoría de las guías de práctica clínica de diversas asociaciones médicas a nivel mundial incluyen los cambios en la alimentación en el tratamiento de los trastornos de tipo cardiovascular y metabólico.<p>
    </article>
    </section>
    <?php footer() ?>
    <script src="javascript.js"></script>
</body>
</html>

