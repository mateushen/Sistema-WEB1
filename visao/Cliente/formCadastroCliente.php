<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>

<body>

    <form action="cadastroCliente.php" onSubmit="return (verifica())" name="frmEnvia" method="post">

        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" maxlength="25" onkeypress="return somenteLetras(event)"><br><br>

        <label for="cpf">CPF: </label>
        <input type="text" id="cpf" name="cpf" autocomplete="off" maxlength="14" onkeypress="return somenteNumeros(event)"><br><br>

        <label for="telefone">Telefone: </label>
        <input type="text" id="telefone" name="telefone" autocomplete="off" maxlength="14" onkeypress="return somenteNumeros(event)"><br><br>

        <button>SALVAR</button><br><br>

        <script src="../scripts/cliente.js"></script>
        <script src="../scripts/main.js"></script>
    </form>

    <a href="/Sistema-WEB1">Inicio</a>
</body>

</html>