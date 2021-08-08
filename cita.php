<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programar Cita - E-Medicine</title>
    <link rel="stylesheet" href="css/cita-style.css">
    <?php require("php/default-head.php") ?>
</head>
<body>
<?php require("php/menu-file.php") ?>

    <main class="all-container">
        <article>
            <section class="form-container">
                <form action="">
                
                    <div class="perfil">
                        <label for="">Seleccione Perfil:</label>
                        <select name="" id="">
                            <option value="">Perfil 1</option>
                            <option value="">Perfil 2</option>
                            <option value="">Perfil 2</option>
                        </select>
                    </div>

                    <div class="first-line">
                        <label for="">Nombre:</label>
                        <input type="text" name="" id="" placeholder="Ingrese su Nombre">
                    </div>
                        
                    <div class="second-line">
                        <div class="peso">
                            <label for="">Peso(lb):</label>
                            <input type="text" name="" id="" placeholder="Peso en Libras">
                        </div>

                        <div class="fecha">
                            <label for="">Fecha de Nacimiento:</label>
                            <input type="date" name="" id="">
                        </div> 
                        
                        <div class="altura">
                            <label for="">Altura(cm):</label>
                            <input type="text" name="" id="" placeholder="Altura en cm">    
                        </div>  
                    </div>
                        
    
                    <div class="third-line">
                        <div class="especialidad-medica">
                            <label for="especialidad-medica">Especialidad Médica</label>
                            <select name="especialidad-medica" id="">
                                <option value="">-- Seleccione una Especialidad</option>
                                <option value="Neurología">Neurología</option>
                                <option value="Cardiología">Cardiología</option>
                                <option value="Cardiología">Cardiología</option>
                                <option value="Cardiología">Cardiología</option>
                            </select>
                        </div>

                        <div class="fecha">
                            <label for="">Fecha de Cita:</label>
                            <input type="date" name="" id="">
                        </div>  

                        <div class="doctor">
                            <label for="doctor">Elija el doctor</label>

                            <select name="doctor" id="">
                                <option value="">Ulises Adonay Flores Martínez</option>
                                <option value="">José David López Pacas</option>
                                <option value="">José Guillermo Granadino Rivas</option>
                                <option value="">Jefferson Alexis Castro Castro</option>
                            </select>
                        </div>
                    </div>

                    <div class="fourth-line">
                        <div class="enfermedades">
                            <label for="">Enfermedades Crónicas y Alergias (sino tiene ninguna deje vació este campo)</label>
                            <input type="text">
                        </div>
                    </div>

                    <div class="fifth-line">
                        <div class="motivo">
                            <label for="">¿Cuál es la razón de su cita? (escriba sus sintomas   )</label>
                            <input type="text" name="" id="">
                        </div>
                    </div>
    
                
                        <div class="submit">
                            <input type="submit" value="Programar Cita">
                        </div>
                </form>
            </section>
        </article>
    </main>
<!--FIN DEL MENÚ-->

<?php require("php/footer-file.php") ?>

<script src="javascript.js"></script>
</body>
</html>