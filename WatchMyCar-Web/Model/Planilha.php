<?php
    /**
     * Created by PhpStorm.
     * User: Gabriel
     * Date: 11/02/18
     * Time: 23:26
     */

    class Planilha
    {
        // Atributos
        private $idPlanilha;
        private $idMotorista;
        private $idViagem;

        // Metodo Construtor
        function __construct($idPlanilha = null, $idMotorista = null, $idViagem = null){
            $this->idPlanilha = $idPlanilha;
            $this->idMotorista = $idMotorista;
            $this->idViagem = $idViagem;
        }

        // Metodos Getters
        public function getIdPlanilha(){
            return $this->idPlanilha;
        }

        public function getIdMotorista(){
            return $this->idMotorista;
        }

        public function getIdViagem(){
            return $this->idViagem;
        }

        // Metodos Setters
        public function setIdPlanilha($idPlanilha){
            $this->idPlanilha = $idPlanilha;
        }

        public function setIdMotorista($idMotorista){
            $this->idMotorista = $idMotorista;
        }

        public function setIdViagem($idViagem){
            $this->idViagem = $idViagem;
        }
    }
?>