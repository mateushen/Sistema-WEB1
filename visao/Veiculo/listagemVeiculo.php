<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de veículos</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>

    <div>
        <h1>LISTAGEM DE MOTOS</h1>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Placa</th>
            <th>Renavam</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cor</th>
            <th>Ano</th>
        </tr>
        <?php
        require_once '../../dao/DAOVeiculo.php';
        require_once '../../dao/Conexao.php';

        $dao = new DAOVeiculo();
        $lista = $dao->lista();

        foreach ($lista as $l) {
            echo "<tr>";

            echo '<td>' . $l['idVeiculo'] . "</td>";
            echo '<td>' . $l['placa'] . "</td>";
            echo '<td>' . $l['renavam'] . "</td>";
            echo '<td>' . $l['marca'] . "</td>";
            echo '<td>' . $l['modelo'] . "</td>";
            echo '<td>' . $l['cor'] . "</td>";
            echo '<td>' . $l['ano'] . "</td>";

            echo '<td>
            <form method="POST" action="excluiVeiculo.php">
            <input type="submit" value="" id="trash" name="excluir">
            <input type="hidden" value="' . $l['idVeiculo'] . '" id="idVeiculo" name="idVeiculo">
            </form></td>';

            echo '<td>
            <form method="POST" action="formEditaVeiculo.php">
            <input type="submit" value="" id="edit" name="editar">
            <input type="hidden" value="' . $l['idVeiculo'] . '" id="idVeiculo" name="idVeiculo">
            </form></td>';

            echo "</tr>";
        }

        ?>
    </table>
    <div></div>
    <a href="/Sistema-WEB1">Inicio</a>
</body>

</html>