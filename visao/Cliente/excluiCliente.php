<?php
require_once '../../dao/Conexao.php';
require_once '../../dao/DAOCliente.php';

$idCliente = $_POST['idCliente'];
var_dump($idCliente);

if ($idCliente) {
    $dao = new DAOCliente();
    $dao->exclui($idCliente);

    $retorno = [
        'status' => 'ok',
        'mensagem' => 'Excluído com sucesso!',
    ];
} else {
    $retorno = [
        'status' => 'error',
        'mensagem' => 'Erro ao realizar a exclusão!',
    ];
}

echo json_encode($retorno);