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

    $idVenda = $_POST['idVenda'];

    if($idVenda){
        $dao = new DAOVenda();
        $dao->exclui($idVenda);
        header('Location: listagemVenda.php');
    }
    ?>
</body>

</html>