<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>

    <style>
        a {
            border: 2px solid #243757;
            background-color: #e0e0e0;
            color: #424242;
            font-size: 18px;
            padding: 8px;
            font-family: Verdana;
        }

        label {
            border: 2px solid #243757;
            padding: 4px;
            text-align: center;
            font-family: Verdana
        }

        button {
            border: 2px solid #243757;
            background-color: #e0e0e0;
            color: #424242;
            font-size: 18px;
            padding: 8px;
            font-family: Verdana;
        }

        input {
            border: 2px solid #243757;
            padding: 4px;
            text-align: center;
        }

        .container {
            width: 78vh;
            height: 5vh;
            background: #dad5b7;
        }
    </style>

</head>

<body style="background-color: #dad5b7;">

    <form action="cadastroCliente.php" method="post">

        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br><br>

        <label for="cpf">CPF: </label>
        <input type="text" id="cpf" name="cpf" autocomplete="off" maxlength="14" ><br><br>

        <label for="telefone">Telefone: </label>
        <input type="text" id="telefone" name="telefone" autocomplete="off" maxlength="14"><br><br>

        <button>SALVAR</button><br><br>

        <div class="container"></div>

        <a href="/Sistema-Concessionaria">Inicio</a>

        <script src="../scripts/cliente.js"></script>

    </form>
</body>

</html>