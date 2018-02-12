<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 11/02/18
 * Time: 22:55
 */

    interface DaoGenerico {
        function inserir($Objeto);
        function atualizar($Objeto);
        function remover($Objeto);
        function obterTodos();
        function obterById($IdObjeto);
    }
?>