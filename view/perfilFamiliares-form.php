<?php
session_start();
require_once("plugins/funciones.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form-familiares-style.css">
    <link rel="stylesheet" href="css/root-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap" rel="stylesheet">
    <title>Registro - E-Medicine</title>
    <?php links() ?>
</head>
<body>

    <main>
        <div class="inicio-register">
            <img src="../assets/logoEMedicine.png" alt="" class="logo">
            <h1 class="bienvenida-register">Crea Un Perfil Familiar</h1>                
        </div>
        

        <article>
            <section class="form-container">
                <form action="../controller/ctrlFamiliar.php" class="form-register" method="POST">
                    
                <div class="first-line">
                    <label for="">Nombre: *</label>
                    <input type="text" name="nombre" id="" placeholder="Ingrese su Nombre" required>
                </div>
                    
                <div class="second-line">
                    <div class="peso">
                        <label for="">Peso(lb): *</label>
                        <input type="text" name="peso" id="" placeholder="Peso en Libras"  required>
                    </div>
                    
                    <div class="altura">
                        <label for="">Altura(cm): *</label>
                        <input type="text" name="altura" id="" placeholder="Altura en cm" required>
                    </div>  
                </div>
                    

                <div class="third-line">
                    <div class="fecha">
                        <label for="">Fecha de Nacimiento: *</label>
                        <input type="date" name="fechaNac" id="" required>
                    </div>
                    
                    <div class="genre">
                        <div class="masculino">
                            <label for="masculino">Masculino</label>
                            <input type="radio" class="male" name="genero" id="masculino" value="Masculino" required>
                        </div>
                    
                        
                        <div class="female">
                            <label for="femenino">Femenino</label>
                            <input type="radio" name="genero" id="femenino" value="Femenino" required>
                        </div>

                        
                    </div>
                    
                    <div class="municipio">
                        <label for="municipio">Municipio *</label>
                        <select name="municipio" id="" required>
                            <option value="">-- Seleccione un Municipio</option>
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
                            <option value="San Martin">San Martin</option>
                            <option value="Santiago Texacuangos">Santiago Texacuangos</option>
                            <option value="Santo Tomas">Santo Tomas</option>
                            <option value="Soyapango">Soyapango</option>
                            <option value="Tonacatepeque">Tonacatepeque</option>
                        </select>
                    </div>
                </div>

                <div class="fourth-line">
                    <label for="">¿Tiene alguna Enfermedad o Alergia? Describalas (Si no tiene, omita este campo)</label>
                </div>

                <div class="fifth-line">
                    <textarea name="enfermedades" id="textarea" cols="50" rows="1" maxlength="255"></textarea>
                </div>

                    <div class="submit">
                        <input type="submit" name="accion" value="Crear Perfil">
                    </div>
                </form>
            </section>
        </article>
    </main>

    <?php footer() ?>
    <script src="view/js/password.js"></script>
</body>
</html>