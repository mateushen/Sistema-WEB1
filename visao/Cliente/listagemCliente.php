<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <style>
        /* Formatação */
        td {
            border: 2px solid #243757;
            padding: 8px;
            text-align: center;
            background-color: #e0e0e0;
            font-family: Verdana;
        }

        th {
            border: 2px solid #243757;
            background-color: #3a5f6f;
            color: #fff;
            font-size: 18px;
            padding: 8px;
            text-align: center;
            font-family: Verdana;
        }

        a {
            border: 2px solid #243757;
            background-color: #e0e0e0;
            color: #424242;
            font-size: 18px;
            padding: 8px;
            font-family: Verdana;
        }

        .container {
            width: 78vh;
            height: 10vh;
            padding-left: 70px;
            font-family: Verdana;
        }

        .box {
            width: 78vh;
            height: 5vh;
        }

        #trash {
            width: 5vh;
            height: 5vh;
            background-image: url("../img/trash.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 4vh;
            padding-left: 4vh;
        }
        #edit {
            width: 5vh;
            height: 5vh;
            background-image: url("../img/pencil.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 4vh;
            padding-left: 4vh;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>LISTAGEM DE CLIENTES</h1>
    </div>

    <table style="width: '100%'">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>EXCLUIR</th>
            <th>EDITAR</th>
        </tr>
        <?php
        require_once '../../dao/DAOCliente.php';
        require_once '../../dao/Conexao.php';

        $dao = new DAOCliente();
        $lista = $dao->lista();

        foreach ($lista as $l) {
            echo "<tr>";

            echo '<td>' . $l['idCliente'] . "</td>";
            echo '<td>' . $l['nome'] . "</td>";
            echo '<td>' . $l['cpf'] . "</td>";
            echo '<td>' . $l['telefone'] . "</td>";

            echo '<td>
            <form method="POST" action="excluiCliente.php">
            <input type="submit" value="" id="trash" name="excluir">
            <input type="hidden" value="' . $l['idCliente'] . '" id="idCliente" name="idCliente">
            </form></td>';

            echo '<td>
            <form method="POST" action="formEditaCliente.php">
            <input type="submit" value="" id="edit" name="editar">
            <input type="hidden" value="' . $l['idCliente'] . '" id="idCliente" name="idCliente">
            </form></td>';

            echo "</tr>";
        }

        ?>
    </table>
    <div class="box"></div>
    <a href="/Sistema-Concessionaria">Inicio</a>
</body>

</html>