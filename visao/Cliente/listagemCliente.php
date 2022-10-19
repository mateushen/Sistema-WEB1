<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <style>
        #trash {
            width: 5vh;
            height: 5vh;
            background-image: url("../img/iconExclui.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 4vh;
            padding-left: 4vh;
        }

        #edit {
            width: 5vh;
            height: 5vh;
            background-image: url("../img/iconEdita.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 4vh;
            padding-left: 4vh;
        }
    </style>
</head>

<body>
    <div>
        <h1>LISTAGEM DE CLIENTES</h1>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
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
    <div></div>
    <a href="/Sistema-WEB1">Inicio</a>
</body>

</html>