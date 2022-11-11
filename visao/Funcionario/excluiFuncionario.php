<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de funcionário</title>
</head>

<body>
    <?php
    require_once '../../dao/Conexao.php';
    require_once '../../dao/DAOFuncionario.php';

    $idFuncionario = $_POST['idFuncionario'];

    if ($idFuncionario) {
        $dao = new DAOFuncionario();
        $dao->exclui($idFuncionario);
        header('Location: listagemFuncionario.php');
    }
    ?>
</body>

</html>