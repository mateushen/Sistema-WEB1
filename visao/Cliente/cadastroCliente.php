<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
</head>

<body>
    <?php
    require_once '../../modelo/Cliente.php';
    require_once '../../dao/DAOCliente.php';
    require_once '../../dao/Conexao.php';

    $nome = filter_input(INPUT_POST, 'nome');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $telefone = filter_input(INPUT_POST, 'telefone');

    if ($nome && $cpf && $telefone) {

        $obj = new Cliente();

        $obj->setNome($nome);
        $obj->setCpf($cpf);
        $obj->setTelefone($telefone);

        $dao = new DAOCliente();

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
    <a href="/Sistema-Concessionaria">Inicio</a>
</body>

</html>