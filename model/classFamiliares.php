<?php

class Familiar {
    public $nombre;
    public $peso;
    public $altura;
    public $fechaNac;
    public $genero;
    public $municipio;
    public $enfermedades;

    public function __construct($nombre, $peso, $altura, $fechaNac, $genero, $municipio, $enfermedades) {
        


        if (!empty($nombre)) {
            $this->nombre = $nombre;
        } else {
            throw new Exception("NOMBRE INVALIDO");
        }   
        
        if (!empty($peso)&& is_numeric($peso)) {
            $this->peso = $peso;
        } else {
            throw new Exception("PESO INVALIDO");
        }

        if (!empty($altura)&& is_numeric($altura)) {
            $this->altura = $altura;
        } else {
            throw new Exception("ALTURA INVALIDA");
        }

        if (!empty($genero)) {
            $this->genero = $genero;
        } else {
            throw new Exception("GENERO INVALIDO");
        }

        if(!empty($fechaNac)){
            $fecha = explode('-',$fechaNac);
            $this->fechaNac = $fechaNac;
        }else{
            throw new Exception('Error. Fecha vacía');
        }

        if (!empty($municipio)) {
            $this->municipio = $municipio;
        } else {    
            throw new Exception("MUNICIPIO INVALIDO");
        }

        if (!empty($enfermedades)) {
            $this->enfermedades = $enfermedades;
        }
    }
    
    public function getPeso() {
        return $this->peso;
    }
    
    public function getAltura() {
        return $this->altura;
    }
    
    public function getFechaNac() {
        return $this->fechaNac;
    }
    
    public function getGenero() {
        return $this->genero;
    }
    
    public function getMunicipio() {
        return $this->municipio;
    }

    public function getEnfermedades() {
        return $this->nombre;
    }
}

?>