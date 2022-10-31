<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de venda</title>
</head>

<body>
    <?php
    require_once '../../dao/Conexao.php';
    require_once '../../modelo/Venda.php';
    require_once '../../dao/DAOVenda.php';
    require_once '../../modelo/Veiculo.php';
    require_once '../../dao/DAOVeiculo.php';

    $idFuncionario = $_POST['funcionario'];
    $idCliente = $_POST['cliente'];
    $idVeiculo = $_POST['veiculo'];
    $idPagamento = $_POST['pagamento'];

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
            echo 'SALVO';
        } catch (Exception $e) {
            echo 'ERRO: ',  $e->getMessage(), "\n";
        }
    } else {
        echo 'Dados inválidos';
    }

    ?>
    <br><br>
    <a href="/Sistema-WEB1">Inicio</a>
</body>

</html>