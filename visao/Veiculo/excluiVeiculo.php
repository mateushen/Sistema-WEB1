<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de veículo</title>
</head>

<body>
    <h1>Exclusão</h1>
    <?php
    require_once '../../dao/Conexao.php';
    require_once '../../dao/DAOVeiculo.php';

    $idVeiculo = $_POST['idVeiculo'];

    $dao = new DAOVeiculo();

    try {
        $dao->exclui($idVeiculo);
        echo 'DELETADO!';
    } catch (Exception $e) {
        echo 'ERRO: ',  $e->getMessage(), "\n";
    }
    ?>
    <br><br>
    <a href="/Sistema-WEB1">Inicio</a>
</body>

</html>