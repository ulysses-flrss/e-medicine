<?php
    session_start();
    $nombre = isset($_POST['nom'])?$_POST['nom']:"";
    $apellido = isset($_POST['ape'])?$_POST['ape']:"";
    $peso = isset($_POST['pe'])?$_POST['pe']:"";
    $altura = isset($_POST['al'])?$_POST['al']:"";
    $fechaNac = isset($_POST['fn'])?$_POST['fn']:"";
    $fechaIng = isset($_POST['fi'])?$_POST['fi']:"";
    $genero = isset($_POST['gen'])?$_POST['gen']:"";
    $municipio = isset($_POST['muni'])?$_POST['muni']:"";
    $eMail = isset($_POST['email'])?$_POST['email']:"";
    $password = isset($_POST['pass'])?$_POST['pass']:"";
    $telefono = isset($_POST['tel'])?$_POST['tel']:"";
    $duiP = isset($_POST['dui'])?$_POST['dui']:"";
    $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
    $idPaciente = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";
    // $tipoUser = isset($_POST['tipoUser'])?$_POST['tipoUser']:"";

    if($accion == "editarPaciente") {
        require_once "../model/classPaciente.php";
        require_once "../model/DaoPaciente.php";

        $dao = new DaoPaciente();
        $r = $dao->editarPaciente($idPaciente, $nombre, $apellido, $peso, $altura, $fechaNac, $fechaIng, $genero, $municipio, $eMail, $telefono, $duiP, $password);

        echo json_encode($r);

    } else if($accion == "registrarUser"){
        require_once '../model/classPaciente.php';
        require_once '../model/DaoPaciente.php';

        $dao = new DaoPaciente();
        $duiVal = $dao->validarDui($duiP);

        $cod = $dao->getCodigo();
        $paciente = new Paciente($cod,$nombre,$apellido,$peso,$altura,$fechaNac,$genero,$municipio,$eMail,$password,$telefono,$duiP);
        $r = $dao->insertar($paciente);
        $r = $paciente->idPaciente;
        echo json_encode($r);
        /*
        //Este alert se podría pasar a modal
        $mensaje = "Querido Usuario, su registro a sido guardado con éxito. Su código para iniciar sesión es: ".$cod;
        $_SESSION['codUsuario'] = $cod; //Se guarda el código del usuario que inicio sesión
        //Este session solo funciona en la carpeta "controller"
        echo "<script>alert('".$mensaje."')</script>"; //MISION: SUSTITUIR EL ALERT POR UNA VENTANA MODAL.
        echo "<body style='background-color:#daffec;'><a href='../index.php' style='text-decoration:none;color:black;font-size:1.5rem;font-weight:bold;'>Iniciar Sesión</a></body>";*/
        //header("location:../index.php");//MISION: SUSTITUIR EL ALERT POR UNA VENTANA MODAL.
    }else if ($accion = "cerrarSesion") {
        require_once "../model/classPaciente.php";
        require_once "../model/daoPaciente.php";

        $dao = new DaoPaciente();
        $cod = $dao->getCodigo();

        $dao->cerrarSesion($cod);
    }else if ($accion == "validarDui") {
        require_once "../model/classConexion.php";
        $conexion = new Conexion;
        $dbh = $conexion->getConexion();
        $sql = "SELECT * DUI FROM pacientes";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $listDui = $stmt->fetchAll();
        foreach ($listDui as $listDuis) {
            if ($listDuis['DUI'] == $dui){
                $validacion = "copia";
                echo json_encode($validacion);
            }
        }
        $r = "OK";
        echo json_encode($r);
    } 
    //Eliminar paciente
    if($accion=="eliminar"){
        require_once '../model/daoPaciente.php';
        $dao = new DaoPaciente();
        $r = $dao->eliminar($cod);
        echo json_encode($r);
    }
?>