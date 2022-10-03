<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de forma de venda</title>
</head>

<body>
    <?php
    require_once '../../modelo/Venda.php';
    require_once '../../dao/DAOVenda.php';
    require_once '../../dao/Conexao.php';

    $idFuncionario = filter_input(INPUT_POST, 'idFuncionario');
    $idCliente = filter_input(INPUT_POST, 'idCliente');
    $idVeiculo = filter_input(INPUT_POST, 'idVeiculo');
    $idPagamento = filter_input(INPUT_POST, 'idPagamento');
    $data_venda = filter_input(INPUT_POST, 'data_venda');

    if ($idFuncionario && $idCliente && $idVeiculo && $idPagamento && $data_venda) {

        $obj = new Venda();
        $dao = new DAOVenda();

        $obj->setIdFuncionario($idFuncionario);
        $obj->setIdCliente($idCliente);
        $obj->setIdVeiculo($idVeiculo);
        $obj->setIdPagamento($idPagamento);
        $obj->setData_venda($data_venda);

        try {
            $dao->inclui($obj);
            echo 'SALVO';
        } catch (Exception $e) {
            echo 'ERRO: ',  $e->getMessage(), "\n";
        }
    } else {
        echo 'Dados inválidos';
    }

    ?>
    <br><br>
    <a href="/Sistema-Concessionaria">Inicio</a>
</body>

</html>