<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index-style.css">
    <title>Inicio - eMedicine</title>
    <?php require("php/default-head.php")?>
</head>

<body>

    <?php require("php/menu-file.php") ?>
    
    <main class="allContainer">
        <div class="bienvenida" id="container-bienvenida">
            <a href="#" class="imagen-texto">
                <div class="img-layout"><img src="psd.jpg" alt="Imagen de Perfil" class="profile-picture" title="Imagen de Perfil"></div>
                <span class="editar" title="Editar Perfil">Editar Perfil</span>
            </a>
                <span id="bienvenida" title="Bienvenida">Bienvenido/a Ulises</span>
        </div>
        

        <article class="mainArticle">
            <section class="tablonAnuncios">
                <div class="objetoTablon" id="autor">
                    <span title="Escritor del Anuncio">Ulises Adonay Flores Martínez</span>
                </div>
                <div class="objetoTablon" id="fechaPublicacion">
                    <span title="Fecha de Publicación del Anuncio">16/Julio/2021</span>
                </div>

                <div class="objetoTablon" id="descripcion">
                    <p title="Contenido del Anuncio">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolores tenetur sint, quas, consequatur ipsam harum odit aliquam fugiat doloribus quam, tempore repudiandae mollitia error nostrum quo minus nihil consequuntur.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, saepe facere atque, incidunt exercitationem delectus id eius ad asperiores ipsam, laboriosam nemo eligendi perferendis voluptatum nobis beatae porro cupiditate ipsum.
                    </p>
                </div>
            </section>



            <section class="especialidadesMedica">
            
                <a href="" class="div-especialidades" title="Medicina General">
                    <img src="imgs/medicina.png" alt="" class="imagenEspecialidad">
                    <div class="especialidadNombre" title="Medicina General">Medicina General</div>
                </a>

                <a href="" class="div-especialidades" title="Pediatría">
                    <img src="imgs/chico.png" alt="" class="imagenEspecialidad">
                    <div class="especialidadNombre" title="Pediatría">Pediatría</div>
                </a>
        

                <a href="" class="div-especialidades" title="Neurlogía">
                    <img src="imgs/idea-genial.png" alt="" class="imagenEspecialidad">
                    <div class="especialidadNombre" title="Neurología">Neurología</div>
                </a>
            
                <a href="" class="div-especialidades" title="Cardiología">
                    <img src="imgs/corazon.png" alt="" class="imagenEspecialidad">
                    <div class="especialidadNombre">Cardiología</div>
                </a>

            </section>
        </article>
    </main>

    <?php require("php/footer-file.php") ?>

    <script src="javascript.js"></script>
</body>

</html>