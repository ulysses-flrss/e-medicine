<?php session_start();
    require_once("plugins/funciones.php");
    require_once '../controller/ctrlUsuario.php';
    $idPaciente = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
    $sesion = isset($_REQUEST['sesion'])?$_REQUEST['sesion']:"";
    if ($sesion == "") {
        header('location:../index.php');
    }else{
        $dataUser = username($idPaciente);

        $datos = explode('/', $dataUser);

        $codPaciente = $datos[0];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/familiares-style.css">
    <title>Familiares | E-Medicine</title>
    <?php links() ?>
</head>
<body>
   
    <?php menu() ?>

<main class="all-container">
    <article>
        
        <section class="familiar-profiles">

        <?php
        if(!isset($familiar)){
            require_once "../model/DaoFamiliar.php";
        }else
            require_once "../model/DaoFamiliar.php";
        $dao = new DaoFamiliar();
        $familiar = $dao->listadoFamiliar($codPaciente);
        foreach($familiar as $familia){
            echo
            "<div class='familiar-card'>
            <div class='profile-picture-container'>
                <img src='../assets/imgs/imagenPrueba.png' alt='' class='familiares-profile-picture'>    
            </div>
            
            <span class='familiares-profile-name'>".$familia['nombre']."</span>
            <div class='familiares-functions'>
                <a href='../controller/ctrlFamiliar.php?accion=modificar&idPerfil=".$familia['idPerfil']."'><button class='btn btn-primary' id='modificar'><i class='fas fa-edit' id='iconEditar'></i> Editar</button></a>
                <button class='btn btn-danger' id='eliminar' onclick='eliminarPerfil(\"".$familia['idPerfil']."\",\"".$datos[0]."\");'><i class='fas fa-trash' id='iconTrash'></i> Eliminar</button>
            </div>
            </div>";   
        }
        ?>
        
            <div class = "add-button">
                <a href="../view/perfilFamiliares-form.php">
                <i class="fa-solid fa-plus" id="add"></i>
                </a>
            </div>

        </section>
    </article>
    <?php footer() ?>
</main>

    <script src="javascript.js"></script>
    <script src="js/perfil.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="../assets/SweetAlert/dist/sweetalert2.all.min.js"></script>
</body>
</html>