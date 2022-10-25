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

    $cliente = $lista[0];

    ?>
    <form action="editaCliente.php" onSubmit="return (verifica())" name="frmEnvia" method="post">

        <input type="hidden" id="idCliente" name="idCliente" value="<?= $cliente['idCliente'] ?>">

        <label for="nome">Nome: </label>
        <input type="text" id="nome" autocomplete="off" name="nome" maxlength="25" value="<?= $cliente['nome'] ?>"><br><br>

        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" id="cpf" autocomplete="off" maxlength="14" onkeypress="return somenteNumeros(event)" value="<?= $cliente['cpf'] ?>"><br><br>

        <label for="telefone">Telefone: </label>
        <input type="text" name="telefone" id="telefone" autocomplete="off" maxlength="14" onkeypress="return somenteNumeros(event)" value="<?= $cliente['telefone'] ?>"><br><br>

        <button>SALVAR</button><br><br>

        <script src="../scripts/cliente.js"></script>
        <script src="../scripts/main.js"></script>
    </form>

    <a href="/Sistema-WEB1">Inicio</a>

</body>

</html>