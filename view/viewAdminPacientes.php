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
    <title>Ver Usuarios | E-Medicine </title>
    <link rel="stylesheet" href="css/viewAdmin-style.css">
    <?php links() ?>
</head>
<body>
    <?php menu() ?>
    <main class="all-container">
        
        <article>
        <a href="" class="agregarUser">
                <img class = "add-image" src="../assets/imgs/add.png" alt="">
                <span class="add-text">Agregar Usuario</span>
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
                    
                    foreach ($pacientes as $pacient) {
                        echo "<tr>
                                <td>".$pacient['idPaciente']."</td>
                                <td>".$pacient['nombre']."</td>
                                <td>".$pacient['apellido']."</td>
                                <td>
                                    <ul>
                                        <li><button><i class='fas accountfa-solid fa-user-pen'></i></button></li>
                                        <li><button><i class='fas fa-solid fa-circle-minus'></i></button></li>
                                    </ul>
                                </td>
                                </tr>";
                    }
                 ?>
                </table>

            <table class="tablaFamiliares">
                <tr>
                    <th>ID de Familiar</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>ID de Paciente</th>
                    <th>Acciones</th>
                </tr>


            <?php 
                if (!isset($familiar)) {
                    require_once("../model/DaoFamiliar.php");
                } else {
                    require_once("../model/DaoFamiliar.php");
                }
                    $dao = new DaoFamiliar();
                    $familiar = $dao->listadoFamiliarCompleto();
                    
                    foreach ($familiar as $familia) {
                        echo "<tr>
                                <td>".$familia['idPerfil']."</td>
                                <td>".$familia['nombres']."</td>
                                <td>".$familia['apellidos']."</td>
                                <td>".$familia['idPaciente']."</td>
                                <td>
                                    <ul>
                                        <li><button><i class='fas fa-solid fa-user-pen'></i></button></li>
                                        <li><button><i class='fas fa-solid fa-circle-minus' onclick='deleteFamiliar();' ></i></button></li>
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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/SweetAlert/dist/sweetalert2.all.min.js"></script>

</body>
</html>