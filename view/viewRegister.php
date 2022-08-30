<?php
session_start();
require_once 'plugins/funciones.php'; ?>
<!DOCTYPE html>
<html lang="en">
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
                <!--<form action="../controller/ctrlPaciente.php" class="form-register" method="POST">-->
                    <div class="nombre">
                        <label for="nom">Nombre: *</label>
                        <input type="text" name="nom" id="nom" placeholder="Ingrese su Nombre" required value="Cristiano">
                    </div>

                    <div class="apellido">
                        <label for="ape">Apellido: *</label>
                        <input type="text" name="ape" id="ape" placeholder="Ingrese su Apellido" required value="Ronaldo">
                    </div>

                    <div class="peso">
                        <label for="pe">Peso(lb): *</label>
                        <input type="text" name="pe" id="pe" placeholder="Peso en Libras"  required value="180">
                    </div>

                    <div class="altura">
                        <label for="al">Altura(cm): *</label>
                        <input type="text" name="al" id="al" placeholder="Altura en cm" required value="190">
                    </div>

                    <div class="fecha">
                        <label for="fn">Fecha de Nacimiento: *</label>
                        <input type="date" name="fn" id="fn" required>
                    </div>

                    <div class="genre">
                        <label for="">Género: *</label>
                        <div class="male">
                            <label for="masculino" class="genero">Masculino: </label>
                            <input type="radio" name="gen" id="masculino" value="masculino" required checked>
                        </div>

                        <div class="female">
                            <label for="femenino" class="genero">Femenino: </label>
                            <input type="radio" name="gen" id="femenino" value="femenino" required>
                        </div>
                    </div>

                    <div class="municipio">
                        <label for="municipio">Municipio: *</label>
                        <select name="muni" id="muni" required>
                            <option value="">-- Seleccione un Municipio --</option>
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

                    <div>
                        <label for="">Correo Electrónico:</label>
                        <input type="email" name="email" id="email" placeholder="Ingrese su Correo" value="elbicho@crgol.com">
                    </div>

                    <div>
                        <label for="pass">Contraseña: *</label>
                        <input type="password" name="pass" id="password" placeholder="Ingrese su Contraseña" required value="Aymimadreelbicho">
                        <i class="fa-solid fa-eye-slash icon" id="eye1" title="Mostrar Contraseña"></i>

                        <label for="pass">Confirmar Contraseña: *</label>
                        <input type="password" name="pass" id="password2" placeholder="Repita su Contraseña" required value="Aymimadreelbicho">
                        <i class="fa-solid fa-eye-slash icon" id="eye2" title="Mostrar Contraseña"></i>
                    </div>

                    <div>
                        <label for="tel">Número de Teléfono: *</label>
                        <input type="text" name="tel" id="tel" placeholder="Ejemplo: 1234-5678." required value="7777-7777">
                    </div>

                    <div>
                        <label for="tel">Ingrese su DUI: *</label>
                        <input type="text" name="dui" id="dui" placeholder="Ejemplo: 12345678-9." required value="07777777-7">
                    </div>

                    <div class="submit">
                        <a href="../index.php" class="account">Ya tengo Cuenta</a>
                        <button type="submit" name="accion" value="registrarUser" onclick="registrarUser();">Registrarse</button>
                    </div>
                <!--</form>-->
            </section>
        </article>
    </main>
    <script src="../view/js/password.js"></script>
    <script src="../view/js/funciones.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../view/js/all.min.js"></script>
    <script src="../view/js/bootstrap.min.js"></script>
    <script src="../assets/SweetAlert/dist/sweetalert2.all.min.js"></script>
    <script src="../view/js/selectCita.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
</body>
</html>