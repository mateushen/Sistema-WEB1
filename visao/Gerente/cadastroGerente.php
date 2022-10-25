<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de gerente</title>
</head>

<body>
    <?php
    require_once '../../modelo/Gerente.php';
    require_once '../../dao/DAOGerente.php';
    require_once '../../dao/Conexao.php';

    $nome = filter_input(INPUT_POST, 'nome');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $senha = filter_input(INPUT_POST, 'senha');

    $senha_crip = password_hash($senha, PASSWORD_DEFAULT);

    if ($nome && $cpf && $senha_crip) {

        $obj = new Gerente();

        $obj->setIdGerente(1);
        $obj->setNome($nome);
        $obj->setCpf($cpf);
        $obj->setSenha($senha_crip);

        $dao = new DAOGerente();

        try {
            $dao->inclui($obj);
            header('location: ../Veiculo/listagemVeiculo.php');
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