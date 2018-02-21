<?php
    /**
     * Created by PhpStorm.
     * User: Gabriel
     * Date: 12/02/18
     * Time: 00:15
     */

    require_once '../Model/Usuario.php';
    require_once '../Persistencia/PersistenciaUsuario.php';
    class GerenciadorUsuario{
        private $persistencia;

        function __construct(){
            $this->persistencia = new PersistenciaUsuario();
        }

        function adicionar($usuario){
            return $this->persistencia->inserir($usuario);
        }

        function deletar($idUsuario){
            return $this->persistencia->remover($idUsuario);
        }

        function obterLogin($cpfUsuario, $senhaUsuario){
            return $this->persistencia->buscarLogin($cpfUsuario, $senhaUsuario);
        }

        function obterById($idUsuario){
            return $this->persistencia->obterById($idUsuario);
        }

        function obterByCpf($cpfUsuario){
            return $this->persistencia->obterByCpf($cpfUsuario);
        }
    }
?>