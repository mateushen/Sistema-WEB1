<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de vendas</title>
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
    </style>
</head>

<body>
    <div>
        <h1>VENDAS CADASTRADAS</h1>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Funcionário</th>
            <th>Cliente</th>
            <th>Veículo</th>
            <th>Tipo de pgto</th>
            <th>Data</th>
        </tr>
        <?php
        require_once '../../dao/DAOVenda.php';
        require_once '../../dao/Conexao.php';

        $dao = new DAOVenda();
        $lista = $dao->lista();

        foreach ($lista as $l) {
            echo "<tr>";

            echo '<td>' . $l['idVenda'] . "</td>";
            echo '<td>' . $l['funcionario'] . '</td>';
            echo '<td>' . $l['cliente'] . '</td>';
            echo '<td>' . $l['veiculo'] . '</td>';
            echo '<td>' . $l['pgto'] . '</td>';
            echo '<td>' . $l['data'] . '</td>';

            echo '<td>
            <form method="POST" action="excluiVenda.php">
            <input type="submit" value="" id="trash" name="excluir">
            <input type="hidden" value="' . $l['idVenda'] . '" id="idVenda" name="idVenda">
            </form></td>';

            echo "</tr>";
        }

        ?>
    </table>
    <div></div>
    <a href="/Sistema-WEB1">Inicio</a>
</body>

</html>