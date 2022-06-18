<?php
  class Comentario{
    //PROPIEDADES
    public $codUsuario;
    public $nombre;
    public $mensaje;
    
    //MÉTODOS
    public function __construct($codUsuario, $nombre, $mensaje){
      if (!empty($codUsuario)) {
        $this->$codUsuario = $codUsuario;
      }else{
        throw new Exception('ERROR. Código de Usuario Vacío...');
      }

      if (!empty($nombre)) {
        $this->$nombre = $nombre;
      }else{
        throw new Exception('ERROR. Nombre de Usuario Vacío...');
      }

      if (!empty($mensaje)) {
        $this->$mensaje = $mensaje;
      }else{
        throw new Exception('ERROR. Ha Enviado Un Comentario Vacío...');
      }
    }

  } //FIN CLASE
?>