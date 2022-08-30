<?php
    class Paciente{
        //Propiedades
        public $idPaciente;
        public $nombre;
        public $apellido;
        public $peso;
        public $altura;
        public $fechaNac;
        public $fechaIng;
        public $genero;
        public $municipio;
        public $eMail;
        public $pass;
        public $telefono;
        public $dui;
        //Método constructor
        public function __construct($cod,$nom,$ape,$pe,$al,$fn,$gen,$muni,$email,$password,$tel, $duiP){
            if(!empty($cod))
                $this->idPaciente= $cod;
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
            if(!empty($fn)){
                $fecha = explode('-',$fn);
                $this->fechaNac = $fn;
            }
            else
                throw new Exception('Error. Fecha vacía');
            if(!empty($gen))
                $this->genero = $gen;
            else
                throw new Exception('Error. Género vacío');
            if(!empty($muni))
                $this->municipio = $muni;
            else
                throw new Exception('Error. Municipio vacío');
            if(!empty($password))
                $this->pass = $password;
            else
                throw new Exception('Error. Contraseña vacío');
            if(!empty($tel))
                $this->telefono = $tel;
            else
                throw new Exception('Error. Contraseña vacío');
            if(!empty($duiP))
                $this->dui = $duiP;
            else
                throw new Exception('Error. Contraseña vacío');
            $this->valEmail($email);
            $this->fechaIng = date('Y/m/d');
        }

    private function valEmail($email){
        if(!empty($email) && preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$email))
            $this->eMail = $email;
        else
            throw new Exception('Error. email vacío');
    }
    //Setters
    public function setEmail($email){
        $this->valEmail($email);
    }
    public function setIdPaciente($id){
        $this->idPaciente = $id;
    }
    public function getTelefono($tel){
        return $this->telefono = $tel;
    }
    //Getters
    public function getIdPaciente(){
        return $this->idPaciente;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getFecNac(){
        return $this->fecNac;
    }
    public function getGen(){
        return $this->genero;
    }
    public function getMuni(){
        return $this->municipio;
    }
    public function getFechaIngreso(){
        return $this->fechaIng;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getNombreCompleto(){
        return $this->nombre . " " . $this->apellido;
    }
    public function getEdad(){
        $fecha = explode('/',$this->fechaNac);
        return date('Y') - $fecha[0];
    }
    public function toString(){
        return $this->idPaciente.  " - " . $this->nombre . " " . $this->apellido;
    }
}//Fin clase
?>