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
    <link rel="stylesheet" href="../view/css/root-style.css">
    <link rel="stylesheet" href="../view/css/login_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/start/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/start/jquery-ui.css">
</head>

<body>
    <main>
        <div class="inicio-register">
            <img src="../assets/imgs/logoEMedicine.png" alt="" class="logo" >
            <h1 class="bienvenida-register">Bienvenido a E-Medicine</h1>
        </div>

        <article>
            <section class="form-container">
                <form action="" id="formularioE">
                    <div class="form-login">
                        <div class="codUsuario">
                            <label for="idUsuario">Código de Usuario:</label>
                            <input type="text" name="idUsuario" id="idUsuario" placeholder="Ingrese su Código de Usuario">
                        </div>

                        <div class="password">
                            <label for="password">Contraseña:</label>
                            <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
                        </div>

                        <div class="submit">
                            <!--<div class="password-change">
                                <a href="../controller/ctrlLogin.php?accion=cambiarPass" class="submit-text">Olvidé mi contraseña</a>
                            </div>-->

                            <button type="submit" name="accion" value="enviar" class="enviar" id="enviar" onclick="login();">Iniciar Sesión</button>

                            <div class="no-account">
                                <a href="../view/viewRegister.php" class="submit-text">No tengo Cuenta</a>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </article>
    </main>
    <script src="../view/js/funciones.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../view/js/all.min.js"></script>
    <script src="../view/js/bootstrap.min.js"></script>
    <script src="../assets/SweetAlert/dist/sweetalert2.all.min.js"></script>
    <script src="../view/js/selectCita.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
</body>
</html>