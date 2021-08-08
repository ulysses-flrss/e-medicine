<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programar Cita - E-Medicine</title>
    <link rel="stylesheet" href="css/root-style.css">
    <link rel="stylesheet" href="css/menu-style.css">
    <link rel="stylesheet" href="css/cita.css">
    <link rel="stylesheet" href="css/footer-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="jquery-3.6.0.js"></script>
</head>
<body>
    <!--INICIO DEL MENÚ-->
    <nav class="nav">
        <ul class="navbar-nav" id="nav">
            <li class="nav-item">
                <img src="logoEMedicine.png" alt="" class="logo">
            </li>

            <li class="nav-item" id="li-cita">
                <a href="#" class="nav-link" >
                    <img src="imgs/document.png" alt="" class="nav-picture" id="cita">
                    <span class="link-text">Programar Cita</span>
                </a>
            </li>

            <li class="nav-item" id="li-familiares">
                <a href="#" class="nav-link" >
                    <img src="imgs/group.png" alt="" class="nav-picture" id="familiares">
                    <span class="link-text">Familiares</span>
                </a>
            </li>

            <li class="nav-item" id="li-doctor">
                <a href="#" class="nav-link">
                    <img src="imgs/doctor.png" alt="" class="nav-picture" id="doctor">
                    <span class="link-text">Especialidades Medicas</span>
                </a>
            </li>

            <li class="nav-item" id="li-faq">
                <a href="#" class="nav-link">
                    <img src="imgs/faq.png" alt="" class="nav-picture" id="faq">
                    <span class="link-text">Preguntas Frecuentes</span>
                </a>
            </li>

            <li class="nav-item" id="li-comentarios">
                <a href="#" class="nav-link">
                    <img src="imgs/comment.png" alt="" class="nav-picture" id="comentarios">
                    <span class="link-text">Comentarios</span>
                </a>
            </li>

            <li class="nav-item" id="li-about">
                <a href="#" class="nav-link" id="li-info">
                    <img src="imgs/information.png" alt="" class="nav-picture" id="about">
                    <span class="link-text">Acerca de Nosotros</span>
                </a>
            </li>

            <li class="nav-item" id="li-logout">
                <a href="#" class="nav-link">
                    <img src="imgs/logout.png" alt="" class="nav-picture" id="logout">
                    <span class="link-text">Cerrar Sesión</span>
                </a>
            </li>
        </ul>
    </nav>

    <main class="all-container">
        <article>
            <section class="form-container">
                <form action="">
                
                    <div class="perfil">
                        <label for="">Seleccione Perfil:</label>
                        <select name="" id="">
                            <option value="">Perfil 1</option>
                            <option value="">Perfil 2</option>
                            <option value="">Perfil 2</option>
                        </select>
                    </div>

                    <div class="first-line">
                        <label for="">Nombre:</label>
                        <input type="text" name="" id="" placeholder="Ingrese su Nombre">
                    </div>
                        
                    <div class="second-line">
                        <div class="peso">
                            <label for="">Peso(lb):</label>
                            <input type="text" name="" id="" placeholder="Peso en Libras">
                        </div>

                        <div class="fecha">
                            <label for="">Fecha de Nacimiento:</label>
                            <input type="date" name="" id="">
                        </div> 
                        
                        <div class="altura">
                            <label for="">Altura(cm):</label>
                            <input type="text" name="" id="" placeholder="Altura en cm">    
                        </div>  
                    </div>
                        
    
                    <div class="third-line">
                        <div class="especialidad-medica">
                            <label for="especialidad-medica">Especialidad Médica</label>
                            <select name="especialidad-medica" id="">
                                <option value="">-- Seleccione una Especialidad</option>
                                <option value="Neurología">Neurología</option>
                                <option value="Cardiología">Cardiología</option>
                                <option value="Cardiología">Cardiología</option>
                                <option value="Cardiología">Cardiología</option>
                            </select>
                        </div>

                        <div class="fecha">
                            <label for="">Fecha de Cita:</label>
                            <input type="date" name="" id="">
                        </div>  

                        <div class="doctor">
                            <label for="doctor">Elija el doctor</label>

                            <select name="doctor" id="">
                                <option value="">Ulises Adonay Flores Martínez</option>
                                <option value="">José David López Pacas</option>
                                <option value="">José Guillermo Granadino Rivas</option>
                                <option value="">Jefferson Alexis Castro Castro</option>
                            </select>
                        </div>
                    </div>

                    <div class="fourth-line">
                        <div class="enfermedades">
                            <label for="">Enfermedades Crónicas y Alergias (sino tiene ninguna deje vació este campo)</label>
                            <input type="text">
                        </div>
                    </div>

                    <div class="fifth-line">
                        <div class="motivo">
                            <label for="">¿Cuál es la razón de su cita? (escriba sus sintomas   )</label>
                            <input type="text" name="" id="">
                        </div>
                    </div>
    
                
                        <div class="submit">
                            <input type="submit" value="Programar Cita">
                        </div>
                </form>
            </section>
        </article>
    </main>
<!--FIN DEL MENÚ-->

<?php require("php/footer-file.php") ?>

<script src="javascript.js"></script>
</body>
</html>