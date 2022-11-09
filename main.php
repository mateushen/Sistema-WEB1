<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema-WEB1</title>
    <link rel="icon" type="imagem/png" href="visao/img/logo.png" />
    <link rel="stylesheet" href="visao/css/main.css">
    <link rel="stylesheet" href="visao/css/footer.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="visao/scripts/menu.js"></script>
</head>

<body class="container">
    <header>
        <div class="header">
            <nav>
                <ul id="ul-principal">
                    <li class="li-p">
                        <a href="javascript://" class="bt" id="bt-menu">
                            <img class="icon-menu" src="visao/img/icon-menu.png">
                        </a>
                        <ul class="ul-menu">
                            <li class="item-menu"><a href="visao/Veiculo/veiculoVenda.php">Veículos à venda</a></li>
                            <li class="item-menu"><a href="sobre.php">Sobre</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <img src="visao/img/title.png" />
            <div style="display: flex; flex-direction:column">
                <div class="login">
                    <img class="user" src="visao/img/iconUser.png" />
                    <a href="visao/Funcionario/formLoginFuncionario.php">Login de Funcionario</a>
                </div>
                <br>
                <div class="login">
                    <img class="user" src="visao/img/iconUser.png" />
                    <a href="visao/Gerente/formLoginGerente.php">Login de Gerente</a>
                </div>
            </div>
        </div>
    </header>
    <div class="bar"></div>

    <main>
        <div class="box">
            <div class="fundo">
                <img class="background" src="visao/img/fundo.jpg" />
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-penult">
            <img class="logo" src="visao/img/logo.png" />
            <div class="social">
                <p class="pub">Siga WEBCars nas redes sociais:</p>
                <img class="icon-social" src="visao/img/icon-facebook.png" />
                <img class="icon-social" src="visao/img/icon-instagram.png" />
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