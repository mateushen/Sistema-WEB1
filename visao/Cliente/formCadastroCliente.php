<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script type="text/javascript" src="scripts/savedata.js"></script>
</head>

<body>

    <header>
        <div class="header">
            <img src="../img/title.png" />
        </div>
    </header>

    <div class="bar"></div>

    <main>
        <br>
        <div class="title">
            <h1>CADASTRO DE CLIENTE</h1>
        </div>

        <form class="form-main">
            <label for="nome">Nome</label>
            <input class="input-form" type="text" name="nome" id="nome" maxlength="25" onkeypress="return somenteLetras(event)"><br>

            <label for="cpf">CPF</label>
            <input class="input-form" type="text" id="cpf" name="cpf" autocomplete="off" maxlength="14" onkeypress="return somenteNumeros(event)"><br>

            <label for="telefone">Telefone</label>
            <input class="input-form" type="text" id="telefone" name="telefone" autocomplete="off" maxlength="14" onkeypress="return somenteNumeros(event)"><br>
            
            <button>SALVAR</button><br><br>

            <p id="msg"></p>

            <script src="../scripts/main.js"></script>
        </form>
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