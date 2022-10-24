<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Funcionário</title>
</head>

<body>

    <form action="loginFuncionario.php" onSubmit="return (verifica())" name="frmEnvia" method="post">

        <label for="cpf">CPF: </label>
        <input type="text" id="cpf" name="cpf" autocomplete="off" maxlength="14" onkeypress="return somenteNumeros(event)"><br><br>

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" maxlength="6"><br><br>

        <button>ENTRAR</button><br><br>

        <script src="../scripts/main.js"></script>
        <script src="../scripts/login.js"></script>

    </form>
</body>

</html>