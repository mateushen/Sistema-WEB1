<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão</title>
    <style>
        a {
            border: 2px solid #ccc;
            background-color: #fff;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Exclusão</h1>
    <?php
    require_once '../../modelo/Cliente.php';
    require_once '../../dao/Conexao.php';
    require_once '../../dao/DAOCliente.php';

    $idCliente = $_POST['idCliente'];

    $dao = new DAOCliente();

    try {
        $dao->exclui($idCliente);
        echo 'DELETADO!';
    } catch (Exception $e) {
        echo 'ERRO: ',  $e->getMessage(), "\n";
    }
    ?>
    <br><br>
    <a href="/Sistema-Concessionaria">Inicio</a>
</body>

</html>