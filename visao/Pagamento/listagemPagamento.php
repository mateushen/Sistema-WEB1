<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de tipos de pagamento</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div>
        <h1>TIPOS DE PAGAMENTO</h1>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Tipo</th>
        </tr>
        <?php
        require_once '../../dao/DAOPagamento.php';
        require_once '../../dao/Conexao.php';

        $dao = new DAOPagamento();
        $lista = $dao->lista();

        foreach ($lista as $l) {
            echo "<tr>";

            echo '<td>' . $l['idPagamento'] . "</td>";
            echo '<td>' . $l['tipo_pagamento'] . "</td>";

            echo '<td>
            <form method="POST" action="excluiPagamento.php">
            <input type="submit" value="" id="trash" name="excluir">
            <input type="hidden" value="' . $l['idPagamento'] . '" id="idPagamento" name="idPagamento">
            </form></td>';

            echo "</tr>";
        }

        ?>
    </table>
    <div></div>
    <a href="/Sistema-WEB1">Inicio</a>
</body>

</html>