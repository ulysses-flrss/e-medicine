<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Iniciar Sesión | E-Medicine</title>
    <link rel="stylesheet" href="css/root-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/css/login_style.css">
</head>

<body>
    <main>
        <div class="inicio-register">
            <img src="logoEMedicine.png" alt="" class="logo" >
            <h1 class="bienvenida-register">Bienvenido a E-Medicine</h1> 
        </div>

        <article>
            <section class="form-container">
                <form action="controller/ctrlLogin.php" class="form-login" method="POST">
                    <div class="codUsuario">
                        <label for="idUsuario">Código de Usuario:</label>
                        <input type="text" name="idUsuario" id="codUsuario" placeholder="Ingrese su Código de Usuario">
                    </div>

                    <div class="password">
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
                    </div>

                    <div class="submit">
                        <a href="controller/ctrlLogin.php?accion=cambiarPass" class="submit-text">Olvidé mi contraseña</a>
                        <input type="submit" name="accion" value="enviar">
                        <a href="controller/ctrlLogin.php?accion=crearCuenta" class="submit-text">No tengo Cuenta</a>
                    </div>
                </form>
            </section>
        </article>
    </main>
</body>
</html>