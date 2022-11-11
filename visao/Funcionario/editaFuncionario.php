<?php
require_once '../../modelo/Funcionario.php';
require_once '../../dao/DAOFuncionario.php';
require_once '../../dao/Conexao.php';

$idFuncionario = $_POST['idFuncionario'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha_crip = password_hash($senha, PASSWORD_DEFAULT);

if ($idFuncionario && $nome && $email && $cpf && $senha_crip) {

    $obj = new Funcionario();
    $dao = new DAOFuncionario();

    $obj->setIdFuncionario($idFuncionario);
    $obj->setNome($nome);
    $obj->setCpf($cpf);
    $obj->setEmail($email);
    $obj->setSenha($senha_crip);

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
