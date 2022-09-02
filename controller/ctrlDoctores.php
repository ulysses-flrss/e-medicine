<?php

    session_start();
    require_once("../view/plugins/funciones.php");
    require_once '../controller/ctrlUsuario.php';
    require_once "../model/daoDoctor.php";

    $cod = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";

        $dataUser = username($cod);

    $datos = explode('/', $dataUser);
    $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
    $idDoctor = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";

    $nombreDoctor = isset($_POST['nom'])?$_POST['nom']:"";
    $apellidoDoctor = isset($_POST['ape'])?$_POST['ape']:"";
    $telefono = isset($_POST['tel'])?$_POST['tel']:"";
    $correo = isset($_POST['mail'])?$_POST['mail']:""; 

    if ($accion === "editar") {

        $dao = new daoDoctor();
        $datosDoc = $dao->extraerDatos($datos[0]);
        

        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='../view/css/form-familiares-style.css'>
            <link rel='stylesheet' href='../view/css/root-style.css'>
            <link rel='stylesheet' href='../view/css/viewDoctorEdit-style.css'>
            <link href='https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap' rel='stylesheet'>
            <title>Editar Perfil | E-Medicine</title>".
            links() .
        "</head>
        <body class='body'>
        
            <main>
                <div class='inicio-registro'>
                    <img src='../assets/imgs/logoEMedicine.png' alt='' class='logo'>
                    <h1 class='bienvenida-registro'>Editar Perfil</h1>                
                </div>
                
        
                <article>
                    <section class='form-container'>
                        <!-- <form action='../controller/ctrlDoctores.php?accion=editar' class='form-register' method='POST'> -->
        
                        <input type='hidden' id='idUsuario' name='idUsuario' value=".$datos[0]."> 
        

                            
                        <div class='third-line'>    
                            <div class='nombres'>
                                <label for=''>Nombres:</label>
                                <input type='text' name='nom' id='nom' class='name' placeholder='Ingrese sus Nombres' value=". $datosDoc[0].">
                            </div>
        
                            <div class='apellido'>
                                <label for=''>Apellidos:</label>
                                <input type='text' name='ape' id='ape' class='name' placeholder='Ingrese sus Nombres' value=". $datosDoc[1].">
                            </div>
                        </div>
                            
                        <div class='second-line'>
                            <div class='telefono'>
                                <label for=''>Teléfono: *</label>
                                <input type='tel' name='tel' id='tel' placeholder='1234-5678' value=".$datosDoc[2].">
                            </div>      
                            
                            <div class='correo'>
                                <label for=''>Correo: *</label>
                                <input type='email' name='mail' id='mail' placeholder='user@dominio.com' value=".$datosDoc[3].">
                            </div>  
                        </div>
                            
                            
                            
                            
                                <button type='submit' class='disenoBoton' name='accion' value='Editar Datos'> Editar Datos </button>
                        <!-- </form> -->
        
                    </section>
                </article>
            </main>".
        
            footer()
            ."<script src='../view/js/perfil.js'></script>
            <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script src='../view/js/all.min.js'></script>
            <script src='../view/js/bootstrap.min.js'></script>
            <script src='../view/js/jquery.js'></script>
            <script src='../assets/SweetAlert/dist/sweetalert2.all.min.js'></script>
        
        </body>
        </html>'
    }";

    $dao->editarPerfil($idDoctor, $nombreDoctor,$apellidoDoctor, $telefono, $correo);
    }
?>