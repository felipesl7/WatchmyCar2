<?php
    /**
     * Created by PhpStorm.
     * User: Gabriel
     * Date: 11/02/18
     * Time: 23:02
     */

    class Usuario
    {
        // Atributos
        private $idUsuario;
        private $nomeUsuario;
        private $cpfUsuario;
        private $tipoUsuario;
        private $senhaUsuario;

        // Metodo Construtor
        function __construct($idUsuario = null, $nomeUsuario = null, $cpfUsuario = null, $tipoUsuario = null, $senhaUsuario = null){
            $this->idUsuario = $idUsuario;
            $this->nomeUsuario = $nomeUsuario;
            $this->cpfUsuario = $cpfUsuario;
            $this->tipoUsuario = $tipoUsuario;
            $this->senhaUsuario = $senhaUsuario;
        }

        // Metodos Getters
        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public function getNomeUsuario(){
            return $this->nomeUsuario;
        }

        public function getCpfUsuario(){
            return $this->cpfUsuario;
        }

        public function getTipoUsuario(){
            return $this->tipoUsuario;
        }

        public function getSenhaUsuario(){
            return $this->senhaUsuario;
        }

        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }

        public function setNomeUsuario($nomeUsuario){
            $this->nomeUsuario = $nomeUsuario;
        }

        public function setCpfUsuario($cpfUsuario){
            $this->cpfUsuario = $cpfUsuario;
        }

        public function setTipoUsuario($tipoUsuario){
            $this->tipoUsuario = $tipoUsuario;
        }

        public function setSenhaUsuario($senhaUsuario){
            $this->senhaUsuario = $senhaUsuario;
        }



    }
?>