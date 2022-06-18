<?php 
    require_once 'plugins/funciones.php';
    require_once '../controller/ctrlUsuario.php';
    /*if ($key) 
        $activador = true;
    else
        $activador = false;*/

    /*$dataUser = username();

    $datos = explode('/', $dataUser);*/

    $datos[0] = "P-00001";
?>

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
                <form action="" method="POST" id="formCita">

                    <?php echo "<input type='hidden' value='".$datos[0]."' name='idUsuario' id='idUsuario'>" ?>

                    <div class="second-line">
                        <div class="peso">
                            <label for="">Peso(lb): </label>
                            <input type="text" name="pe" id="pe" placeholder="Peso en Libras">
                        </div> 
                        
                        <div class="altura">
                            <label for="">Altura(cm): </label>
                            <input type="text" name="al" id="al" placeholder="Altura en cm">    
                        </div>  

                        <div class="fecha">
                            <label for="">Fecha de Nacimiento:</label>
                            <input type="date" name="fn" id="fn">
                        </div>
                    </div>
                        
    
                    <div class="third-line">
                        <div class="especialidad-medica">
                            <label for="especialidad-medica">Especialidad Médica:</label>
                            <select name="em" id="em">
                                <option value="">-- Seleccione una Especialidad --</option>
                                <option value="C-001">Cardiología</option>
                                <option value="MG-002">Médicina General</option>
                                <option value="N-003">Neurología</option>
                                <option value="P-004">Pediatría</option>
                            </select>
                        </div>

                        <div class="doctor">
                            <label for="doctor">Elija el doctor:</label>

                            <select name="doctor" id="doctor">
                                <option value="">-- Seleccione el Doctor --</option>
                                <option value="D-00001">Ulises Adonay Flores Martínez</option>
                                <option value="D-00002">José David López Pacas</option>
                                <option value="D-00003">José Guillermo Granadino Rivas</option>
                                <option value="D-00004">Jefferson Alexis Castro Castro</option>
                            </select>
                        </div>

                        <div class="fecha">
                            <label for="">Fecha de Cita:</label>
                            <input type="date" name="fc" id="fc">
                        </div>  

                        <div class="doctor">
                            <label for="">Hora de Cita</label>
                            <select name="hc" id="hc">
                            <option value="7:00am">-- Seleccion la Hora de su Cita --</option>
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

                    <div class="third-line">
                        <div class="enfermedades">
                            <label for="">Enfermedades Crónicas y Alergias (sino tiene ninguna deje vació este campo)</label>
                            <textarea id="enfermedades" name="enfermedades"></textarea>
                        </div><!--
                    </div>

                    <div class="fifth-line">-->
                        <div class="motivo">
                            <label for="">¿Cuál es la razón de su cita? (escriba sus sintomas)</label>
                            <textarea type="text" name="razon" id="razon"></textarea>
                        </div>
                    </div>
    
                
                        <div class="submit">
                            <input type="submit" name="accion" id="submit" value="programar cita">
                        </div>
                </form>
            </section>
        </article>
    </main>

    <?php footer(); ?>

    <script src="javascript.js"></script>
      <script src='../view/js/jquery-3.6.0.js'></script>";
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../view/js/cita.js"></script>
</body>
</html>