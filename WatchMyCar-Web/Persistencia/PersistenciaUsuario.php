<?php
    /**
     * Created by PhpStorm.
     * User: Gabriel
     * Date: 11/02/18
     * Time: 23:45
     */

    require_once 'DaoGenerico.php';
    require_once 'DbConnection.php';
    require_once '../Model/Usuario.php';
    class PersistenciaUsuario implements DaoGenerico
    {

        function inserir($Objeto)
        {
            // Obtem a conexao
            $Conexao = DbConnection::retornaConexao();

            // SQL
            $SQL = 'INSERT INTO tb_usuario(nome_usuario, cpf_usuario, tipo_usuario, senha_usuario) 
                            VALUES (:nome_usuario, :cpf_usuario, :tipo_usuario, :senha_usuario);';

            $statement = $Conexao->prepare($SQL);

            $statement->bindValue(':nome_usuario', $Objeto->getNomeUsuario(), PDO::PARAM_STR);
            $statement->bindValue(':cpf_usuario', $Objeto->getCpfUsuario(), PDO::PARAM_STR);
            $statement->bindValue(':tipo_usuario', 'MOTORISTA', PDO::PARAM_STR);
            $statement->bindValue(':senha_usuario', $Objeto->getSenhaUsuario(), PDO::PARAM_STR);

            $statement->execute();
        }

        function atualizar($Objeto)
        {
            // TODO: Implement atualizar() method.
        }

        function remover($Objeto)
        {
            // Obtém a conexão
            $Conexao = DbConnection::retornaConexao();

            // Prepara a query
            $SQL = 'DELETE FROM tb_usuario WHERE id_usuario = :id_usuario;';

            $statement = $Conexao->prepare($SQL);
            $statement->bindValue(':id_usuario', $Objeto->getIdUsuario(), PDO::PARAM_INT);

            // Executa a query
            $statement->execute();
        }

        function obterTodos()
        {
            // TODO: Implement obterTodos() method.
        }

        function obterById($IdObjeto)
        {
            // Obtém a conexao
            $Conexao = DbConnection::retornaConexao();

            // Prepara a query
            $SQL = 'SELECT 
                            id_usuario as idUsuario,
                            nome_usuario as nomeUsuario,
                            cpf_usuario as cpfUsuario,
                            tipo_usuario as tipoUsuario,
                            senha_usuario as senhaUsuario
                    FROM tb_usuario
                    WHERE id_usuario = :idUsuario';

            $statement = $Conexao->prepare($SQL);
            $statement->bindValue(':idUsuario', $IdObjeto, PDO::PARAM_STR);

            $statement->execute();
            $resultado = $statement->fetch(PDO::FETCH_ASSOC);
            if ($resultado != false && !empty($resultado))
                $resultado = new Usuario(
                    $resultado['idUsuario'],
                    $resultado['nomeUsuario'],
                    $resultado['cpfUsuario'],
                    $resultado['tipoUsuario'],
                    $resultado['senhaUsuario']);
            else
                $resultado = null;

            return $resultado;
        }

        function buscarLogin($cpfUsuario, $senhaUsuario){
            // Obtém a conexão
            $Conexao = DbConnection::retornaConexao();

            // Prepara a query
            $SQL = 'SELECT
                            id_usuario as idUsuario,
                            nome_usuario as nomeUsuario,
                            cpf_usuario as cpfUsuario,
                            tipo_usuario as tipoUsuario,
                            senha_usuario as senhaUsuario
                        FROM tb_usuario
                        WHERE cpf_usuario = :login and senha_usuario = :senha';

            $statement = $Conexao->prepare($SQL);
            $statement->bindValue(':login', $cpfUsuario, PDO::PARAM_STR);
            $statement->bindValue(':senha', $senhaUsuario, PDO::PARAM_STR);

            $statement->execute();
            $resultado = $statement->fetch(PDO::FETCH_ASSOC);
            if ($resultado != false && !empty($resultado))
                $resultado = new Usuario(
                    $resultado['idUsuario'],
                    $resultado['nomeUsuario'],
                    $resultado['cpfUsuario'],
                    $resultado['tipoUsuario'],
                    $resultado['senhaUsuario']);
            else
                $resultado = null;

            return $resultado;
        }

        function obterByCpf($cpfUsuario){
            // Obtém a conexao
            $Conexao = DbConnection::retornaConexao();

            // Prepara a query
            $SQL = 'SELECT 
                            id_usuario as idUsuario,
                            nome_usuario as nomeUsuario,
                            cpf_usuario as cpfUsuario,
                            tipo_usuario as tipoUsuario,
                            senha_usuario as senhaUsuario
                    FROM tb_usuario
                    WHERE cpf_usuario = :cpfUsuario';

            $statement = $Conexao->prepare($SQL);
            $statement->bindValue(':cpfUsuario', $cpfUsuario, PDO::PARAM_STR);

            $statement->execute();
            $resultado = $statement->fetch(PDO::FETCH_ASSOC);
            if ($resultado != false && !empty($resultado))
                $resultado = new Usuario(
                    $resultado['idUsuario'],
                    $resultado['nomeUsuario'],
                    $resultado['cpfUsuario'],
                    $resultado['tipoUsuario'],
                    $resultado['senhaUsuario']);
            else
                $resultado = null;

            return $resultado;
        }
    }
?>