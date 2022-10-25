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

    $idCliente = $_POST['idCliente'];

    $dao = new DAOCliente();

    $lista = $dao->buscaID($idCliente);

    $veiculo = $lista[0];

    ?>
    <form action="editaVeiculo.php" onSubmit="return (verifica())" name="frmEnvia" method="post">

        <input type="hidden" id="idVeiculo" name="idVeiculo" value="<?= $veiculo['idVeiculo'] ?>">

        <label for="placa">Placa: </label>
        <input type="text" name="placa " id="placa" value="<?= $veiculo['placa'] ?>" autocomplete="off" maxlength="8"><br><br>

        <label for="renavam">Renavam: </label>
        <input type="text" name="renavam" id="renavam" value="<?= $veiculo['renavam'] ?>" onkeypress="return somenteNumeros(event)" maxlength="11"><br><br>

        <label for="marca">Marca: </label>
        <input type="text" name="marca" id="marca" value="<?= $veiculo['marca'] ?>" onkeypress="return somenteLetras(event)" maxlength="15"><br><br>

        <label for="modelo">Modelo: </label>
        <input type="text" name="modelo" id="modelo" value="<?= $veiculo['modelo'] ?>" maxlength="15"><br><br>

        <label for="cor">Cor: </label>
        <input type="text" name="cor" id="cor" value="<?= $veiculo['cor'] ?>" onkeypress="return somenteLetras(event)" maxlength="15"><br><br>

        <label for="ano">Ano: </label>
        <input type="text" name="ano" id="ano" value="<?= $veiculo['ano'] ?>" onkeypress="return somenteNumeros(event)" maxlength="4"><br><br>

        <button>SALVAR</button><br><br>

        <script src="../scripts/veiculo.js"></script>
        <script src="../scripts/main.js"></script>
    </form>

    <a href="/Sistema-WEB1">Inicio</a>

</body>

</html>