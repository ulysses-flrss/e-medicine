<?php 

    Class Paciente {

        private $codigo;
        public $nombre;
        public $peso;
        public $altura;
        public $fechaNac;
        public $genero;
        public $municipio;
        public $email;
        private $password;

        public function __construct($codigo, $nombre, $peso, $altura, $fechaNac, $genero, $municipio, $email, $password) {
            if (!empty($codigo) && is_numeric($codigo)) {
                $this->codigo = $codigo;
            } else {
                throw new Exception("CÓDIGO INCORRECTI");
            }

            if (!empty ($nombre)) {
                $this->nombre = $nombre;
            } else {
                throw new Exception("NOMBRE VACÍO");
            }

            if (!empty($peso) && is_numeric($peso)) {
                $this->peso = $peso;
            } else {
                throw new Exception("EL PESO INGRESADO ESTÁ VACÍO O NO ES NÚMERICO");
            }

            if (!empty ($altura) && is_numeric($altura)) {
                $this->altura = $altura;
            } else {
                throw new Exception("LA ALTURA ESTÁ VACÍA O NO ES NUMERICA");
            }

            if (!empty ($fechaNac)) {
                $fechaNac = explode("-", $fechaNac);
                $this->fechaNac = $fechaNac;
            } else {
                throw new Exception("FECHA INVALIDA");
            }

            if (!empty ($genero)) {
                $this->genero = $genero;
            } else {
                throw new Exception("NO ELIGIÓ GENERO");
            }

            if (!empty ($municipio)) {
                $this->municipio = $municipio;
            } else {
                throw new Exception("MUNICIPIO INVALIDO");
            }

            if (!empty($email) && preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)) {
                $this->email = $email;
            } else {
                throw new Exception("EMAIL INVALIDO");
            }

            if (!empty($password)) {
                $this->password = $password;
            } else {
                throw new Exception("CONTRASEÑA INVALIDA");
            }

        }


        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setPeso($peso) {
            $this->peso = $peso;
        }

        public function setAltura($altura) {
            $this->altura = $altura;
        }

        public function setFechaNac($fechaNac) {
            $this->fechaNac = $fechaNac;
        }

        public function setGenero($genero) {
            $this->genero = $genero;
        }

        public function setMunicipio($municipio) {
            $this->municipio = $municipio;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        //Getters

        public function getNombre() {
            return $this->nombre;
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
            $this->nombre;
        }

        public function getEdad() {
            $edad = date("Y") - $this->fechaNac [0];
        }

        public function toString() {
            return $this->codigo . " " . $this->nombre;
        }



    }


?>