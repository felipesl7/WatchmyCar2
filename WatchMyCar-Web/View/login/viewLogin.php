<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 12/02/18
 * Time: 00:22
 */
?>

<script>
    $.support.transition = true;
</script>
<div class="login-box">
    <div class="login-logo">
        <span class="logo-lg" style="padding: 5px"><img src="resources/Imagens/logo.jpeg" style="width: 200px;"></span>
    </div>
    <div class="login-box-body">

        <form action="login?action=validar" method="POST">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" id="cpfLogin" placeholder="CPF" name="cpf" size='10' value='' onkeypress='return somenteNumero(event)'>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Senha" name="senha">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                </div>
            </div>
            <div class="row" style="padding-top: 10px">
                <div class="col-xs-6">
                    <a href="" data-toggle="modal" data-target="#recuperar">Esqueci minha senha</a>
                </div>
                <div class="col-xs-6" style="text-align: right;">
                    <a href="" data-toggle="modal" data-target="#cadastro">Cadastre-se</a>
                </div>
            </div>
        </form>

        <div class="example-modal">
            <div class="modal fade" id="cadastro" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="usuario?action=cad" method="post" name="formCadastro">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Cadastre-se</h4>
                            </div>
                            <div class="modal-body">

                                <div class="form-group has-feedback">
                                    <input type="text" name="nome" class="form-control" placeholder="Nome Completo" required>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" required>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" name="senha1" id="password" class="form-control" placeholder="Senha" required>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" name="senha2" id="confirm_password" class="form-control" placeholder="Repita a senha" required>
                                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Cadastar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

