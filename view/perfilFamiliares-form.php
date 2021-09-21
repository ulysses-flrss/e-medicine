<?php
session_start();
require_once("plugins/funciones.php");
require_once '../controller/ctrlUsuario.php';

$cod = isset($_REQUEST['idUsuario'])?$_REQUEST['idUsuario']:"";

    $dataUser = username($cod);

$datos = explode('/', $dataUser);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form-familiares-style.css">
    <link rel="stylesheet" href="css/root-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap" rel="stylesheet">
    <title>Registro de un Familiar | E-Medicine</title>
    <?php links() ?>
</head>
<body class='body'>

    <main>
        <div class="inicio-registro">
            <img src="../assets/imgs/logoEMedicine.png" alt="" class="logo">
            <h1 class="bienvenida-registro">Crea Un Perfil Familiar</h1>                
        </div>
        

        <article>
            <section class="form-container">
                <!--<form action="../controller/ctrlFamiliar.php" class="form-register" method="POST">-->

                <?php echo"<input type='hidden' id='idUsuario' name='idUsuario' value='".$datos[0]."'>"; ?>
                    
                <div class="third-line">
                    <div class="nombres">
                        <label for="">Nombres: *</label>
                        <input type="text" name="nom" id="nom" placeholder="Ingrese sus Nombres">
                    </div>

                    <div class="apellidos">
                        <label for="">Apellidos: *</label>
                        <input type="text" name="ape" id="ape" placeholder="Ingrese sus Apellidos">
                    </div>
                </div>
                    
                <div class="second-line">
                    <div class="peso">
                        <label for="">Peso(lb): *</label>
                        <input type="text" name="pe" id="pe" placeholder="Peso en Libras" >
                    </div>
                    
                    <div class="altura">
                        <label for="">Altura(cm): *</label>
                        <input type="text" name="al" id="al" placeholder="Altura en cm">
                    </div>  
                </div>
                    

                <div class="third-line">
                    <div class="fecha">
                        <label for="">Fecha de Nacimiento: *</label>
                        <input type="date" name="fn" id="fn">
                    </div>
                    
                    <div class="genre">
                        <div class="masculino">
                            <label for="masculino">Masculino</label>
                            <input type="radio" class="male" name="genero" id="genero" value="Masculino" >
                        </div>
                    
                        
                        <div class="female">
                            <label for="femenino">Femenino</label>
                            <input type="radio" name="genero" id="genero" value="Femenino">
                        </div>

                        
                    </div>
                    
                    <div class="municipio">
                        <label for="municipio">Municipio *</label>
                        <select name="municipio" id="municipio">
                            <option value="">-- Seleccione un Municipio</option>
                            <option value="San Salvador">San Salvador</option>
                            <option value="Aguilares">Aguilares</option>
                            <option value="Apopa">Apopa</option>
                            <option value="Ayutuxtepeque">Ayutuxtepeque</option>
                            <option value="Ciudad Delgado">Ciudad Delgado</option>
                            <option value="Cuscatancingo">Cuscatancingo</option>
                            <option value="El Paisnal">El Paisnal</option>
                            <option value="Guazapa">Guazapa</option>
                            <option value="Ilopango">Ilopango</option>
                            <option value="Mejicanos">Mejicanos</option>
                            <option value="Nejapa">Nejapa</option>
                            <option value="Panchimalco">Panchimalco</option>
                            <option value="Rosario de Mora">Rosario de Mora</option>
                            <option value="San Marcos">San Marcos</option>
                            <option value="San Martin">San Martin</option>
                            <option value="Santiago Texacuangos">Santiago Texacuangos</option>
                            <option value="Santo Tomas">Santo Tomas</option>
                            <option value="Soyapango">Soyapango</option>
                            <option value="Tonacatepeque">Tonacatepeque</option>
                        </select>
                    </div>
                </div>

                <div class="fourth-line">
                    <label for="">¿Tiene alguna Enfermedad o Alergia? Describalas (Si no tiene, omita este campo)</label>
                </div>

                <div class="fifth-line">
                    <textarea name="enfermedades" id="enfermedades" cols="50" rows="1" maxlength="255"></textarea>
                </div>

                    <div class="submit">
                        <input type="submit" name="accion" value="Crear Perfil" id="crearPerfil" onclick="crearPerfil();">
                    </div>
                <!--</form>-->
            </section>
        </article>
    </main>

    <?php footer();?>
    <script src="../view/js/perfil.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../view/js/all.min.js"></script>
    <script src="../view/js/bootstrap.min.js"></script>
    <script src="../view/js/jquery.js"></script>
    <script src="../assets/SweetAlert/dist/sweetalert2.all.min.js"></script>

</body>
</html>