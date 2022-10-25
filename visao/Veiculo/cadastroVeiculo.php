<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de veículo</title>
</head>

<body>
    <?php
    require_once '../../modelo/Veiculo.php';
    require_once '../../dao/DAOVeiculo.php';
    require_once '../../dao/Conexao.php';

    $placa = filter_input(INPUT_POST, 'placa');
    $renavam = filter_input(INPUT_POST, 'renavam');
    $marca = filter_input(INPUT_POST, 'marca');
    $modelo = filter_input(INPUT_POST, 'modelo');
    $cor = filter_input(INPUT_POST, 'cor');
    $ano = filter_input(INPUT_POST, 'ano');

    if ($placa && $renavam && $marca && $modelo && $cor && $ano) {

        $obj = new Veiculo();
        $dao = new DAOVeiculo();

        $obj->setPlaca($placa);
        $obj->setRenavam($renavam);
        $obj->setMarca($marca);
        $obj->setModelo($modelo);
        $obj->setCor($cor);
        $obj->setAno($ano);
        $obj->setVendido(0);

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