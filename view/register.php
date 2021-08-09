<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/register-style.css">
    <link rel="stylesheet" href="view/css/root-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Nunito:wght@300&family=Rubik&family=Rubik+Mono+One&display&family=Sacramento&family=Yanone+Kaffeesatz:wght@200&family=Anton&div=swap" rel="stylesheet">
    <title>Registro - E-Medicine</title>
</head>
<body>
    <main>
        <div class="inicio-register">
            <img src="logoEMedicine.png" alt="" class="logo">
            <h1 class="bienvenida-register">Bienvenido a E-Medicine</h1>                
        </div>
        

        <article>
            <section class="form-container">
                <form action="" class="form-register">

                <div class="first-line">
                    <label for="">Código: *</label>
                    <input type="text" name="" id="" placeholder="Ingrese su Código" required>
                </div>    
                    
                <div class="second-line">
                    <label for="">Nombre: *</label>
                    <input type="text" name="" id="" placeholder="Ingrese su Nombre" required>
                </div>
                    
                <div class="third-line">
                    <div class="peso">
                        <label for="">Peso(lb): *</label>
                        <input type="text" name="" id="" placeholder="Peso en Libras" required>
                    </div>
                    
                    <div class="altura">
                        <label for="">Altura(cm): *</label>
                        <input type="text" name="" id="" placeholder="Altura en cm" required>    
                    </div>  
                </div>
                    

                <div class="fourth-line">
                    <div class="fecha">
                        <label for="">Fecha de Nacimiento: *</label>
                        <input type="date" name="" id="" required>
                    </div>
                    
                    <div class="genre">
                        <div class="male">
                            <label for="masculino">Masculino</label>
                            <input type="radio" name="gender" id="masculino" required>
                        </div>
                    
                        
                        <div class="female">
                            <label for="femenino">Femenino</label>
                            <input type="radio" name="gender" id="femenino" required>
                        </div>

                        
                    </div>
                    
                    <div class="municipio">
                        <label for="municipio">Municipio *</label>
                        <select name="municipio" id="" required>
                            <option value="">--Seleccione un Municipio</option>
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

                    <div class="fifth-line">
                        <label for="">Correo Electronico:</label>
                        <input type="email" name="" id="" placeholder="Ingrese su Correo">
                    </div>

                    <div class="sixth-line">
                        <label for="">Contraseña: *</label>
                        <input type="password" name="" id="" placeholder="Ingrese su Contraseña" required>
                    </div>

                    <div class="seventh-line">
                        <label for="">Confirmar Contraseña: *</label>
                        <input type="password" name="" id="" placeholder="Repita su Contraseña" required>
                    </div>

                    <div class="submit">
                        <a href="view/login.php" class="account">Ya tengo Cuenta</a>
                        <input type="submit" value="Registrarse">
                    </div>
                </form>
            </section>
        </article>
    </main>
</body>
</html>