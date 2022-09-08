<?php session_start();
    require_once("plugins/funciones.php");
    require_once '../controller/ctrlUsuario.php';
    $idPaciente = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
    $sesion = isset($_REQUEST['sesion'])?$_REQUEST['sesion']:"";

        $dataUser = username($idPaciente);

        $datos = explode('/', $dataUser);

        $codPaciente = $datos[0];
    
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ver Citas | E-Medicine </title>
    <link rel="stylesheet" href="css/viewAdmin-style.css">
    <?php links() ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/start/jquery-ui.css">
</head>
<body>
    <?php menu() ?>
    <main class="all-container">
        
        <article>
            <section>

            

                <table>
                    
                <tr>
                    <th>Doctor</th>
                    <th>Especialidad</th>
                    <th>Fecha Cita</th>
                    <th>Hora Cita</th>
                    <th>Razon Cita</th>

                </tr>

                <?php 
                if (!isset($citas)) {
                    require_once("../model/daoCita.php");
                } else {
                    require_once("../model/daoCita.php");
                }
                    $dao = new daoCita();
                    $citas = $dao->listadoCitasPaciente($codPaciente);
                    
                    foreach ($citas as $cita) {
                        echo "<tr>
                                <td>".$cita['nomDoc']."</td>
                                <td>".$cita['especialidadM']."</td>
                                <td>".$cita['fechaCita']."</td>
                                <td>".$cita['horaCita']."</td>
                                <td>".$cita['razonCita']."</td>
                                
                                </tr>";
                    }
                 ?>
                </table>

            </section>
        </article>
    </main>

    <?php footer() ?>
</body>
</html>