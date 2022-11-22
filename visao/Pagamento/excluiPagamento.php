<?php
require_once '../../dao/Conexao.php';
require_once '../../dao/DAOPagamento.php';

$idPagamento = $_POST['idPagamento'];

if ($idPagamento) {
    $dao = new DAOPagamento();
    $dao->exclui($idPagamento);

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