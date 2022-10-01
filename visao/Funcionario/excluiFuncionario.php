<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de funcionário</title>
</head>

<body>
    <h1>Exclusão</h1>
    <?php
    require_once '../../dao/Conexao.php';
    require_once '../../dao/DAOFuncionario.php';

    $idFuncionario = $_POST['idFuncionario'];

    $dao = new DAOFuncionario();

    try {
        $dao->exclui($idFuncionario);
        echo 'DELETADO!';
    } catch (Exception $e) {
        echo 'ERRO: ', $e->getMessage(), "\n";
    }
    ?>
    <br><br>
    <a href="/Sistema-Concessionaria">Inicio</a>
</body>

</html>