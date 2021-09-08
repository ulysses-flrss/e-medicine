<?php require("plugins/funciones.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programar Cita - E-Medicine</title>
    <link rel="stylesheet" href="../view/css/cita-style.css">
    <?php links(); ?>
</head>
<body>
<?php menu(); ?>
    <main class="all-container">
        <article>
            <section class="form-container">
                <form action="../controller/ctrlCita.php">
                
                    <div class="perfil">
                        <label for="">Seleccione Perfil:</label>
                        <select name="perfil" id="">
                            <option value="perfil1">Perfil 1</option>
                            <option value="perfil2">Perfil 2</option>
                            <option value="perfil3">Perfil 3</option>
                        </select>
                    </div>
                        
                    <div class="second-line">
                        <div class="peso">
                            <label for="">Peso(lb):</label>
                            <input type="text" name="pe" id="" placeholder="Peso en Libras">
                        </div> 
                        
                        <div class="altura">
                            <label for="">Altura(cm):</label>
                            <input type="text" name="al" id="" placeholder="Altura en cm">    
                        </div>  

                        <div class="fecha">
                            <label for="">Fecha de Nacimiento:</label>
                            <input type="date" name="fn" id="">
                        </div>
                    </div>
                        
    
                    <div class="third-line">
                        <div class="especialidad-medica">
                            <label for="especialidad-medica">Especialidad Médica</label>
                            <select name="em" id="">
                                <option value="">-- Seleccione una Especialidad --</option>
                                <option value="cardiologia">Cardiología</option>
                                <option value="medicinaGeneral">Médicina General</option>
                                <option value="neurologia">Neurología</option>
                                <option value="pediatria">Pediatría</option>
                            </select>
                        </div>

                        <div class="doctor">
                            <label for="doctor">Elija el doctor</label>

                            <select name="doctor" id="">
                                <option value="D-001">Ulises Adonay Flores Martínez</option>
                                <option value="D-002">José David López Pacas</option>
                                <option value="D-003">José Guillermo Granadino Rivas</option>
                                <option value="D-004">Jefferson Alexis Castro Castro</option>
                            </select>
                        </div>

                        <div class="fecha">
                            <label for="">Fecha de Cita:</label>
                            <input type="date" name="fc" id="">
                        </div>  

                        <div class="doctor">
                            <label for="">Hora de Cita</label>
                            <select name="hc" id="">
                            <option value="7:00am">7:00am</option>
                            <option value="7:30am">7:30am</option>
                            <option value="8:00am">8:00am</option>
                            <option value="8:30am">8:30am</option>
                            <option value="9:00am">9:00am</option>
                            <option value="9:30am">9:30am</option>
                            <option value="10:00am">10:00am</option>
                            <option value="10:30am">10:30am</option>
                            <option value="11:00am">11:00am</option>
                            <option value="11:30am">11:30am</option>
                            <option value="1:30pm">1:30pm</option>
                            <option value="2:00pm">2:00pm</option>
                            <option value="2:30pm">2:30pm</option>
                            <option value="3:00pm">3:00pm</option>
                            <option value="3:30pm">3:30pm</option>
                            <option value="4:00pm">4:00pm</option>
                            <option value="4:30pm">4:30pm</option>
                            <option value="5:00pm">5:00pm</option>
                            </select>
                            
                        </div>
                    </div>

                    <div class="fourth-line">
                        <div class="enfermedades">
                            <label for="">Enfermedades Crónicas y Alergias (sino tiene ninguna deje vació este campo)</label>
                            <input type="text" name="enfermedades">
                        </div>
                    </div>

                    <div class="fifth-line">
                        <div class="motivo">
                            <label for="">¿Cuál es la razón de su cita? (escriba sus sintomas)</label>
                            <input type="text" name="razon" id="">
                        </div>
                    </div>
    
                
                        <div class="submit">
                            <input type="submit" name="accion" value="programar cita">
                        </div>
                </form>
            </section>
        </article>
    </main>
<!--FIN DEL MENÚ-->

<?php footer(); ?>

<script src="javascript.js"></script>
</body>
</html>