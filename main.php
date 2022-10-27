<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema-WEB1</title>
    <link rel="stylesheet" href="visao/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="visao/scripts/menu.js"></script>
</head>

<body class="container">
    <header>
        <div class="header">
            <nav>
                <ul id="ul-principal">
                    <li class="li-p">
                        <a href="javascript://" class="bt">
                            <img class="icon-menu" src="visao/img/menu.png">
                        </a>
                        <ul class="ul-menu">
                            <li class="item-menu"><a href="">Veículos à venda</a></li>
                            <li class="item-menu"><a href="">Sobre</a></li>
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
    <main>
        <div class="box">
            <div class="right">
                <img class="background" src="visao/img/start2022.png" />
            </div>
            <div class="left">
                <img class="background" src="visao/img/civic.png" />
            </div>
        </div>
    </main>
</body>

</html>