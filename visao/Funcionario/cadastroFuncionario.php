<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de funcionário</title>
</head>

<body>
    <?php
    require_once '../../modelo/Funcionario.php';
    require_once '../../dao/DAOFuncionario.php';
    require_once '../../dao/Conexao.php';

    $nome = filter_input(INPUT_POST, 'nome');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $email = filter_input(INPUT_POST, 'email');
    $senha = filter_input(INPUT_POST, 'senha');

    if ($nome && $cpf && $email && $senha) {

        $obj = new Funcionario();

        $obj->setNome($nome);
        $obj->setCpf($cpf);
        $obj->setEmail($email);
        $obj->setSenha($senha);
        $obj->setIdGerente('1');

        $dao = new DAOFuncionario();

        try {
            $dao->inclui($obj);
            echo 'SALVO';
        } catch (Exception $e) {
            echo 'ERRO: ',  $e->getMessage(), "\n";
        }
    } else {
        echo 'Dados inválidos';
    }

    ?>
    <br><br>
    <a href="/Sistema-WEB1">Inicio</a>
</body>

</html>