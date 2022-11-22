<?php
require_once '../../dao/Conexao.php';
require_once '../../dao/DAOVeiculo.php';

$idVeiculo = $_POST['idVeiculo'];

if ($idVeiculo) {
    $dao = new DAOVeiculo();
    $dao->exclui($idVeiculo);

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