<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema-WEB1</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>

    <?php
    session_start();
    $status = $_SESSION['status'];

    if ($status != 'ativo') {
        header('Location: ../../main.php');
    }
    ?>

    <header>
        <div class="logo-first">
            <img src="../img/title.png" />
        </div>
        <div class="img-exit">
            <a href="../../main.php"><img src="../img/icon-exit.png" width="80" height="80" /></a>
        </div>
    </header>

    <div class="bar"></div>

    <main>
        <div class="bar-left">
            <?php
            require_once '../../dao/Conexao.php';
            require_once '../../dao/DAOVenda.php';
            $idFuncionario = $_SESSION['idFuncionario'];
            $dao = new DAOVenda();
            $lista = $dao->qtVendas($idFuncionario);

            if($lista){
                $vendas = $lista[0];
                echo '<p class="show-qt">Total de vendas feitas: </p><br>';
                echo '<p class="show-qt"> '. $vendas['qt'] .'</p>';
            }else {
                echo '<p class="show-qt">Total de vendas feitas: </p><br>';
                echo '<p class="show-qt">0</p>';
            }
            ?>
        </div>
        <div class="container-center">
            <div class="container-line">
                <a href="../Cliente/listagemCliente.php">
                    <div class="widget">
                        <img src="../img/icon-cliente.png" width="170" height="150" />
                        <p class="tag">Clientes</p>
                    </div>
                </a>
            </div>
            <div class="container-line">
                <a href="../Veiculo/listagemVeiculo.php">
                    <div class="widget">
                        <img src="../img/icon-veiculo.png" width="170" height="150" />
                        <p class="tag">Veículos</p>
                    </div>
                </a>
                <a href="../Pagamento/listagemPagamento.php">
                    <div class="widget">
                        <img src="../img/icon-pagamento.png" width="170" height="150" />
                        <p class="tag">Pagamentos</p>
                    </div>
                </a>
                <a href="../Venda/listagemVenda.php">
                    <div class="widget">
                        <img src="../img/icon-venda.png" width="170" height="150" />
                        <p class="tag">Vendas</p>
                    </div>
                </a>
            </div>
        </div>
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