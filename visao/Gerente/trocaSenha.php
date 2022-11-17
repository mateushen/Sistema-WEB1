<?php
require_once '../../modelo/Gerente.php';
require_once '../../dao/DAOGerente.php';
require_once '../../dao/Conexao.php';

$senha = filter_input(INPUT_POST, 'senha');
$cpf = filter_input(INPUT_POST, 'cpf');

$senha_crip = password_hash($senha, PASSWORD_DEFAULT);

$dao = new DAOGerente();
$lista = $dao->alteraSenha($senha_crip, $cpf);

if ($lista) {
    $retorno = [
        'status' => 'ok',
        'mensagem' => 'Senha alterada com sucesso!',
    ];
} else {
    $retorno = [
        'status' => 'error',
        'mensagem' => 'Erro ao alterar a senha!',
    ];
}

echo json_encode($retorno);