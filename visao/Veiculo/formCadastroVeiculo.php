<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de veículo</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script type="text/javascript" src="scripts/savedata.js"></script>

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
        <div class="img-back">
            <a href="listagemVeiculo.php"><img src="../img/icon-back.png" width="80" height="80" /></a>
        </div>
        <div class="header">
            <img src="../img/title.png" />
        </div>
    </header>

    <div class="bar"></div>

    <main>
        <br>
        <div class="title">
            <h1>CADASTRO DE VEÍCULO</h1>
        </div>

        <form class="form-main">
            <label for="placa">Placa</label>
            <input class="input-form" type="text" id="placa" name="placa" autocomplete="off" oninput="somenteMaiusculas(event)" maxlength="7"><br>

            <label for="renavam">Renavam</label>
            <input class="input-form" type="text" name="renavam" id="renavam" onkeypress="return somenteNumeros(event)" maxlength="11"><br>

            <label for="marca">Marca</label>
            <input class="input-form" type="text" name="marca" id="marca" onkeypress="return somenteLetras(event)" maxlength="15"><br>

            <label for="modelo">Modelo</label>
            <input class="input-form" type="text" name="modelo" id="modelo" maxlength="15"><br>

            <label for="cor">Cor</label>
            <input class="input-form" type="text" name="cor" id="cor" onkeypress="return somenteLetras(event)" maxlength="15"><br>

            <label for="ano">Ano</label>
            <input class="input-form" type="text" name="ano" id="ano" onkeypress="return somenteNumeros(event)" maxlength="4"><br><br>

            <button>SALVAR</button><br>

            <script src="../scripts/main.js"></script>
        </form>
        
        <div class="box-msg">
            <p id="msg"></p>
        </div><br><br><br>
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