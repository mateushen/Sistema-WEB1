<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de vendas</title>
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

    <?php
    $user = $_SESSION['user'];

    if ($user == 'Funcionario') {
        echo '<div class="img-back">
            <a href="index.php"><img src="../img/icon-back.png" width="80" height="80" /></a>
            </div>';
    }
    ?>

    <header>
        <div class="header">
            <img src="../img/title.png" />
        </div>
    </header>

    <div class="bar"></div>

    <main>
        <div class="title">
            <h1>LISTAGEM DE VENDAS</h1>
        </div><br><br>

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
            $idFuncionario = $_SESSION['idFuncionario'];
            $lista = $dao->listaVendaFuncionario($idFuncionario);

            if ($lista) {

                foreach ($lista as $l) {
                    echo "<tr>";

                    echo '<td class="item">' . $l['idVenda'] . "</td>";
                    echo '<td class="item">' . $l['FNome'] . '</td>';
                    echo '<td class="item">' . $l['CNome'] . '</td>';
                    echo '<td class="item">' . $l['modelo'] . '</td>';
                    echo '<td class="item">' . $l['pgto'] . '</td>';
                    echo '<td class="item">' . $l['data_venda'] . '</td>';

                    echo '<td class="action">
                        <form class="exclui">
                        <input type="submit" value="" id="trash" name="excluir">
                        <input type="hidden" value="' . $l['idVenda'] . '" id="delete" class="delete">
                        </form></td>';

                    echo "</tr>";
                }
            }
            ?>
        </table>
        <br><br>
        <p id="msg"></p>
        <br><br>
        <a class="new-register" href="../Venda/formCadastroVenda.php">CADASTRAR NOVA VENDA</a><br><br>

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