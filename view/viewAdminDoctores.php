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
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Doctores | E-Medicine </title>
    <link rel="stylesheet" href="css/viewAdmin-style.css">
    <?php links() ?>
</head>
<body>
    <?php menu() ?>
    <main class="all-container">
        <article>
            <a href="../view/viewRegisterDoctor.php?ubicacion=doctor" class="agregarUser">
                <img class = "add-image" src="../assets/imgs/add.png" alt="">
                <span class="add-text">Agregar Doctor</span>
            </a>
            <section>
                <table>
                <tr>
                    <th>ID de Doctor</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Especialidad</th>
                    <th>Acciones</th>

                </tr>

                <?php 
                if (!isset($doctores)) {
                    require_once("../model/DaoPaciente.php");
                } else {
                    require_once("../model/DaoPaciente.php");
                }
                    $dao = new DaoPaciente();
                    $doctores = $dao->listadoDoctores();
                    
                    foreach ($doctores as $doc) {
                        echo "<tr>
                                <td>".$doc['idDoctor']."</td>
                                <td>".$doc['nombreDoctor']."</td>
                                <td>".$doc['apellidoDoctor']."</td>
                                <td>".$doc['especialidadM']."</td>
                                <td>
                                    <ul>
                                        <li><button><i class='fas fa-edit'></i></button></li>
                                        <li><button><i class='fas fa-trash-alt'></i></button></li>
                                    </ul>
                                </td>
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