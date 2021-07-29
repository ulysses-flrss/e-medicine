<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>E-Medicine - Programar Cita</title>
    <link rel="stylesheet" href="estilo2.css">
  </head>

  <body>
    <?php
      session_start();
/*
      if($contadorCitas === 1)
        $modal = false;
      else 
        $modal = true;*/
      


      //Al completar un formulario de programación de cita se pondría la siguiente sentencia: $modal = $modal + 1;
    ?>
    <button id="abrir">Abrir</button>


    <div id="miModal" class="miModal">
      <div class="modal" id="modal">
        <div class="modalContainer">
          <div class="modalHeader">
            <h2>CALIFICANOS</h2>
            <span class="close" id="close">&times;</span>
          </div class="modalHeader">

          <div class="modalBody">
            <div class="containerRate">
              <form action="sendRate.php" method="POST">
                <label for="" id="rateTexto">¿Cómo calificarías tu experiencia en nuestro sitio web?</label>
                <div class="ventana-star">
                  <input id="rate-5" name="rate" type="radio"/>
                  <label for="rate-5" id="5rate"onclick="calificar(this)">★</label>
                  <input id="rate-4" name="rate" type="radio"/>
                  <label for="rate-4" id="4rate"onclick="calificar(this)">★</label>
                  <input id="rate-3" name="rate" type="radio"/>
                  <label for="rate-3" id="3rate"onclick="calificar(this)">★</label>
                  <input id="rate-2" name="rate" type="radio"/>
                  <label for="rate-2" id="2rate"onclick="calificar(this)">★</label>
                  <input id="rate-1" name="rate" type="radio"/>
                  <label for="rate-1" id="1rate"onclick="calificar(this)">★</label>
                </div>
                <input type="text" id="puntuacion" name="puntuacion">
                <label for="comentario" id="comentText">Danos tu opinión (opcional):</label>
                <textarea id="comentario" placeholder="Escribe aquí tu opinión" name="comentario"></textarea>
                <button type="submit" id="enviar" name="enviar">Enviar</button>
              </form>
            </div>
          </div>

          <div class="modalFooter">
            <h3>E-MEDICINE</h3>
          </div>
        </div>
      </div>
    </div>

    <!--<?php/*
      if($cita ==== 1)
        echo*/
    ?>-->

    <script>
      function calificar(item){
        console.log(item);
        var contador=item.id[0];
        var nombre = item.id.substring(1);
        console.log(contador);
        console.log(nombre);
        document.getElementById("puntuacion").value=contador;
        for (let i = 0; i < 5; i++) {
          console.log(document.getElementById((i+1)+nombre));
          console.log(contador);
          if (i<contador) {
            document.getElementById((i+1)+nombre).style.color="gold";
          }else{
            document.getElementById((i+1)+nombre).style.color="#000";
          }
        }
/*
        for (var j = 0; j < 5; j++) {
          let count = item.id[0];
          switch (count) {
            case "5":
              document.getElementById("puntuacion").value=5;
              console.log(count);
            break;
            case "4":
              document.getElementById("puntuacion").value=4;
              console.log(count);
            break;
            case "3":
              document.getElementById("puntuacion").value=3;
              console.log(count);
            break;
            case "2":
              document.getElementById("puntuacion").value=2;
              console.log(count);
            break;
            case "1":
              document.getElementById("puntuacion").value=1;
              console.log(count);
            break;
            default:
              console.log("no funciona");
              console.log(count);
            break;
          }
        }*/
      }
    </script>
  </body>
</html>