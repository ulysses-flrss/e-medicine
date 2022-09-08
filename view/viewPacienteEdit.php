<?php
// Notificar todos los errores excepto E_NOTICE
session_start();
require_once 'plugins/funciones.php';
require_once '../controller/ctrlUsuario.php';
require_once "../model/DaoPaciente.php";

$cod = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
$idUsuario = $cod;
$ubicacion = isset($_REQUEST['ubicacion'])?$_REQUEST['ubicacion']:"";
$dataUser = username($cod);

$datos = explode('/', $dataUser);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - E-Medicine</title>
    <link rel="stylesheet" href="css/register-style.css">
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
                <!-- <form id = "form" class="form-register" method="POST" onsubmit="submitForm(event)"> -->

                <?php if ($ubicacion == "admin"){
                    echo
                    "<input type='hidden' id='idUsuario' name='idUsuario' value='". $idUsuario."'>";

                    $dao = new DaoPaciente();
                    $datosPac = $dao->extraerDatos($idUsuario);
                }else{
                    echo
                    "<input type='hidden' id='idUsuario' name='idUsuario' value='". $datos[0]."'>";

                    $dao = new DaoPaciente();
                    $datosPac = $dao->extraerDatos($datos[0]);
                }
                    ?>


                    <div class="nombre div-section">
                        <label for="nom">Nombre: *</label>
                        <input type="text" name="nom" id="nom" placeholder="Ingrese su Nombre" value="<?php echo $datosPac[0] ?>">
                    </div>

                    <div class="apellido div-section">
                        <label for="ape">Apellido: *</label>
                        <input type="text" name="ape" id="ape" placeholder="Ingrese su Apellido" value="<?php echo $datosPac[1] ?>">
                    </div>

                    <div class="peso div-section">
                        <label for="pe">Peso(lb): *</label>
                        <input type="text" name="pe" id="pe" placeholder="Peso en Libras" value="<?php echo $datosPac[2] ?>">
                    </div>

                    <div class="altura div-section">
                        <label for="al">Altura(cm): *</label>
                        <input type="text" name="al" id="al" placeholder="Altura en cm" value="<?php echo $datosPac[3] ?>">
                    </div>

                    <div class="fecha div-section">
                        <label for="fn">Fecha de Nacimiento: *</label>
                        <input type="date" name="fn" id="fn" value="<?php echo $datosPac[4] ?>" disabled>
                    </div>

                    <?php echo "<input type='hidden' id='fi' name='fi' value='".$datosPac[5]."'>" ?>

                    <?php echo "<input type='hidden' id='gen' name='gen' value='".$datosPac[6]."'>" ?>


                    <div class="municipio div-section">
                        <label for="municipio">Municipio: *</label>
                        <select name="muni" id="muni">
                            <option value="<?php echo $datosPac[7] ?>">-- Actual: <?php echo $datosPac[7] ?> --</option>
                            <option value="San Salvador">San Salvador</option>
                            <option value="Aguilares">Aguilares</option>
                            <option value="Apopa">Apopa</option>
                            <option value="Ayutuxtepeque">Ayutuxtepeque</option>
                            <option value="Ciudad Delgado">Ciudad Delgado</option>
                            <option value="Cuscatancingo">Cuscatancingo</option>
                            <option value="El Paisnal">El Paisnal</option>
                            <option value="Guazapa">Guazapa</option>
                            <option value="Ilopango">Ilopango</option>
                            <option value="Mejicanos">Mejicanos</option>
                            <option value="Nejapa">Nejapa</option>
                            <option value="Panchimalco">Panchimalco</option>
                            <option value="Rosario de Mora">Rosario de Mora</option>
                            <option value="San Marcos">San Marcos</option>
                            <option value="San Martin">San Martín</option>
                            <option value="Santiago Texacuangos">Santiago Texacuangos</option>
                            <option value="Santo Tomas">Santo Tomás</option>
                            <option value="Soyapango">Soyapango</option>
                            <option value="Tonacatepeque">Tonacatepeque</option>
                        </select>
                    </div>

                    <div class = "div-section">
                        <label for="">Correo Electrónico:</label>
                        <input type="email" name="email" id="email" placeholder="Ingrese su Correo" value=" <?php echo $datosPac[8] ?> " >
                    </div>

                    <div class = "div-section last-section">
                        <label for="tel" id="telLabel">Número de Teléfono: *</label>
                        <input type="text" name="tel" id="tel" placeholder="Ejemplo: 1234-5678" value="<?php echo $datosPac[10] ?>">

                        <label for="dui" id="duiLabel">Ingrese su DUI: *</label>
                        <input type="text" name="dui" id="dui" placeholder="Ejemplo: 12345678-9." value="<?php echo $datosPac[11] ?>" disabled>
                    </div>


                    <div class = "div-section password-section">
                        <label id="pass1" for="pass">Contraseña: *</label>
                        <input type="password" name="pass" id="password" placeholder="Ingrese su Contraseña" value="<?php echo $datosPac[9] ?>">
                        <i class="fa-solid fa-eye-slash icon" id="eye1" title="Mostrar Contraseña"></i>

                        <!-- <label id="pass2" for="pass">Confirmar Contraseña: *</label>
                        <input type="password" name="pass" id="password2" placeholder="Repita su Contraseña" value="">
                        <i class="fa-solid fa-eye-slash icon" id="eye2" title="Mostrar Contraseña"></i> -->
                    </div>

                    <?php echo "<input type=hidden name='ubi' id='ubi' value='".$ubicacion."'></input>"; ?>

                        <button type="submit" class="disenoBoton" name="accion" value="Editar Datos" onclick="editarPaciente();">Editar Datos</button>
                <!-- </form> -->
            </section>
        </article>
    </main>
    <script src="../view/js/password.js"></script>
    <script src="../view/js/funciones.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../view/js/all.min.js"></script>
    <script src="../view/js/bootstrap.min.js"></script>
    <script src="../assets/SweetAlert/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
</body>
</html>