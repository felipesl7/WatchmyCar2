<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 12/02/18
 * Time: 01:18
 */

    session_start();

    require_once '../resources/Funcoes/verificações.php';
    // Obtendo a ação a ser desempenha pela controladora.
    $action = 'show';
    $pagina = 'Home';

    if (isset($_REQUEST['action']))
        $action = $_REQUEST['action'];

    // Conjunto de ações a depender da ação.
    switch ($action) {
        case 'show':

            require_once '../View/header/header.php';

            if (temPermissao(SUPERVISOR)){
                $tipoUser = 'Supervisor';
                require_once '../View/home/homeInicio.php';
                require_once '../View/home/homeSupervisor.php';
            } elseif (temPermissao(MOTORISTA)){
                $tipoUser = 'Motorista';
                require_once '../View/home/homeInicio.php';
                require_once '../View/home/homeMotorista.php';
            } else{
                header("Location: login");
                exit();
            }
            require_once '../View/home/homeFinal.php';
            require_once '../View/footer/footer.php';
            require_once '../View/fimDaPagina/fimDaPagina.php';

        break;
    }