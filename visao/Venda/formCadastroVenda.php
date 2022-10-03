<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Venda</title>

</head>

<body>

    <form action="cadastroVenda.php" method="post">

        <select name="funcionario">
            <option value="valor1">Valor 1</option>
            <option value="valor2" selected>Valor 2</option>
            <option value="valor3">Valor 3</option>
        </select>

        <select name="cliente">
            <option value="valor1">Valor 1</option>
            <option value="valor2" selected>Valor 2</option>
            <option value="valor3">Valor 3</option>
        </select>

        <select name="veiculo">
            <option value="valor1">Valor 1</option>
            <option value="valor2" selected>Valor 2</option>
            <option value="valor3">Valor 3</option>
        </select>

        <select name="pagamento">
            <option value="valor1">Valor 1</option>
            <option value="valor2" selected>Valor 2</option>
            <option value="valor3">Valor 3</option>
        </select>

        <button>SALVAR</button><br><br>

        <div></div>

        <a href="/Sistema-Concessionaria">Inicio</a>

        <script src="../scripts/main.js"></script>

    </form>
</body>

</html>