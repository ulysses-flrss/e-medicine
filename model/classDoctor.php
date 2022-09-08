<?php
    class Doctor{
        //Propiedades
        public $idDoctor;
        public $nombreDoctor;
        public $apellidoDoctor;
        public $fechaNacDoctor;
        public $genero;
        public $especialidadM;
        public $eMail;
        public $pass;
        public $telefono;
        public $dui;
        //Método constructor
        public function __construct($cod,$nom,$ape,$fn,$gen,$em,$email,$password,$tel, $duiD) {
            if(!empty($cod))
                $this->idDoctor = $cod;
            else
                throw new Exception('Error. Correlativo incorrecto');
            if(!empty($nom))
                $this->nombreDoctor = $nom;
            else
                throw new Exception('Error. Nombre incorrecto');
            if(!empty($ape))
                $this->apellidoDoctor = $ape;
            else
                throw new Exception('Error. Apellido vacío');
            if(!empty($fn)){
                $fecha = explode('-',$fn);
                $this->fechaNacDoctor = $fn;
            }
            else
                throw new Exception('Error. Fecha vacía');
            if(!empty($gen))
                $this->genero = $gen;
            else
                throw new Exception('Error. Género vacío');
            if(!empty($em))
                $this->especialidadM = $em;
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
            if(!empty($duiD))
                $this->dui = $duiD;
            else
                throw new Exception('Error. Contraseña vacío');
            $this->valEmail($email);
        }

    private function valEmail($email){
        $this->eMail = $email;
    }
    //Setters
    public function setEmail($email){
        $this->valEmail($email);
    }
    public function setIdPaciente($id){
        $this->idDoctor = $id;
    }
    public function getTelefono($tel){
        return $this->telefono = $tel;
    }
    //Getters
    public function getIdDoctor(){
        return $this->idDoctor;
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
        return $this->idDoctor.  " - " . $this->nombre . " " . $this->apellido;
    }
}//Fin clase
?>