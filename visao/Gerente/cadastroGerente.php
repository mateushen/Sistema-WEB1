<?php
require_once '../../modelo/Gerente.php';
require_once '../../dao/DAOGerente.php';
require_once '../../dao/Conexao.php';

$nome = filter_input(INPUT_POST, 'nome');
$cpf = filter_input(INPUT_POST, 'cpf');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');

$senha_crip = password_hash($senha, PASSWORD_DEFAULT);

if ($nome && $cpf && $email && $senha_crip) {

    $obj = new Gerente();

    $obj->setIdGerente(1);
    $obj->setNome($nome);
    $obj->setEmail($email);
    $obj->setCpf($cpf);
    $obj->setSenha($senha_crip);

    $dao = new DAOGerente();

    try {
        $dao->inclui($obj);
        $retorno = [
            'status' => 'ok',
            'mensagem' => 'Gerente cadastrado com sucesso!',
        ];
    } catch (Exception $e) {
        $retorno = [
            'status' => 'error',
            'mensagem' => 'Erro ao realizar o cadastro!',
        ];
    }
} else {
    $retorno = [
        'status' => 'error',
        'mensagem' => 'Dados inválidos',
    ];
}

echo json_encode($retorno);
