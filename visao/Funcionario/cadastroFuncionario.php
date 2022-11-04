<?php
require_once '../../modelo/Funcionario.php';
require_once '../../dao/DAOFuncionario.php';
require_once '../../dao/Conexao.php';

$nome = filter_input(INPUT_POST, 'nome');
$cpf = filter_input(INPUT_POST, 'cpf');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');

$senha_crip = password_hash($senha, PASSWORD_DEFAULT);

if ($nome && $cpf && $email && $senha_crip) {

    $obj = new Funcionario();

    $obj->setNome($nome);
    $obj->setCpf($cpf);
    $obj->setEmail($email);
    $obj->setSenha($senha_crip);
    $obj->setIdGerente('1');

    $dao = new DAOFuncionario();

    try {
        $dao->inclui($obj);
        $retorno = [
            'status' => 'ok',
            'mensagem' => 'Funcionário cadastrado com sucesso!',
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
