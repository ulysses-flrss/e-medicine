<?php
  function modal($titulo, $mensaje){
    $ventana ='
    <div d="myModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">'.$titulo.'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>'.$mensaje.'</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
    </div>
    <script>
      $( document ).ready(function() {
          $("#myModal").modal("toggle")
      });
    </script>
    ';
    echo $ventana;
  }

  function mostrarComentarios($resultado){
    while ($comentario = mysqli_fetch_object($resultado)){
      ?>

      <br><br>
      <center><b><?php echo($comentario->nombrePaciente); ?>:</b> 
      <br>
      <?php echo($comentario->comentario); ?>
      <br></center>
      <center>
      <?php echo($comentario->fecha);

      ?></center>
      <?php
    }
  }
?>