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
</head>
<body class='body'>
    <main>
        <div class="inicio-register">
            <img src="../assets/imgs/logoEMedicine.png" alt="" class="logo">
            <h1 class="bienvenida-register">Bienvenido a E-Medicine</h1>                
        </div>

        <article>
            <section class="form-container">
                <form action="../controller/ctrlPaciente.php" class="form-register" method="POST">

                <div class="first-line">
                    <div class="nombre">
                        <label for="nom">Nombre: *</label>
                        <input type="text" name="nom" id="" placeholder="Ingrese su Nombre" required>
                    </div>
                    <div class="apellido">
                        <label for="ape">Apellido: *</label>
                        <input type="text" name="ape" id="" placeholder="Ingrese su Apellido" required>
                    </div>
                </div>
                    
                <div class="third-line">
                    <div class="peso">
                        <label for="pe">Peso(lb): *</label>
                        <input type="text" name="pe" id="" placeholder="Peso en Libras"  required>
                    </div>
                    
                    <div class="altura">
                        <label for="al">Altura(cm): *</label>
                        <input type="text" name="al" id="" placeholder="Altura en cm" required>
                    </div>  
                </div>
                    

                <div class="fourth-line">
                    <div class="fecha">
                        <label for="fn">Fecha de Nacimiento: *</label>
                        <input type="date" name="fn" id="" required>
                    </div>
                    
                    <div class="genre">
                        <label for="">G??nero: *</label>
                        <div class="male">
                            <label for="masculino">Masculino: </label>
                            <input type="radio" name="gen" id="masculino" value="masculino" required>
                        </div>
                        
                        <div class="female">
                            <label for="femenino">Femenino: </label>
                            <input type="radio" name="gen" id="femenino" value="femenino" required>
                        </div>

                        
                    </div>
                    
                    <div class="municipio">
                        <label for="municipio">Municipio: *</label>
                        <select name="muni" id="" required>
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
                            <option value="San Martin">San Mart??n</option>
                            <option value="Santiago Texacuangos">Santiago Texacuangos</option>
                            <option value="Santo Tomas">Santo Tom??s</option>
                            <option value="Soyapango">Soyapango</option>
                            <option value="Tonacatepeque">Tonacatepeque</option>
                        </select>
                    </div>
                </div>

                    <div class="fifth-line">
                        <label for="">Correo Electr??nico:</label>
                        <input type="email" name="email" id="" placeholder="Ingrese su Correo">
                    </div>

                    <div class="fourth-line">
                        <label for="pass">Contrase??a: *</label>
                        <input type="password" name="pass" id="password" placeholder="Ingrese su Contrase??a" required>
                        <img src="../assets/imgs/eye.png" alt="" class="show-hide" id="eye1">
                    
                        <label for="pass">Confirmar Contrase??a: *</label>
                        <input type="password" name="pass" id="password2" placeholder="Repita su Contrase??a" required>
                        <img src="../assets/imgs/eye.png" alt="" class="show-hide" id="eye2">
                    </div>

                    <div class="seventh-line">
                        <label for="tel">N??mero de Tel??fono: *</label>
                        <input type="text" name="tel" id="tel" placeholder="Ejemplo: 1234-5678." required>
                    </div>

                    <div class="submit">
                        <a href="../index.php" class="account">Ya tengo Cuenta</a>
                        <input type="submit" name="accion" value="Registrarse">
                    </div>
                </form>
            </section>
        </article>
    </main>
    <script src="../view/js/password.js"></script>
</body>
</html>