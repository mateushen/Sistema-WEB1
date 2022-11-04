<?php
require_once '../../modelo/Veiculo.php';
require_once '../../dao/DAOVeiculo.php';
require_once '../../dao/Conexao.php';

$placa = filter_input(INPUT_POST, 'placa');
$renavam = filter_input(INPUT_POST, 'renavam');
$marca = filter_input(INPUT_POST, 'marca');
$modelo = filter_input(INPUT_POST, 'modelo');
$cor = filter_input(INPUT_POST, 'cor');
$ano = filter_input(INPUT_POST, 'ano');

if ($placa && $renavam && $marca && $modelo && $cor && $ano) {

    $obj = new Veiculo();
    $dao = new DAOVeiculo();

    $obj->setPlaca($placa);
    $obj->setRenavam($renavam);
    $obj->setMarca($marca);
    $obj->setModelo($modelo);
    $obj->setCor($cor);
    $obj->setAno($ano);
    $obj->setVendido(0);

    try {
        $dao->inclui($obj);
        $retorno = [
            'status' => 'ok',
            'mensagem' => 'Veículo cadastrado com sucesso!',
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