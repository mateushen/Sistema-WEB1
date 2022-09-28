<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de cliente</title>
</head>

<body>
    <?php
    require_once '../../modelo/Cliente.php';
    require_once '../../dao/DAOCliente.php';
    require_once '../../dao/Conexao.php';

    $idCliente = filter_input(INPUT_POST, 'idCliente');
    $nome = filter_input(INPUT_POST, 'nome');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $telefone = filter_input(INPUT_POST, 'telefone');

    $tamCPF = strlen($cpf);
    $tamTEL = strlen($telefone);

    if ($idCliente && $nome && $cpf && $telefone && $tamCPF == 14 && $tamTEL == 14) {

        $obj = new Cliente();
        $dao = new DAOCliente();

        $obj->setIdCliente($idCliente);
        $obj->setNome($nome);
        $obj->setCpf($cpf);
        $obj->setTelefone($telefone);

        try {
            $dao->altera($obj);
            echo 'DADOS ALTERADOS';
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