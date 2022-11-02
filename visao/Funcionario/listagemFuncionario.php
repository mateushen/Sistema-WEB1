<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de funcionários</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div>
        <h1>LISTAGEM DE FUNCIONÁRIO</h1>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>E-mail</th>
        </tr>
        <?php
        require_once '../../dao/DAOFuncionario.php';
        require_once '../../dao/Conexao.php';

        $dao = new DAOFuncionario();
        $lista = $dao->lista();

        foreach ($lista as $l) {
            echo "<tr>";

            echo '<td>' . $l['idFuncionario'] . "</td>";
            echo '<td>' . $l['nome'] . "</td>";
            echo '<td>' . $l['cpf'] . "</td>";
            echo '<td>' . $l['email'] . "</td>";

            echo '<td>
            <form method="POST" action="excluiFuncionario.php">
            <input type="submit" value="" id="trash" name="excluir">
            <input type="hidden" value="' . $l['idFuncionario'] . '" id="idFuncionario" name="idFuncionario">
            </form></td>';

            echo '<td>
            <form method="POST" action="formEditaFuncionario.php">
            <input type="submit" value="" id="edit" name="editar">
            <input type="hidden" value="' . $l['idFuncionario'] . '" id="idFuncionario" name="idFuncionario">
            </form></td>';

            echo "</tr>";
        }

        ?>
    </table>
    <div></div>
    <a href="/Sistema-WEB1">Inicio</a>
</body>

</html>