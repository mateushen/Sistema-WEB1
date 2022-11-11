<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de veículo</title>
</head>

<body>
    <?php
    require_once '../../dao/Conexao.php';
    require_once '../../dao/DAOVeiculo.php';

    $idVeiculo = $_POST['idVeiculo'];

    if ($idVeiculo) {
        $dao = new DAOVeiculo();
        $dao->exclui($idVeiculo);
        header('Location: listagemVeiculo,php');
    }
    ?>
</body>

</html>