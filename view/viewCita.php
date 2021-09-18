<?php 
    require_once 'plugins/funciones.php';
    require_once '../controller/ctrlUsuario.php';
    /*if ($key) 
        $activador = true;
    else
        $activador = false;*/

    $dataUser = username();

    $datos = explode('/', $dataUser);
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

    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src='../view/js/jquery-3.6.0.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/start/jquery-ui.css">

<script>
    $(document).ready(function(){
        $('#fechaCita').datepicker({
            minDate: 0,
            dateFormat: 'dd/mm/yy'
        })
    });
</script>
</head>
<body>
<?php menu(); ?>
    <main class="all-container">
        <article>
            <section class="form-container">
                <form action="../controller/ctrlCita.php" method="POST">

                    <?php echo "<input type='hidden' value='".$datos[0]."' name='idUsuario'>" ?>
                
                    <!--<div class="perfil">
                        <label for="">Seleccione Perfil:</label>
                        <select name="perfil" id="">
                            <?php/* echo "<option value='".$datos[0]."'>".$datos[1]."</option>
                            <option value=''>Perfil 2</option>
                            <option value=''>Perfil 3</option>
                            <option value=''>Perfil 4</option>"*/
                            ?>
                        </select>
                    </div>-->
                        
                    <div class="second-line">
                        <div class="peso">
                            <label for="">Peso(lb): </label>
                            <input type="text" name="pe" id="" placeholder="Peso en Libras">
                        </div> 
                        
                        <div class="altura">
                            <label for="">Altura(cm): </label>
                            <input type="text" name="al" id="" placeholder="Altura en cm">    
                        </div>  

                        <div class="fecha">
                            <label for="">Fecha de Nacimiento:</label>
                            <input type="date" name="fn" id="">
                        </div>
                    </div>
                        
    
                    <div class="third-line">
                        <div class="especialidad-medica">
                            <label for="especialidad-medica">Especialidad Médica:</label>
                            <select name="em" id="em" class="selectDinamic">
                                <option value="">-- Seleccione una Especialidad --</option>
                            </select>
                        </div>

                        <div class="doctor">
                            <label for="doctor">Elija el doctor:</label>

                            <select name="doctor" id="doctores" class="selectDinamic">
                                <option value="">-- Seleccione el Doctor --</option>
                            </select>
                        </div>

                        <div class="fecha">
                            <label for="">Fecha de Cita:</label>
                            <input type="text" name="fc" id="fechaCita">
                        </div>  

                        <div class="doctor">
                            <label for="">Hora de Cita</label>
                            <select name="hc" id="">
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
                            <textarea type="text" name="razon" id=""></textarea>
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

<script src="../view/js/selectCita.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.selectDinamic');
        listarEspecial();
    });

    $("#em").change(function(){
        var idEspecialidad = $("#em").val();
        listarDoctor(idEspecialidad);
    })
</script>
</body>
</html>