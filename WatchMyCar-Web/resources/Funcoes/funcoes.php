<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 11/02/18
 * Time: 23:36
 */

//Criptografa a senha
function criptografaSenha($senha){
    return md5(sha1(md5($senha)));
}
?>