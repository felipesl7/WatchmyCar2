<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 12/02/18
 * Time: 01:18
 */

    session_start();
    // Obtendo a ação a ser desempenha pela controladora.
    $action = 'show';
    $pagina = 'Home';

    if (isset($_REQUEST['action']))
        $action = $_REQUEST['action'];

    // Conjunto de ações a depender da ação.
    switch ($action) {
        case 'show':
            echo "LOGADO";

            break;
    }