<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de vendas</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/main.css">
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
        $lista = $dao->listagemVenda();

        foreach ($lista as $l) {
            echo "<tr>";

            echo '<td>' . $l['idVenda'] . "</td>";
            echo '<td>' . $l['FNome'] . '</td>';
            echo '<td>' . $l['CNome'] . '</td>';
            echo '<td>' . $l['modelo'] . '</td>';
            echo '<td>' . $l['pgto'] . '</td>';
            echo '<td>' . $l['data_venda'] . '</td>';

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