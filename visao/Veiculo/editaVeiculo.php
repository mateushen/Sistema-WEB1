<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de veículo</title>
</head>

<body>
    <?php
    require_once '../../modelo/Veiculo.php';
    require_once '../../dao/DAOVeiculo.php';
    require_once '../../dao/Conexao.php';

    $idVeiculo = filter_input(INPUT_POST, 'idVeiculo');
    $placa = filter_input(INPUT_POST, 'placa');
    $renavam = filter_input(INPUT_POST, 'renavam');
    $marca = filter_input(INPUT_POST, 'marca');
    $modelo = filter_input(INPUT_POST, 'modelo');
    $cor = filter_input(INPUT_POST, 'cor');
    $ano = filter_input(INPUT_POST, 'ano');

    $tamPlaca = strlen($placa);
    $tamAno = strlen($ano);
    $tamRenavam = strlen($renavam);

    if ($idVeiculo && $tamPlaca == 8 && $tamRenavam == 11 && $marca && $modelo && $cor && $tamAno == 4) {

        $obj = new Veiculo();
        $dao = new DAOVeiculo();

        $obj->setIdVeiculo($idVeiculo);
        $obj->setPlaca($placa);
        $obj->setRenavam($renavam);
        $obj->setMarca($marca);
        $obj->setModelo($modelo);
        $obj->setCor($cor);
        $obj->setAno($ano);

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
    <a href="/Sistema-WEB1">Inicio</a>
</body>

</html>