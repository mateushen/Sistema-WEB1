<?php
require_once '../../modelo/Cliente.php';
require_once '../../dao/DAOCliente.php';
require_once '../../dao/Conexao.php';

$idCliente = filter_input(INPUT_POST, 'idCliente');
$nome = filter_input(INPUT_POST, 'nome');
$cpf = filter_input(INPUT_POST, 'cpf');
$telefone = filter_input(INPUT_POST, 'telefone');

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
