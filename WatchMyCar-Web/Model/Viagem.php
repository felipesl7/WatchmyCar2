<?php
    /**
     * Created by PhpStorm.
     * User: Gabriel
     * Date: 11/02/18
     * Time: 23:20
     */

    class Viagem
    {
        // Atributos
        private $idViagem;
        private $origemViagem;
        private $destinoViagem;
        private $horaSaidaViagem;
        private $horaChegadaViagem;
        private $dataViagem;
        private $idVeiculo;

        // Metodo Construtor
        function __construct($idViagem = null, $origemViagem = null, $destinoViagem = null, $horaSaidaViagem = null, $horaChegadaViagem = null, $dataViagem = null, $idVeiculo = null){
            $this->idViagem = $idViagem;
            $this->origemViagem = $origemViagem;
            $this->destinoViagem = $destinoViagem;
            $this->horaSaidaViagem = $horaSaidaViagem;
            $this->horaChegadaViagem = $horaChegadaViagem;
            $this->dataViagem = $dataViagem;
            $this->idVeiculo = $idVeiculo;
        }

        // Metodos Getters
        public function getIdViagem(){
            return $this->idViagem;
        }

        public function getOrigemViagem(){
            return $this->origemViagem;
        }

        public function getDestinoViagem(){
            return $this->destinoViagem;
        }

        public function getHoraSaidaViagem(){
            return $this->horaSaidaViagem;
        }

        public function getHoraChegadaViagem(){
            return $this->horaChegadaViagem;
        }

        public function getDataViagem(){
            return $this->dataViagem;
        }

        public function getIdVeiculo(){
            return $this->idVeiculo;
        }
    }
?>