<?php
    /**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 12/02/18
 * Time: 00:50
 */

    session_start();
    require_once '../Gerenciador/GerenciadorUsuario.php';
    require_once '../Model/Usuario.php';
    require_once '../resources/Funcoes/funcoes.php';

    // Obtendo a ação a ser desempenha pela controladora.
    $action = 'show_edit';
    $pagina = 'Meus Dados';
    if(isset($_REQUEST['action']))
        $action = $_REQUEST['action'];

    switch($action) {
        // Permite remover um usuario do sistema.
        case 'del':
            echo 'DELETAR USUARIO';

            break;

        // Permite cadastrar um usuario no sistema.
        case 'cad':
            if (isset($_POST['nome']) && ($_POST['senha1'] == $_POST['senha2'])) {
                $gerenciadoraUsuario = new GerenciadorUsuario();

                $user = $gerenciadoraUsuario->obterByCPF($_POST['cpf']);
                if ($user != null) {
                    header('Location: login?mensagem=existe');
                } else {
                    $novo = new Usuario(null, $_POST['nome'], $_POST['cpf'], null, criptografaSenha($_POST['senha1']));

                    $gerenciadoraUsuario->adicionar($novo);
                    header('Location: login?mensagem=sucess');
                }
            }
            break;
    }
?>