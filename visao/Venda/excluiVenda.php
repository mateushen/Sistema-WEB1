<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de venda</title>
</head>

<body>
    <?php
    require_once '../../dao/Conexao.php';
    require_once '../../dao/DAOVenda.php';
    require_once '../../dao/DAOVeiculo.php';

    $idVenda = $_POST['idVenda'];

    if ($idVenda) {
        try {
            $venda = new DAOVenda();
            $veiculo = new DAOVeiculo();

            $lista = $venda->buscaID($idVenda);
            $listaAux = $lista[0];
            $veiculo->retiraVenda($listaAux['idVeiculo']);
            $venda->exclui($idVenda);
            $retorno = [
                'status' => 'ok',
                'mensagem' => 'Venda excluída com sucesso!',
            ];
        } catch (Exception $e) {
            $retorno = [
                'status' => 'error',
                'mensagem' => 'Erro ao excluir a venda!',
            ];
        }
    } else {
        $retorno = [
            'status' => 'error',
            'mensagem' => 'Erro ao excluir a venda!',
        ];
    }
    echo json_encode($retorno);
    ?>
</body>

</html>