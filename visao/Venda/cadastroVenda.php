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
    require_once '../../modelo/Funcionario.php';
    require_once '../../dao/DAOFuncionario.php';
    require_once '../../modelo/Cliente.php';
    require_once '../../dao/DAOCliente.php';
    require_once '../../modelo/Veiculo.php';
    require_once '../../dao/DAOVeiculo.php';
    require_once '../../modelo/Pagamento.php';
    require_once '../../dao/DAOPagamento.php';

    $nomeFuncionario = $_POST['funcionario'];
    $nomeCliente = $_POST['cliente'];
    $veiculo = $_POST['veiculo'];
    $pagamento = $_POST['pagamento'];

    $daoF = new DAOFuncionario();
    $idF = $daoF->retornaID($nomeFuncionario);

    $daoC = new DAOCliente();
    $idC = $daoC->retornaID($nomeCliente);

    $daoV = new DAOVeiculo();
    $idV = $daoV->retornaID($veiculo);

    $daoP = new DAOPagamento();
    $idP = $daoP->retornaID($pagamento);

    $listaFuncionario = $idF[0];
    $listaCliente = $idC[0];
    $listaVeiculo = $idV[0];
    $listaPagamento = $idP[0];

    $idFuncionario = $listaFuncionario['idFuncionario'];
    $idCliente = $listaCliente['idCliente'];
    $idVeiculo = $listaVeiculo['idVeiculo'];
    $idPagamento = $listaPagamento['idPagamento'];

    $data_venda =date('d/m/y');

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
            $daoVeiculo->motoVendida($idVeiculo);
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