<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de venda</title>
</head>

<body>
    <h1>Exclusão</h1>
    <?php
    require_once '../../dao/Conexao.php';
    require_once '../../dao/DAOVenda.php';

    $idVenda = $_POST['idVenda'];

    $dao = new DAOVenda();

    try {
        $dao->exclui($idVenda);
        echo 'DELETADO!';
    } catch (Exception $e) {
        echo 'ERRO: ',  $e->getMessage(), "\n";
    }
    ?>

    <br><br>
    <a href="/Sistema-WEB1">Inicio</a>
</body>

</html>