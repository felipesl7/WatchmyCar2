<?php
    /**
     * Created by PhpStorm.
     * User: Gabriel
     * Date: 11/02/18
     * Time: 23:15
     */

    class Veiculo
    {
        // Atributos
        private $idVeiculo;
        private $modeloVeiculo;
        private $chassiVeiculo;
        private $disponivelVeiculo;

        // Metodo Construtor
        function __construct($idVeiculo = null, $modeloVeiculo = null, $chassiVeiculo = null, $disponivelVeiculo = null){
            $this->idVeiculo = $idVeiculo;
            $this->modeloVeiculo = $modeloVeiculo;
            $this->chassiVeiculo = $chassiVeiculo;
            $this->disponivelVeiculo = $disponivelVeiculo;
        }

        // Metodos Getters
        public function getIdVeiculo(){
            return $this->idVeiculo;
        }

        public function getModeloVeiculo(){
            return $this->modeloVeiculo;
        }

        public function getChassiVeiculo(){
            return $this->chassiVeiculo;
        }

        public function getDisponivelVeiculo(){
            return $this->disponivelVeiculo;
        }

        // Metodos Setters
        public function setIdVeiculo($idVeiculo){
            $this->idVeiculo = $idVeiculo;
        }

        public function setModeloVeiculo($modeloVeiculo){
            $this->modeloVeiculo = $modeloVeiculo;
        }

        public function setChassiVeiculo($chassiVeiculo){
            $this->chassiVeiculo = $chassiVeiculo;
        }

        public function setDisponivelVeiculo($disponivelVeiculo){
            $this->disponivelVeiculo = $disponivelVeiculo;
        }


    }
?>