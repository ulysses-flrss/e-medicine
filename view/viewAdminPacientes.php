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
    
    <title>Ver Usuarios | E-Medicine </title>
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
            <a href="../view/viewRegister.php" class="agregarUser">
                <img class = "add-image" src="../assets/imgs/add.png" alt="">
                <span class="add-text">Agregar Paciente</span>
            </a>
            <section>

                <table class="tablaUsuarios">
                <tr>
                    <th>ID de Paciente</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Acciones</th>

                </tr>

                <?php
                if (!isset($pacientes)) {
                    require_once("../model/DaoPaciente.php");
                } else {
                    require_once("../model/DaoPaciente.php");
                }
                    $dao = new DaoPaciente();
                    $pacientes = $dao->listadoPacientes();
                    $tipo = "paciente";

                    foreach ($pacientes as $pacient) {
                        echo "<tr>
                                <td>".$pacient['idPaciente']."</td>
                                <td>".$pacient['nombre']."</td>
                                <td>".$pacient['apellido']."</td>
                                <td>
                                    <ul>
                                        <li><button><i class='fas fa-edit'></i></button></li>
                                        <li><button onclick='eliminarUser(\"".$tipo."\",\"".$pacient['idPaciente']."\", \"\");'><i class='fas fa-trash-alt'></i></button></li>
                                    </ul>
                                </td>
                                </tr>";
                    }
                 ?>
                </table>

<?php
                if (!isset($familiar)) {
                    require_once("../model/DaoFamiliar.php");
                } else {
                    require_once("../model/DaoFamiliar.php");
                }
                    $dao = new DaoFamiliar();
                    $familiar = $dao->listadoFamiliarCompleto();

                    if (count($familiar) < 1 ) {

                    } else {
                        echo "<table>

                        <tr>
                            <th>ID de Familiar</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>ID de Paciente</th>
                            <th>Acciones</th>

                        </tr>";

                        foreach ($familiar as $familia) {
                            echo "<tr>
                                    <td>".$familia['idPerfil']."</td>
                                    <td>".$familia['nombres']."</td>
                                    <td>".$familia['apellidos']."</td>
                                    <td>".$familia['idPaciente']."</td>
                                    <td>
                                        <ul>
                                            <li><button><i class='fas fa-edit'></i></button></li>
                                            <li><button onclick='eliminarUser(\"familiar\", \"".$familia['idPaciente']."\", \"".$familia['idPerfil']."\");'><i class='fas fa-trash-alt'></i></button></li>
                                        </ul>
                                    </td>
                                    </tr>";
                    }
                    }
                ?>
            </table>
            </section>
        </article>
    </main>

    <?php footer() ?>
    <script src="../view/js/password.js"></script>
    <script src="../view/js/funciones.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../view/js/all.min.js"></script>
    <script src="../view/js/bootstrap.min.js"></script>
    <script src="../assets/SweetAlert/dist/sweetalert2.all.min.js"></script>
    <script src="../view/js/selectCita.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
</body>
</html>