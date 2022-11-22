<?php
require_once '../../dao/Conexao.php';
require_once '../../dao/DAOVenda.php';

$idVenda = $_POST['idVenda'];

if ($idVenda) {
    $dao = new DAOVenda();
    $dao->exclui($idVenda);

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