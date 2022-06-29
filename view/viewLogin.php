<?php
  // Notificar todos los errores excepto E_NOTICE
  error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Iniciar Sesión | E-Medicine</title>
    <link rel="stylesheet" href="view/css/root-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/css/login_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/start/jquery-ui.css">
</head>

<body>
    <main>
        <div class="inicio-register">
            <img src="assets/imgs/logoEMedicine.png" alt="" class="logo" >
            <h1 class="bienvenida-register">Bienvenido a E-Medicine</h1>
        </div>

        <article>
            <section class="form-container">
                <!--<form action="controller/ctrlLogin.php" class="form-login" method="POST">-->
                    <div class="codUsuario">
                        <label for="idUsuario">Código de Usuario:</label>
                        <input type="text" name="idUsuario" id="idUsuario" placeholder="Ingrese su Código de Usuario">
                    </div>

                    <div class="password">
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
                    </div>

                    <div class="submit">
                        <a href="controller/ctrlLogin.php?accion=cambiarPass" class="submit-text">Olvidé mi contraseña</a>
                        <button type="submit" name="accion" value="enviar" id="enviar" onclick="login();">Iniciar Sesión</button>
                        <a href="controller/ctrlLogin.php?accion=crearCuenta" class="submit-text">No tengo Cuenta</a>
                    </div>

                    <button onclick="prueba();">Alerta Prueba</button>
                <!--</form>-->
            </section>
        </article>
    </main>
    <script src="view/js/funciones.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="view/js/all.min.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <script src="assets/SweetAlert/dist/sweetalert2.all.min.js"></script>
    <script src="view/js/selectCita.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
</body>
</html>