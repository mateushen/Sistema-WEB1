<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de forma de pagamento</title>
</head>

<body>
    <?php
    require_once '../../dao/Conexao.php';
    require_once '../../dao/DAOPagamento.php';

    $idPagamento = $_POST['idPagamento'];

    if ($idPagamento) {
        $dao = new DAOPagamento();
        $dao->exclui($idPagamento);
        header('Location: listagemPagamento.php');
    }
    ?>
</body>

</html>