<?php
  // Notificar todos los errores excepto E_NOTICE
  error_reporting(E_ALL ^ E_NOTICE);

class Familiar {

    public $idPerfil;
    public $idPaciente;
    public $nombre;
    public $apellido;
    public $peso;
    public $altura;
    public $fechaNac;
    public $genero  ;
    public $municipio;
    public $enfermedades;

    public function __construct($idPerfil, $idPaciente, $nombre, $apellido, $peso, $altura, $fechaNac, $genero, $municipio, $enfermedades) {
        
        $this->idPerfil = $idPerfil;
        
        $this->idPaciente = $idPaciente;
      
        $this->nombre = $nombre;
      
        $this->apellido = $apellido;
        
        $this->peso = $peso;
        
        $this->altura = $altura;

        $this->genero = $genero;

        $this->fechaNac = $fechaNac;

        $this->municipio = $municipio;

        $this->enfermedades = $enfermedades;

    }

    //GETTERS
    public function getIdPerfil() {
        return $this->idPerfil;
    }
    public function getIdPaciente() {
        return $this->idPaciente;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->Apellido;
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
    public function getEnfermedad() {
        return $this->enfermedades;
    }

    //SETTERS
    public function setterPeso($peso){
        $this->peso = $peso;
    }
    public function setterAltura($altura){
        $this->altura = $altura;
    }
    public function setterMunicipio($municipio){
        $this->municipio = $municipio;
    }
    public function setterEnfermedades($enfermedades){
        $this->enfermedades = $enfermedades;
    }
}
?>