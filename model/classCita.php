<?php
  class Cita{
    //Propiedades
    public $idPaciente;
    public $peso;
    public $altura;
    public $fechaNac;
    public $especialidadM;
    public $doctor;
    public $fechaCita;
    public $horaCita;
    public $enfermedades;
    public $razonCita;

    //Método Constructor
    public function __construct($codUsuario, $pe, $al, $fn, $em, $doctor, $fc, $hc, $enfermedades, $razon){
      if(!empty($codUsuario))
        $this->idPaciente = $codUsuario;
      else
        throw new Exception('Error. Código de Usuario vacío');
      if(!empty($pe))
        $this->peso = $pe;
        //$this->peso = "";
      else
          throw new Exception('Error. Peso vacío');
      if(!empty($al))
        $this->altura = $al;
      else
        throw new Exception('Error. Altura vacío');
      if(!empty($fn))
        $this->fechaNac = $fn;
      else
        throw new Exception('Error. Fecha de Nacimiento vacía');
      if(!empty($em))
        $this->especialidadM = $em;
      else
        throw new Exception('Error. Especialidad Médica vacía');
      if(!empty($doctor))
        $this->doctor = $doctor;
      else
        throw new Exception('Error. Doctor vacío');
      if(!empty($fc))
        $this->fechaCita = $fc;
      else
          throw new Exception('Error. Fecha de la Cita vacía');
      if(!empty($hc))
        $this->horaCita = $hc;
      else
        throw new Exception('Error. Hora de la Cita vacía.');
      
      $this->enfermedades = $enfermedades;

      if(!empty($razon))
        $this->razonCita = $razon;
      else
          throw new Exception('Error. Ha dejado vacío el campo asignado para aclasrar la razón de la cita médica.');
    }
  }
?>