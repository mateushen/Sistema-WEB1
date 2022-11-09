<?php
require_once '../../modelo/Funcionario.php';
require_once '../../dao/DAOFuncionario.php';
require_once '../../dao/Conexao.php';

$nome = filter_input(INPUT_POST, 'nome');
$cpf = filter_input(INPUT_POST, 'cpf');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');

if ($nome && $email && $cpf && $senha) {

    $obj = new Funcionario();
    $dao = new DAOFuncionario();

    $obj->setIdFuncionario($idFuncionario);
    $obj->setNome($nome);
    $obj->setCpf($cpf);
    $obj->setEmail($email);
    $obj->setSenha($senha);
    $obj->setIdGerente(1);

    try {
        $dao->altera($obj);
        $retorno = [
            'status' => 'ok',
            'mensagem' => 'Alterado com sucesso!',
        ];
    } catch (Exception $e) {
        $retorno = [
            'status' => 'error',
            'mensagem' => 'Erro ao realizar a alteração!',
        ];
    }
} else {
    $retorno = [
        'status' => 'error',
        'mensagem' => 'Dados inválidos',
    ];
}

echo json_encode($retorno);
