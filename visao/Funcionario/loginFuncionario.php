<?php
require_once '../../modelo/Funcionario.php';
require_once '../../dao/DAOFuncionario.php';
require_once '../../dao/Conexao.php';

$cpf = filter_input(INPUT_POST, 'cpf');
$senha = filter_input(INPUT_POST, 'senha');

$dao = new DAOFuncionario();
$lista = $dao->login($cpf, $senha);

if ($lista) {
    $retorno = [
        'status' => 'ok',
        'mensagem' => 'Logado com sucesso!',
    ];
    session_start();
    $_SESSION['idFuncionario'] = $lista['idFuncionario'];
    $_SESSION['nome'] = $lista['nome'];
    $_SESSION['user'] = 'Funcionario';
    $_SESSION['status'] = 'ativo';
} else {
    $retorno = [
        'status' => 'error',
        'mensagem' => 'Erro ao fazer login!',
    ];
}

echo json_encode($retorno);