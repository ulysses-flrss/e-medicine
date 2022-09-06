<!-- https://github.com/login/oauth/authorize?client_id=de0e3c7e9973e1c4dd77&scope=repo%20user%20workflow&state=7fb2b2ef-f194-4319-8e63-ec0e785de5b9--><?php
    session_start();
    $nombre = isset($_POST['nom'])?$_POST['nom']:"";
    $apellido = isset($_POST['ape'])?$_POST['ape']:"";
    $peso = isset($_POST['pe'])?$_POST['pe']:"";
    $altura = isset($_POST['al'])?$_POST['al']:"";
    $genero = isset($_POST['gen'])?$_POST['gen']:"";
    $municipio = isset($_POST['muni'])?$_POST['muni']:"";
    $eMail = isset($_POST['email'])?$_POST['email']:"";
    $fechaNac = isset($_POST['fn'])?$_POST['fn']:"";
    $password = isset($_POST['pass'])?$_POST['pass']:"";
    $telefono = isset($_POST['tel'])?$_POST['tel']:"";
    $duiP = isset($_POST['dui'])?$_POST['dui']:"";
    // $tipoUser = isset($_POST['tipoUser'])?$_POST['tipoUser']:"";
    $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
    $cod = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";

    if($accion == ""){
        //require "view/viewPaciente.php";
    }

    if($accion == "registrarUser"){
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
    }elseif ($accion = "cerrarSesion") {
        require_once "../model/classPaciente.php";
        require_once "../model/daoPaciente.php";

        $dao = new DaoPaciente();
        $cod = $dao->getCodigo();

        $dao->cerrarSesion($cod);

        //require_once '../index.php';

        //header("location:../index.php");
    }elseif ($accion == "validarDui") {
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
    } else if($accion == "editarPaciente") {
        require_once "../model/classPaciente.php";
        require_once "../model/DaoPaciente.php";

        $dao = new DaoPaciente();
        $datosDoc = $dao->extraerDatos($datos[0]);
        $r = $dao->editarPaciente($idPaciente, $nombre, $apellido, $peso, $altura, $fechaNacimiento, $municipio, $correo, $telefono, $DUI, $pass);

        echo json_encode($r);

    }
    //Eliminar paciente
    if($cod != "" && $accion=="eliminar"){
        require_once '../model/daoPaciente.php';
        $dao = new DaoPaciente();
        $r = $dao->eliminar($cod);
        echo json_encode($r);
    }
?>