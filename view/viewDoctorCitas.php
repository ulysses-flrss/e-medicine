<?php session_start();
require_once("plugins/funciones.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/viewAdmin-style.css">
    <title>Ver Citas</title>

    <?php links() ?>
</head>
<body>
    <?php menu() ?>

    <main class="all-container">
    <table>
            <tr>
                <th>ID Paciente</th>
                <th>Nombre Completo</th>
                <th>Fecha de la Cita</th>
                <th>Hora de la Cita</th>
                <th>Enfermedades/ <br> Alergias</th>
                <th>Razon de Cita/ <br> Sintomas</th>
            </tr>

        <?php
            if (!isset($cita)) {
                    require_once("../model/daoCita.php");
                } else {
                    require_once("../model/daoCita.php");
                }
                    $dao = new daoCita();
                    $cita = $dao->listadoCitas();
                    
                    foreach ($cita as $cit) {
                        echo "<tr>
                                <td>".$cit['paciente']."</td>
                                <td>".$cit['nombre']."</td>
                                <td>".$cit['fechaCita']."</td>
                                <td>".$cit['horaCita']."</td>
                                <td>".$cit['enfermedades']."</td>
                                <td>".$cit['razonCita']."</td>
                                </tr>";
                    }
                 ?>

        </table>

        <table>
            <tr>
                <th>ID Familiar</th>
                <th>Nombre Completo</th>
                <th>Fecha de la Cita</th>
                <th>Hora de la Cita</th>
                <th>Enfermedades/Alergias</th>
                <th>Razon de Cita/Sintomas</th>
            </tr>

        <?php
            if (!isset($citaFamiliar)) {
                    require_once("../model/daoCitaFamiliar.php");
                } else {
                    require_once("../model/daoCitaFamiliar.php");
                }
                    $dao = new daoCitaFamiliar();
                    $citaFamiliar = $dao->listadoCitasFamiliar();
                    
                    foreach ($citaFamiliar as $cita) {
                        echo "<tr>
                                
                                <td>".$cita['nombre']."</td>
                                <td>".$cita['fechaCita']."</td>
                                <td>".$cita['horaCita']."</td>
                                <td>".$cita['enfermedades']."</td>
                                <td>".$cita['razonCita']."</td>
                                </tr>";
                    }
                 ?>

        </table>
    

    </main>
        

    <?php footer() ?>
</body>
</html>