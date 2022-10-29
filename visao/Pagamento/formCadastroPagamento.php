<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de forma de pagamento</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/header.css">
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
            <h1>CADASTRO DE FUNCIONÁRIO</h1>
        </div>
        <div class="form-box"><br>
        
            <form class="input-form" action="cadastroPagamento.php" onSubmit="return (verifica())" name="frmEnvia" method="post">

                <label for="tipo_pagamento">Tipo de pagamento: </label>
                <input type="text" name="tipo_pagamento" id="tipo_pagamento" onkeypress="return somenteLetras(event)"><br><br>

                <button class="bt-formPG">SALVAR</button><br><br>

                <script src="../scripts/main.js"></script>
                <script src="../scripts/pgto.js"></script>

            </form>

        </div>
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