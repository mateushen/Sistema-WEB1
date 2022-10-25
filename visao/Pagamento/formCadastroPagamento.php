<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>

</head>

<body>

    <form action="cadastroPagamento.php" method="post">

        <label for="tipo_pagamento">Tipo de pagamento: </label>
        <input type="text" name="tipo_pagamento" id="tipo_pagamento" onkeypress="return somenteLetras(event)"><br><br>

        <button>SALVAR</button><br><br>

        <script src="../scripts/main.js"></script>

    </form>

    <a href="/Sistema-WEB1">Inicio</a>

</body>

</html>