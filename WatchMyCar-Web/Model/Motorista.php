<?php
    /**
     * Created by PhpStorm.
     * User: Gabriel
     * Date: 11/02/18
     * Time: 23:12
     */

    class Motorista
    {
        // Atributos
        private $idMotorista;
        private $cnhMotorista;
        private $tipoCnhMotorista;
        private $idUsuario;

        // Metodo Construtor
        function __construct($idMotorista = null, $cnhMotorista = null, $tipoCnhMotorista = null, $idUsuario = null){
            $this->idMotorista = $idMotorista;
            $this->cnhMotorista = $cnhMotorista;
            $this->tipoCnhMotorista = $tipoCnhMotorista;
            $this->idUsuario = $idUsuario;
        }

        // Metodos Getters
        public function getIdMotorista(){
            return $this->idMotorista;
        }

        public function getCnhMotorista(){
            return $this->cnhMotorista;
        }

        public function getTipoCnhMotorista(){
            return $this->tipoCnhMotorista;
        }

        public function getIdUsuario(){
            return $this->idUsuario;
        }

        // Metodos Setters
        public function setIdMotorista($idMotorista){
            $this->idMotorista = $idMotorista;
        }

        public function setCnhMotorista($cnhMotorista){
            $this->cnhMotorista = $cnhMotorista;
        }

        public function setTipoCnhMotorista($tipoCnhMotorista){
            $this->tipoCnhMotorista = $tipoCnhMotorista;
        }

        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }


    }
?>