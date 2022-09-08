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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Citas | E-Medicine </title>
    <link rel="stylesheet" href="css/viewAdmin-style.css">
    <?php links() ?>
</head>
<body>
    <?php menu() ?>
    <main class="all-container">
        
        <article>
            <section>

            

                <table>
                    
                <tr>
                    <th>Nombre Paciente</th>
                    <th>Nombre Doctor</th>
                    <th>Peso/Altura</th>
                    <th>Especialidad</th>
                    <th>Enfermedades</th>
                    <th>Razon Cita</th>
                    <th>Fecha Cita</th>
                    <th>Hora Cita</th>

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
                                <td>".$cita['nombre']."</td>
                                <td>".$cita['nomDoc']."</td>
                                <td>".$cita['info']."</td>
                                <td>".$cita['especialidad']."</td>
                                
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