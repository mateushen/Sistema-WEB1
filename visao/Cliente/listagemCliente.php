<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de clientes</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/listing.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script type="text/javascript" src="scripts/deletedata.js"></script>

    <?php
    require_once '../functions.php';
    session_start();
    $status = $_SESSION['status'];

    $function = new Functions();
    $function->verificaSessao($status);
    ?>

</head>

<body>

    <header>

        <?php
        $user = $_SESSION['user'];

        if ($user == 'Gerente') {
            echo '<div class="img-back">
                <a href="../PainelGerente/"><img src="../img/icon-back.png" width="80" height="80" /></a>
                </div>';
        } else if ($user == 'Funcionario') {
            echo '<div class="img-back">
                <a href="../PainelFuncionario/"><img src="../img/icon-back.png" width="80" height="80" /></a>
                </div>';
        }
        ?>

        <div class="header">
            <img src="../img/title.png" />
        </div>
    </header>

    <div class="bar"></div>

    <main>
        <div class="title">
            <h1>LISTAGEM DE CLIENTES</h1>
        </div><br><br>

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

                echo '<td class="item">' . $l['idCliente'] . "</td>";
                echo '<td class="item">' . $l['nome'] . "</td>";
                echo '<td class="item">' . $l['cpf'] . "</td>";
                echo '<td class="item">' . $l['telefone'] . "</td>";

                echo '<td class="action">
                <form class="exclui">
                <input type="submit" value="" id="trash" name="excluir">
                <input type="hidden" value="' . $l['idCliente'] . '" id="delete" class="delete">
                </form></td>';

                echo '<td class="action">
                <form method="POST" action="formEditaCliente.php">
                <input type="submit" value="" id="edit" name="editar">
                <input type="hidden" value="' . $l['idCliente'] . '" id="idCliente" name="idCliente">
                </form></td>';

                echo "</tr>";
            }

            ?>
        </table>
        <br><br>
        <p id="msg"></p>
        <br><br>
        <a class="new-register" href="formCadastroCliente.php">CADASTRAR NOVO CLIENTE</a><br><br>
    </main>

    <footer>
        <div class="footer-penult">
            <img class="logo" src="../img/logo.png" />
            <div class="social">
                <p class="pub">Siga WEBCars nas redes sociais:</p>
                <img class="icon-social" src="../img/icon-facebook.png" />
                <img class="icon-social" src="../img/icon-instagram.png" />
            </div>
        </div>
        <div class="footer-end">
            <p class="cookies">Copyright © WEBCars</p>
            <p class="cookies">Política de privacidade</p>
            <p class="cookies">Termos de uso</p>
        </div>
    </footer>
</body>

</html>