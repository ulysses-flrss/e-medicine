<?php

class Anuncio {
    
    //public $idUsuario;
    public $anuncio;

    public function __construct( $anuncio) {
//        if (!empty($idUsuario)) {
      //      $this->idUsuario = $idUsuario;
  //      } else {
    //        throw new Exception("CODIGO DE DOCTOR INVALIDO");
      //  }

        if (!empty($anuncio)) {
            $this->anuncio = $anuncio;
        } else {
            throw new Exception("MENSAJE INVALIDO");
        }
    }

    // public function getIdUsuario () {
    //     return $this->idUsuario;
    // }

    public function getAnuncio() {
        return $this->anuncio;
    }
    
}

?>