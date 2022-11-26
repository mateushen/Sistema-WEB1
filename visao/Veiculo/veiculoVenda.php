<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículos à venda</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/listing.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>

    <header>
        <div class="img-home">
            <a href="../../main.php"><img src="../img/iconHome.png" width="80" height="80"/></a>
        </div>
        <div class="header">
            <img src="../img/title.png" />
        </div>
    </header>

    <div class="bar"></div>

    <main>
        <div class="title">
            <h1>VEÍCULOS DISPONÍVEIS</h1>
        </div><br><br>

        <table>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Cor</th>
                <th>Ano</th>
            </tr>
            
            <?php
            require_once '../../dao/DAOVeiculo.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOVeiculo();
            $lista = $dao->veiculoDisponivel();

            foreach ($lista as $l) {
                echo "<tr>";

                echo '<td class="item">' . $l['placa'] . "</td>";
                echo '<td class="item">' . $l['marca'] . "</td>";
                echo '<td class="item">' . $l['modelo'] . "</td>";
                echo '<td class="item">' . $l['cor'] . "</td>";
                echo '<td class="item">' . $l['ano'] . "</td>";

                echo "</tr>";
            }

            ?>
        </table>
        <br><br>
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