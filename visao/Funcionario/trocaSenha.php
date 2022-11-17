<?php
session_start();
require_once '../../modelo/Funcionario.php';
require_once '../../dao/DAOFuncionario.php';
require_once '../../dao/Conexao.php';

$senha = filter_input(INPUT_POST, 'senha');
$cpf = $_SESSION['cpf'];
$email = $_SESSION['email'];

$senha_crip = password_hash($senha, PASSWORD_DEFAULT);

if ($senha_crip && $cpf && $email) {
    $dao = new DAOFuncionario();
    $lista = $dao->alteraSenha($senha_crip, $cpf, $email);

    if ($lista) {
        $retorno = [
            'status' => 'ok',
            'mensagem' => 'Senha alterada com sucesso!',
        ];
        session_destroy();
    } else {
        $retorno = [
            'status' => 'error',
            'mensagem' => 'Erro ao alterar a senha!',
        ];
    }
} else {
    $retorno = [
        'status' => 'error',
        'mensagem' => 'Erro ao alterar a senha!',
    ];
}

echo json_encode($retorno);
