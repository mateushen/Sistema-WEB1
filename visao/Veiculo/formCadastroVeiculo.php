<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de veículo</title>
</head>

<body>

    <form action="cadastroVeiculo.php" onSubmit="return (verifica())" name="frmEnvia" method="post">

        <label for="placa">Placa: </label>
        <input type="text" id="placa" name="placa" autocomplete="off" maxlength="8"><br><br>

        <label for="renavam">Renavam: </label>
        <input type="text" name="renavam" id="renavam" onkeypress="return somenteNumeros(event)" maxlength="11"><br><br>

        <label for="marca">Marca: </label>
        <input type="text" name="marca" id="marca" onkeypress="return somenteLetras(event)" maxlength="15"><br><br>

        <label for="modelo">Modelo: </label>
        <input type="text" name="modelo" id="modelo" maxlength="15"><br><br>

        <label for="cor">Cor: </label>
        <input type="text" name="cor" id="cor" onkeypress="return somenteLetras(event)" maxlength="15"><br><br>

        <label for="ano">Ano: </label>
        <input type="text" name="ano" id="ano" onkeypress="return somenteNumeros(event)" maxlength="4"><br><br>

        <button>SALVAR</button><br><br>

        <script src="../scripts/veiculo.js"></script>
        <script src="../scripts/main.js"></script>

    </form>

    <a href="/Sistema-WEB1">Inicio</a>

</body>

</html>