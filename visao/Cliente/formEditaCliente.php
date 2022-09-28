<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de cliente</title>
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
            font-family: Verdana;
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

<body style="background-color:#dad5b7;">
    <?php
    require_once '../../modelo/Cliente.php';
    require_once '../../dao/DAOCliente.php';
    require_once '../../dao/Conexao.php';

    $idCliente = $_POST['idCliente'];

    $dao = new DAOCliente();

    $lista = $dao->buscaID($idCliente);

    $cliente = $lista[0];

    ?>
    <form action="editaCliente.php" method="post">

        <input type="hidden" id="idCliente" name="idCliente" value="<?= $cliente['idCliente'] ?>">

        <label for="nome">Nome: </label>
        <input type="text" id="nome" autocomplete="off" name="nome" maxlength="8" value="<?= $cliente['nome'] ?>"><br><br>

        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" id="cpf" autocomplete="off" maxlength="14" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="<?= $cliente['cpf'] ?>"><br><br>

        <label for="telefone">Telefone: </label>
        <input type="text" name="telefone" id="telefone" autocomplete="off" maxlength="14" value="<?= $cliente['telefone'] ?>"><br><br>

        <button>SALVAR</button><br><br>

        <div class="container"></div>

        <a href="/conexaoWEB1">Inicio</a>

        <script src="../scripts/cliente.js"></script>

</body>

</html>