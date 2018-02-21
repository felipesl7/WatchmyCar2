<?php
    /**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 13/02/18
 * Time: 20:31
 */

    // Definição dos tipos de usuario de ENUM para INTEIRO.
    define("MOTORISTA",0);
    define("SUPERVISOR",1);

    // Força o login, caso chegue na pagina sem tá logado.
    if(!isset($_SESSION['codigo'])){
        header("Location: login");
        exit();
    }

    //Checa o tipo do usuario retornando um inteiro, fazendo uso do DEFINE.
    require_once '../Gerenciador/GerenciadorUsuario.php';
    $gerenciadoraUsuario = new GerenciadorUsuario();
    if (($usuario = $gerenciadoraUsuario->obterByCpf($_SESSION['cpf'])) != null)
        $_SESSION['tipoUsuario'] = $usuario->getTipoUsuario();

    function getTipoUsuarioSessao(){
        switch ($_SESSION['tipoUsuario']) {
            case 'MOTORISTA':
                return MOTORISTA;
                break;
            case 'SUPERVISOR':
                return SUPERVISOR;
                break;

            default:
                -1;
        }
    }

    function temPermissao($nivelAcesso){
        return (getTipoUsuarioSessao() >= $nivelAcesso);
    }

?>