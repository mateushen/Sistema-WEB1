<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de forma de pagamento</title>
</head>

<body>
    <?php
    require_once '../../modelo/Pagamento.php';
    require_once '../../dao/DAOPagamento.php';
    require_once '../../dao/Conexao.php';

    $tipo_pagamento = filter_input(INPUT_POST, 'tipo_pagamento');

    if ($tipo_pagamento) {

        $obj = new Pagamento();
        $dao = new DAOPagamento();

        $obj->setTipo_pagamento($tipo_pagamento);

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