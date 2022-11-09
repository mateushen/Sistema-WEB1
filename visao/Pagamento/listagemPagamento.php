<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de tipos de pagamento</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/listing.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
    <header>
        <div class="header">
            <img src="../img/title.png" />
        </div>
    </header>

    <div class="bar"></div>

    <main>
        <div class="title">
            <h1>TIPOS DE PAGAMENTO</h1>
        </div><br><br>

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

                echo '<td class="item">' . $l['idPagamento'] . "</td>";
                echo '<td class="item">' . $l['tipo_pagamento'] . "</td>";

                echo '<td class="action">
                <form method="POST" action="excluiPagamento.php">
                <input type="submit" value="" id="trash" name="excluir">
                <input type="hidden" value="' . $l['idPagamento'] . '" id="idPagamento" name="idPagamento">
                </form></td>';

                echo "</tr>";
            }

            ?>
        </table>
        <br><br><br>
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