<?php
    /**
     * Created by PhpStorm.
     * User: Gabriel
     * Date: 12/02/18
     * Time: 00:21
     */

    require_once '../Gerenciador/GerenciadorUsuario.php';
    require_once '../Model/Usuario.php';
    require_once '../resources/Funcoes/funcoes.php';


    // Obtendo a ação a ser desempenha pela controladora.
    $action = 'showLogin';
    $pagina = 'Login';

    if(isset($_REQUEST['action']))
        $action = $_REQUEST['action'];

    // Conjunto de ações a depender da ação.
    switch($action){

        // Permite a chamada da tela de login
        case 'showLogin':
            session_start();
            if(isset($_SESSION['codigo']))
                header('Location: home');

            require_once '../View/header/header.php';
            require_once '../View/login/viewLogin.php';

            echo '<script type="text/javascript" src="resources/JavaScript/validacao.js"></script>';

            require_once '../View/fimDaPagina/fimDaPagina.php';
            break;

        // Permite a validação dos dados
        case 'validar':
            if (!isset($_POST['cpf']) && !isset($_POST['senha'])) {
                header('Location: login');
            } else {
                $gerenciadoraUsuario = new GerenciadorUsuario();
                $usuario = $gerenciadoraUsuario->obterLogin($_POST['cpf'],criptografaSenha($_POST['senha']));
                if ($usuario == null) {
                    header('Location: login?mensagem=erro');
                } else {
                    session_start();
                    $usuario = $gerenciadoraUsuario->obterByCPF($_POST['cpf']);
                    $_SESSION['codigo'] = $usuario->getIdUsuario();
                    $_SESSION['nome'] = $usuario->getNomeUsuario();
                    $_SESSION['cpf'] = $usuario->getCpfUsuario();
                    $_SESSION['tipoUsuario'] = $usuario->getTipoUsuario();

                    header('Location: home');
                }
            }

            break;

        case 'logout':
            session_start();
            unset($_SESSION['codigo']);
            unset($_SESSION['nome']);
            unset($_SESSION['cpf']);
            unset($_SESSION['tipoUsuario']);
            $_SESSION = array();
            session_destroy();
            header('Location: login');

            break;
    }
?>