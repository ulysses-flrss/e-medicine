<?php
require_once 'plugins/funciones.php';
require_once '../controller/ctrlUsuario.php';
/*if ($key) 
        $activador = true;
    else
        $activador = false;*/

$cod = isset($_REQUEST['idUsuario']) ? $_REQUEST['idUsuario'] : "";

$dataUser = username($cod);

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
    <script src="../view/js/jquery.js"></script>
    <script src='../view/js/jquery-3.6.0.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/start/jquery-ui.css">

    <script>
        $(document).ready(function() {
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

                <?php echo "<input type='hidden' value='" . $datos[0] . "' name='idUsuario' id='idUsuario'>" ?>
                <?php echo "<input type='hidden' value='" . $datos[1] . "' name='nameUsuario' id='nameUsuario'>" ?>

                <div class="perfil">
                    <label for="">Perfil:</label>
                    <select name="idPerfil" id="idPerfil" class="selectDinamic">
                        
                    </select>
                </div>

                <div class="peso">
                    <label for="">Peso(lb): </label>
                    <input type="text" name="pe" id="pe" placeholder="Peso en Libras" value="<?php echo $datos[3] ?>">
                </div>

                <div class="altura">
                    <label for="">Altura(cm): </label>
                    <input type="text" name="al" id="al" placeholder="Altura en cm" value="<?php echo $datos[4] ?>">
                </div>

                <div class="fecha">
                    <label for="">Fecha de Nacimiento:</label>
                    <input type="date" name="fn" id="fn" value="<?php echo $datos[5] ?>">
                </div>




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
                    <input type="text" name="fc" id="fechaCita" placeholder="Ingrese la fecha de su Cita" autocomplete="off">
                </div>

                <div class="doctor">
                    <label for="">Hora de Cita</label>
                    <select name="hc" id="hc">
                        <option value="">-- Seleccion la Hora de su Cita --</option>
                        <option value="7:00:00">7:00am</option>
                        <option value="7:30:00">7:30am</option>
                        <option value="8:00:00">8:00am</option>
                        <option value="8:30:00">8:30am</option>
                        <option value="9:00:00">9:00am</option>
                        <option value="9:30:00">9:30am</option>
                        <option value="10:00:00">10:00am</option>
                        <option value="10:30:00">10:30am</option>
                        <option value="11:00:00">11:00am</option>
                        <option value="11:30:00">11:30am</option>
                        <option value="13:30:00">1:30pm</option>
                        <option value="14:00:00">2:00pm</option>
                        <option value="14:30:00">2:30pm</option>
                        <option value="15:00:00">3:00pm</option>
                        <option value="15:30:00">3:30pm</option>
                        <option value="16:00:00">4:00pm</option>
                        <option value="16:30:00">4:30pm</option>
                        <option value="17:00:00">5:00pm</option>
                        <option value="17:30:00">5:30pm</option>
                    </select>

                </div>



                <div class="enfermedades">
                    <label for="">Enfermedades Crónicas y Alergias <br>(sino tiene ninguna deje vació este campo)</label>
                    <textarea id="enfermedades" name="enfermedades"></textarea>
                </div>



                <div class="motivo">
                    <label for="">¿Cuál es la razón de su cita? <br>(escriba sus sintomas)</label>
                    <textarea type="text" name="razon" id="razon"></textarea>
                </div>



                <div class="submit">
                    <button type="submit" name="accion" id="programarCita" class="disenoBoton" onclick="programarCita();"><span id='boton'>Programar Cita</span></button>
                </div>
            </section>
        </article>
    </main>
    <!--FIN DEL MENÚ-->

    <?php footer(); ?>

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
        })

        $(document).ready(function() {
            let idUsuario = $("#idUsuario").val();
            let nameUsuario = $("#nameUsuario").val();
            listarFamiliar(idUsuario, nameUsuario);
        })

        $("#idPerfil").change(function() {
            let idPerfil = $("#idPerfil").val();
            let idUsuario = $("#idUsuario").val();
            listarDatosFamiliar(idPerfil, idUsuario);
        })
    </script>
</body>

</html>