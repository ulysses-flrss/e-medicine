<?php 
  // Notificar todos los errores excepto E_NOTICE
  error_reporting(E_ALL ^ E_NOTICE); 
?>
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
    <link rel="stylesheet" href="../view/css/root-style.css">
    <link rel="stylesheet" href="../view/css/login_style.css">
</head>

<body>
    <main>
        <div class="inicio-register">
            <img src="../assets/imgs/logoEMedicine.png" alt="" class="logo" >
            <h1 class="bienvenida-register">Bienvenido a E-Medicine</h1> 
        </div>

        <article>
            <section class="form-container">
                <form action="../controller/ctrlLogin.php" class="form-login" method="POST">
                    <div class="codUsuario">
                        <label for="idUsuario">Código de Usuario:</label>
                        <input type="text" name="idUsuario" id="idUsuario" placeholder="Ingrese su Código de Usuario">
                    </div>

                    <div class="password">
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
                    </div>

                    <div class="submit">
                        <div class="password-change">
                            <a href="../controller/ctrlLogin.php?accion=cambiarPass" class="submit-text">Olvidé mi contraseña</a>
                        </div>

                        <input type="submit" name="accion" value="Enviar" class="enviar">

                        <div class="no-account">
                            <a href="../controller/ctrlLogin.php?accion=crearCuenta" class="submit-text">No tengo Cuenta</a>
                        </div>
                    </div>
                </form>
            </section>
        </article>
    </main>
</body>
</html>