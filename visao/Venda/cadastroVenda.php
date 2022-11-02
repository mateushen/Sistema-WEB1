<?php
require_once '../../dao/Conexao.php';
require_once '../../modelo/Venda.php';
require_once '../../dao/DAOVenda.php';
require_once '../../modelo/Veiculo.php';
require_once '../../dao/DAOVeiculo.php';

$idFuncionario = $_POST['idFuncionario'];
$idCliente = $_POST['idCliente'];
$idVeiculo = $_POST['idVeiculo'];
$idPagamento = $_POST['idPagamento'];

$data_venda = date('d/m/y');

if ($idFuncionario && $idCliente && $idVeiculo && $idPagamento && $data_venda) {

    $obj = new Venda();
    $dao = new DAOVenda();

    $daoVeiculo = new DAOVeiculo();

    $obj->setIdFuncionario($idFuncionario);
    $obj->setIdCliente($idCliente);
    $obj->setIdVeiculo($idVeiculo);
    $obj->setIdPagamento($idPagamento);
    $obj->setData_venda($data_venda);

    try {
        $dao->inclui($obj);
        $daoVeiculo->veiculoVendido($idVeiculo);
        $retorno = [
            'status' => 'ok',
            'mensagem' => 'Venda cadastrada com sucesso!',
        ];
    } catch (Exception $e) {
        $retorno = [
            'status' => 'error',
            'mensagem' => $e->getMessage(),
        ];
    }
} else {
    $retorno = [
        'status' => 'error',
        'mensagem' => 'Dados inválidos',
    ];
}

echo json_encode($retorno);
