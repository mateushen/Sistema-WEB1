<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de funcionário</title>
</head>

<body>
    <?php
    require_once '../../modelo/Funcionario.php';
    require_once '../../dao/DAOFuncionario.php';
    require_once '../../dao/Conexao.php';

    $cpf = filter_input(INPUT_POST, 'cpf');
    $senha = filter_input(INPUT_POST, 'senha');

    $dao = new DAOFuncionario();
    $lista = $dao->login($cpf, $senha);

    if ($lista) {
        echo 'Autenticação confirmada';
    } else {
        echo 'Dados inválidos';
    }

    ?>
    <br><br>
    <a href="/Sistema-WEB1">Inicio</a>
</body>

</html>