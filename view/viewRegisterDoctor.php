<?php
    session_start();
    require_once 'plugins/funciones.php';
    $ubicacion = isset($_REQUEST['ubicacion'])?$_REQUEST['ubicacion']:"";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - E-Medicine</title>
    <?php $location = "dentro";  links($location);?>
    <link rel="stylesheet" href="../view/css/register-style.css">
    <?php links() ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/start/jquery-ui.css">
</head>
<body class='body'>
    <main>
        <div class="inicio-register">
            <img src="../assets/imgs/logoEMedicine.png" alt="" class="logo-register" id="logo">
            <h1 class="bienvenida-register">Bienvenido a E-Medicine</h1>
        </div>

        <article>
            <section class="form-container">
                <form id = "form" class="form-register" method="POST" onsubmit="submitForm(event)">
                <?php  echo "<input type='hidden' name='ubi' id='ubi' value='".$ubicacion."'>";  ?>
                    <div class="nombre div-section">
                        <label for="nom">Nombre: *</label>
                        <input type="text" name="nom" id="nom" placeholder="Ingrese su Nombre" value='Elizabeth Damaris'>
                    </div>

                    <div class="apellido div-section">
                        <label for="ape">Apellido: *</label>
                        <input type="text" name="ape" id="ape" placeholder="Ingrese su Apellido" value='Granadino Rivas'>
                    </div>

                    <div class="fecha div-section">
                        <label for="fn">Fecha de Nacimiento: *</label>
                        <input type="date" name="fn" id="fn" value='2000-11-07'>
                    </div>

                    <div class="genre div-section">
                        <label for="">Género: *</label>
                        <div class="male">
                            <label for="masculino" class="genero" checked>Masculino: </label>
                            <input type="radio" name="gen" id="masculino" value="masculino">
                        </div>

                        <div class="female">
                            <label for="femenino" class="genero">Femenino: </label>
                            <input type="radio" name="gen" id="femenino" value="femenino" checked>
                        </div>
                    </div>

                    <div class="municipio">
                        <label for="especialidad-medica">Especialidad Médica:</label>
                        <select name="em" id="em" class="selectDinamic" class="municipio">
                            <option value="">-- Seleccione una Especialidad --</option>
                        </select>
                    </div>

                    <div class = "div-section">
                        <label for="">Correo Electrónico:</label>
                        <input type="email" name="email" id="email" placeholder="Ingrese su Correo" value="nuevo@correo.com">
                    </div>

                    <div class = "div-section password-section">
                        <label id="pass1" for="pass">Contraseña: *</label>
                        <input type="password" name="pass" id="password" placeholder="Ingrese su Contraseña" value="123damaris">
                        <i class="fa-solid fa-eye-slash icon" id="eye1" title="Mostrar Contraseña"></i>

                        <label id="pass2" for="pass">Confirmar Contraseña: *</label>
                        <input type="password" name="pass" id="password2" placeholder="Repita su Contraseña" value="123damaris">
                        <i class="fa-solid fa-eye-slash icon" id="eye2" title="Mostrar Contraseña"></i>
                    </div>

                    <div class = "div-section last-section">
                        <label for="tel" id="telLabel">Número de Teléfono: *</label>
                        <input type="text" name="tel" id="tel" placeholder="Ejemplo: 1234-5678" value="7062-0796">

                        <label for="dui" id="duiLabel">Ingrese su DUI: *</label>
                        <input type="text" name="dui" id="dui" placeholder="Ejemplo: 12345678-9." value="77458123-1">
                    </div>

                    <div class='submit'>
                        <button type='submit' class='disenoBoton' name='accion' value='registrarUser' onclick='registrarUser();'>Registrarse</button>
                    </div>
                </form>
            </section>
        </article>
    </main>
    <script src="../view/js/password.js"></script>
    <script src="../view/js/comprobarCita.js"></script>
    <script src="../view/js/funciones.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../view/js/all.min.js"></script>
    <script src="../view/js/bootstrap.min.js"></script>
    <script src="../assets/SweetAlert/dist/sweetalert2.all.min.js"></script>
    <script src="../view/js/selectCita.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.selectDinamic');
            listarEspecial();
        });

        $("#em").change(function() {
            let idEspecialidad = $("#em").val();
            listarDoctor(idEspecialidad);
        });

        $(document).ready(function() {
            let idUsuario = $("#idUsuario").val();
            let nameUsuario = $("#nameUsuario").val();
            listarFamiliar(idUsuario, nameUsuario);
        });

        $("#idPerfil").change(function() {
            let idPerfil = $("#idPerfil").val();
            let idUsuario = $("#idUsuario").val();
            listarDatosFamiliar(idPerfil, idUsuario);
        });

        $("#citaFamiliar").change(function(){
            let idUsuario = $("#idUsuario").val();
            listarDatosPaciente(idUsuario);
        })
    </script>
</body>
</html>