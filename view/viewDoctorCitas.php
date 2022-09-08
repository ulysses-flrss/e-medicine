<?php session_start();
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once 'plugins/funciones.php';
require_once '../controller/ctrlUsuario.php';
$cod = "";
$dataUser = username($cod);

$datos = explode('/', $dataUser);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tabla.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Ver Citas</title>

    <?php links() ?>
</head>
<body>
    <?php menu() ?>

    <main class="all-container">
    <div class="table-responsive">
    <table class="table table-striped table-dark">
        <thead>
           <tr>
                <th scope="col">ID Paciente</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Fecha de la Cita</th>
                <th scope="col">Hora de la Cita</th>
                <th scope="col">Enfermedades/ <br> Alergias</th>
                <th scope="col">Razon de Cita/ <br> Sintomas</th>
            </tr>

        </thead>
        <tbody scope="row">    
        <?php
            if (!isset($cita)) {
                    require_once("../model/daoCita.php");
                } else {
                    require_once("../model/daoCita.php");
                }
                    $dao = new daoCita();
                    $cita = $dao->listadoCitas($datos[0]);
                    
                    foreach ($cita as $cit) {
                        echo "<tr >
                                <td>".$cit['idPaciente']."</td>
                                <td>".$cit['nombre']."</td>
                                <td>".$cit['fechaCita']."</td>
                                <td>".$cit['horaCita']."</td>
                                <td>".$cit['enfermedades']."</td>
                                <td>".$cit['razonCita']."</td>
                                </tr>";
                    }
                 ?>
         </tbody>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-dark">
            <tr>
                <th scope="col">ID Familiar</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Fecha de la Cita</th>
                <th scope="col">Hora de la Cita</th>
                <th scope="col">Enfermedades/ <br> Alergias</th>
                <th scope="col">Razon de Cita/ <br> Sintomas</th>
            </tr>

        <?php
            if (!isset($citaFamiliar)) {
                    require_once("../model/daoCitaFamiliar.php");
                } else {
                    require_once("../model/daoCitaFamiliar.php");
                }
                    $dao = new daoCitaFamiliar();
                    $citaFamiliar = $dao->listadoCitasFamiliar($datos[0]);
                    
                    foreach ($citaFamiliar as $cita) {
                        echo "<tr>
                                <td>".$cita['idPerfil']."</td>
                                <td>".$cita['nombre']."</td>
                                <td>".$cita['fechaCita']."</td>
                                <td>".$cita['horaCita']."</td>
                                <td>".$cita['enfermedades']."</td>
                                <td>".$cita['razonCita']."</td>
                                </tr>";
                    }
                 ?>

        </table>
    </div>

    </main>
        

    <?php footer() ?>
</body>
</html>