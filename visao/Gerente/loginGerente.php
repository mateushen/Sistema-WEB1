<?php
require_once '../../modelo/Gerente.php';
require_once '../../dao/DAOGerente.php';
require_once '../../dao/Conexao.php';

$cpf = filter_input(INPUT_POST, 'cpf');
$senha = filter_input(INPUT_POST, 'senha');

$dao = new DAOGerente();
$lista = $dao->login($cpf, $senha);

if ($lista) {
    $retorno = [
        'status' => 'ok',
        'mensagem' => 'Logado com sucesso!',
    ];
    session_start();
    $_SESSION['idGerente'] = $lista['idGerente'];
    $_SESSION['nome'] = $lista['nome'];
    $_SESSION['user'] = 'Gerente';
} else {
    $retorno = [
        'status' => 'error',
        'mensagem' => 'Erro ao fazer login!',
    ];
}

echo json_encode($retorno);