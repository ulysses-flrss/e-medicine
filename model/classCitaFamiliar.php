<?php
  class CitaFamiliar{
    //Propiedades
    public $idPerfil;
    public $idPaciente;
    public $peso;
    public $altura;
    public $fechaNac;
    public $fechaCreacion;
    public $especialidadM;
    public $doctor;
    public $fechaCita;
    public $horaCita;
    public $enfermedades;
    public $razonCita;

    //Método Constructor
    public function __construct($idPerfil, $codUsuario, $pe, $al, $fn, $em, $doctor, $fc, $hc, $enfermedades, $razon){

      $this->idPerfil = $idPerfil;

      $this->idPaciente = $codUsuario;

      $this->peso = $pe;

      $this->altura = $al;

      $this->fechaNac = $fn;

      $this->fechaCreacion = date('Y/m/d');

      $this->especialidadM = $em;
      
      $this->doctor = $doctor;
      
      $this->fechaCita = $fc;
      
      $this->horaCita = $hc;
      
      $this->enfermedades = $enfermedades;

      $this->razonCita = $razon;
    }
  }
?>