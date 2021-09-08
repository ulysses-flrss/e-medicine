<?php

class Anuncio {
    
    public $idUsuario;
    public $contenidoAnuncio;

    public function __construct($idUsuario, $contenidoAnuncio) {
       if (!empty($idUsuario)) {
           $this->idUsuario = $idUsuario;
       } else {
           $this->idUsuario = NULL;
       }

        if (!empty($contenidoAnuncio)) {
            $this->contenidoAnuncio = $contenidoAnuncio;
        } else {
            throw new Exception("MENSAJE INVALIDO");
        }


    }

    public function getIdUsuario () {
        return $this->idUsuario;
    }

    public function getAnuncio() {
        return $this->contenidoAnuncio;
    }
    
}

?>