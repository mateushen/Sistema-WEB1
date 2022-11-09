<?php
require_once '../../modelo/Veiculo.php';
require_once '../../dao/DAOVeiculo.php';
require_once '../../dao/Conexao.php';

$idVeiculo = filter_input(INPUT_POST, 'idVeiculo');
$placa = filter_input(INPUT_POST, 'placa');
$renavam = filter_input(INPUT_POST, 'renavam');
$marca = filter_input(INPUT_POST, 'marca');
$modelo = filter_input(INPUT_POST, 'modelo');
$cor = filter_input(INPUT_POST, 'cor');
$ano = filter_input(INPUT_POST, 'ano');

var_dump($idVeiculo);
var_dump($placa);

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
