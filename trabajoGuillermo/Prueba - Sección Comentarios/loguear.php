<?php
  /*if(isset($_POST["enviar"])){
    require_once("datos.php");
    require_once("funciones.php");
    $nombre = isset($_POST["usuario"])?$_POST["usuario"]:"";
    $contra = isset($_POST["pass"])?$_POST["pass"]:"";
    //Verificamos credenciales para docente:
    if($nombre == "Guillermo" && $contra == "3111"){
      session_start();
      $_SESSION["login"]=true;
      $_SESSION["usuario"]=$nombre;
      header("location: Comentarios.php");
    }else{
      //Es un estudiante
     //$clave = array_search($nombre, array_column($estudiantes, 'codigo'));
      $clave = Clave($estudiantes,"codigo",$nombre);
      if($clave===false)
        header("location: index.php?error=user");  //Usuario no encontrado
    }
  }*/

  require_once("conexion.php");
  session_start();

  $usuario = $_POST['usuario'];
  $pass = $_POST['pass'];

  $q = "SELECT COUNT(*) as contar FROM pacientes WHERE codPaciente = '$usuario' and password = '$pass'";

  $consulta = mysqli_query($conexion, $q);

  $array = mysqli_fetch_array($consulta);

  if($array['contar']>0){
    $resultado = mysqli_query($conexion, "SELECT * FROM pacientes");

    $q = "SELECT nombrePaciente as nombre FROM pacientes WHERE codPaciente = '$usuario' and password = '$pass'";

    $consulta = mysqli_query($conexion, $q);

    $array = mysqli_fetch_array($consulta);

    $_SESSION['usuario'] = $array['nombre'];

    $_SESSION['codUsuario'] = $usuario;

    header("location: comentarios.php");

    /*if($doc){*/

    
  } else{
    echo "<center>ERROR. <br> DATOS INCORRECTOS.</center> <br/> <br/>";
    echo "<center><a href='login.php'>Volver a Iniciar Sesión</a><a href='crearCuenta.php'>Crear Cuenta</a></center>";
  }
?>