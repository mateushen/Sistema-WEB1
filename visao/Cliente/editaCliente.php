<?php
require_once '../../modelo/Cliente.php';
require_once '../../dao/DAOCliente.php';
require_once '../../dao/Conexao.php';

$idCliente = $_POST['idCliente'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

if ($idCliente && $nome && $cpf && $telefone) {

    $obj = new Cliente();
    $dao = new DAOCliente();

    $obj->setIdCliente($idCliente);
    $obj->setNome($nome);
    $obj->setCpf($cpf);
    $obj->setTelefone($telefone);

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