<?php
  class Cita{
    //Propiedades
    public $perfil;
    public $apellido;
    public $peso;
    public $altura;
    public $fechaNac;
    public $genero;
    public $municipio;
    public $eMail;
    public $password;

    //Método Constructor
    public function __construct($perfil, $pe, $al, $fn, $em, $doctor, $fc, $hc, $enfermedades, $razon){
      if(!empty($perfil) && is_numeric($perfil))
        $this->perfil= $perfiol;
      else
        throw new Exception('Error. Correlativo incorrecto');
      if(!empty($nom))
        $this->nombre = $nom;
      else
        throw new Exception('Error. Nombre incorrecto');
      if(!empty($ape))
        $this->apellido = $ape;
      else
        throw new Exception('Error. Apellido vacío');
      if(!empty($pe))
        $this->peso = $pe;
      else
          throw new Exception('Error. Peso vacío');
      if(!empty($al))
        $this->altura = $al;
      else
        throw new Exception('Error. Peso vacío');
    }
  }
?>