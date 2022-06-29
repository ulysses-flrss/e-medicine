<?php 
    error_reporting(E_ALL ^ E_NOTICE); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="view/css/root-style.css">
    <link rel="stylesheet" href="view/css/welcomePage-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido E-Medicine</title>
</head>
<body>
    <section class="content">
        <div class="image-container">
            <img src="assets/imgs/logoEMedicine.png" alt="Logo E-Medicine" class="logo">
        </div>

        <div class="content-container">
            <p class="welcome-message">
                Bievenido a E-Medicine
            </p>

            <hr>
            
            <p class="welcome-info">
                A continuación podrá elegir "Entrar como invitado", lo cual le permitirá entrar a la página pero no Programar Citas ni Registrar Familiares, por otro lado, puede Iniciar Sesión si previamente fue a la clinica y le brindaron los datos de su cuenta
            </p>

            <form action="controller/ctrlWelcome.php" method="post">
                <div class="submit">
                    <a href="controller/ctrlWelcome.php?accion=invitado">Entrar Como Invitado</a>
                </div>

                <div class="submit">
                    <a href="controller/ctrlWelcome.php?accion=inicioSesion">Iniciar Sesión</a>
                </div>
            </form>
        </div>
    </section>
</body>
</html>