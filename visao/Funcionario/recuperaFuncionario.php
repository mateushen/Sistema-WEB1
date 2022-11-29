<?php
session_start();
require_once '../../modelo/Funcionario.php';
require_once '../../dao/DAOFuncionario.php';
require_once '../../dao/Conexao.php';

$cpf = filter_input(INPUT_POST, 'cpf');
$email = filter_input(INPUT_POST, 'email');

$dao = new DAOFuncionario();
$lista = $dao->recupera($cpf, $email);

if ($lista) {
    $retorno = [
        'status' => 'ok',
        'mensagem' => 'Dados corretos!',
    ];
    $_SESSION['cpf'] = $cpf;
    $_SESSION['email'] = $email;
    $_SESSION['status'] = 'ok';
} else {
    $retorno = [
        'status' => 'error',
        'mensagem' => 'Dados incorretos!',
    ];
}

echo json_encode($retorno);