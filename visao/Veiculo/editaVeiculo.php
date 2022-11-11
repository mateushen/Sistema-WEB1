<?php
require_once '../../modelo/Veiculo.php';
require_once '../../dao/DAOVeiculo.php';
require_once '../../dao/Conexao.php';

$idVeiculo = $_POST['idVeiculo'];
$placa = $_POST['placa'];
$renavam = $_POST['renavam'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$cor = $_POST['cor'];
$ano = $_POST['ano'];

if ($idVeiculo && $placa && $renavam && $marca && $modelo && $cor && $ano) {

    $obj = new Veiculo();
    $dao = new DAOVeiculo();

    $obj->setIdVeiculo($idVeiculo);
    $obj->setPlaca($placa);
    $obj->setRenavam($renavam);
    $obj->setMarca($marca);
    $obj->setModelo($modelo);
    $obj->setCor($cor);
    $obj->setAno($ano);

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