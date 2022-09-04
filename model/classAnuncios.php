<?php

class Anuncio {
    public $idUsuario;
    public $nombre;
    public $contenidoAnuncio;

    public function __construct($idUsuario, $nombre, $contenidoAnuncio) {
        if (!empty($idUsuario)) {
           $this->idUsuario = $idUsuario;
        } else {
           $this->idUsuario = NULL;
        }
        $this->nombre = $nombre;
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