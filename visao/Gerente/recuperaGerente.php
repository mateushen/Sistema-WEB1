<?php
session_start();
require_once '../../modelo/Gerente.php';
require_once '../../dao/DAOGerente.php';
require_once '../../dao/Conexao.php';

$cpf = filter_input(INPUT_POST, 'cpf');
$email = filter_input(INPUT_POST, 'email');

$dao = new DAOGerente();
$lista = $dao->recupera($cpf, $email);

if ($lista) {
    $retorno = [
        'status' => 'ok',
        'mensagem' => 'Dados corretos!',
    ];
    $_SESSION['cpf'] = $cpf;
    $_SESSION['email'] = $email;
} else {
    $retorno = [
        'status' => 'error',
        'mensagem' => 'Dados incorretos!',
    ];
}

echo json_encode($retorno);