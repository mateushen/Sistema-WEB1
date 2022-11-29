<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="icon" type="imagem/png" href="visao/img/logo.png" />
    <link rel="stylesheet" href="visao/css/form.css">
    <link rel="stylesheet" href="visao/css/header.css">
    <link rel="stylesheet" href="visao/css/footer.css">
</head>

<body>

    <?php
    //Verifica se existe um gerente no id 1, se não existir ocorre a adição de um gerente
    require_once 'dao/Conexao.php';
    require_once 'dao/DAOGerente.php';

    $dao = new DAOGerente();

    $lista = $dao->lista();

    if ($lista) {
        header('Location: main.php');
    }else{
        header('Location: visao/Gerente/formCadastroGerente.php');
    }
    ?>

</body>

</html>