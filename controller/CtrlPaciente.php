<?php
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
    $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
    
    if($accion == "" && $id=="" ){
        require "view/viewPaciente.php";
    }
    if($accion == "Registrarse"){
        require_once '../model/classPaciente.php';
        require_once '../model/daoPaciente.php';
        $dao = new DaoPaciente();
        $cod = $dao->getCodigo();
        $paciente = new Paciente($cod,$nombre,$apellido,$peso,$altura,$fechaNac,$genero,$municipio,$eMail,$password,$telefono); 
        $dao->insertar($paciente);
        //Este alert se podría pasar a modal
        $mensaje = "Querido Usuario, su registro a sido guardado con éxito. Su código para iniciar sesión es: ".$cod;
        $_SESSION['codUsuario'] = $cod; //Se guarda el código del usuario que inicio sesión
        //Este session solo funciona en la carpeta "controller"
        echo "<script>alert('".$mensaje."')</script>"; //MISION: SUSTITUIR EL ALERT POR UNA VENTANA MODAL.
        echo "<body style='background-color:#daffec;'><a href='../index.php' style='text-decoration:none;color:black;font-size:1.5rem;font-weight:bold;'>Iniciar Sesión</a></body>";
    }

    if ($accion = "cerrarSesion") {
        require_once "../model/classPaciente.php";
        require_once "../model/daoPaciente.php";

        $dao = new DaoPaciente();
        $cod = $dao->getCodigo();

        $dao->cerrarSesion($cod);

        header("location:../index.php");
    }
    //Eliminar paciente
    /*if($id != "" && $accion=="eliminar"){
        require_once '../model/daoPaciente.php';
        $dao = new DaoPaciente();
        $dao->eliminar($id);
        echo "<p>Registro Eliminado exitosamente...</p>";
        echo "<a href='../index.php'>Regresar</a>";
    }*/
?>