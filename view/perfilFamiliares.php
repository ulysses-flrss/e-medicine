<?php session_start();
require_once("plugins/funciones.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/familiares-style.css">
    <title>Familiares - E-Medicine</title>
    <?php links() ?>
</head>
<body>
   
    <?php menu() ?>

<main class="all-container">
    <article>
        <div class = "add-button">
            <a href="../view/perfilFamiliares-form.php">
                <img class = "add-image" src="../assets/add.png" alt="">
            </a>
        </div>
        <section class="familiar-profiles">

        <?php
        if(!isset($familiar)){
            require_once "../model/DaoFamiliar.php";
        }else
            require_once "../model/DaoFamiliar.php";
        $dao = new DaoFamiliar();
        $familiar = $dao->listadoFamiliar();
        $enlace ="<a href='controlador/ctrlCliente.php?accion=modificar&id=";
        $enlace2 ="<a href='controlador/ctrlCliente.php?accion=eliminar&id=";

        foreach($familiar as $familiar){
            echo
            '<div class="familiar-card">
            <div class="profile-picture-container">
                <img src="../imagenPrueba.png" alt="" class="familiares-profile-picture">    
            </div>
            
            <span class="familiares-profile-name">'.$familiar['nombre'].'</span>
            <div class="familiares-functions">
                <a href="../controller/ctrlFamiliar.php?accion=modificar"><i class="fas fa-edit"></i></a>
                <a href="../controller/ctrlFamiliar.php?accion=eliminar"><i class="fas fa-trash-alt"></i></a>
            </div>
            </div>';
        }
?>
           
                


            </div>
            

            
       
        </section>
    </article>
</main>

    <?php footer() ?>

<script src="javascript.js"></script>
</body>
</html>