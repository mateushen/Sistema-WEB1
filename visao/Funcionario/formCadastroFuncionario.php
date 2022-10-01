<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de funcionário</title>
</head>

<body>

    <form action="cadastroFuncionario.php" onSubmit="return (verifica())" name="frmEnvia" method="post">

        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" maxlength="25" onkeypress="return somenteLetras(event)"><br><br>

        <label for="cpf">CPF: </label>
        <input type="text" id="cpf" name="cpf" autocomplete="off" maxlength="14" onkeypress="return somenteNumeros(event)"><br><br>

        <label for="email">E-mail: </label>
        <input type="text" name="email" id="email" onblur="checarEmail();"><br><br>

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" maxlength="6"><br><br>

        <button>SALVAR</button><br><br>

        <div></div>

        <a href="/Sistema-Concessionaria">Inicio</a>

        <script src="../scripts/funcionario.js"></script>
        <script src="../scripts/main.js"></script>

    </form>
</body>

</html>