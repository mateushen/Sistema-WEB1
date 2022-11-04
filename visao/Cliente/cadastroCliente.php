<?php
require_once '../../modelo/Cliente.php';
require_once '../../dao/DAOCliente.php';
require_once '../../dao/Conexao.php';

$nome = filter_input(INPUT_POST, 'nome');
$cpf = filter_input(INPUT_POST, 'cpf');
$telefone = filter_input(INPUT_POST, 'telefone');

if ($nome && $cpf && $telefone) {

    $obj = new Cliente();

    $obj->setNome($nome);
    $obj->setCpf($cpf);
    $obj->setTelefone($telefone);

    $dao = new DAOCliente();

    try {
        $dao->inclui($obj);
        $retorno = [
            'status' => 'ok',
            'mensagem' => 'Cliente cadastrado com sucesso!',
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
