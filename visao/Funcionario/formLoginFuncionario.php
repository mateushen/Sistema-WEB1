<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Funcionário</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/form-login.css">
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
    <br><br><br>
        <div class="box-login">
            <div class="img-user">
                <img src="../img/iconUser.png"/>
            </div>
                <br><br><br>
                <h1>LOGIN</h1>
                <br>
                <div class="form-login">
                    <form action="loginFuncionario.php" onSubmit="return (verifica())" name="frmEnvia" method="post">

                        <input class="campo" type="text" placeholder="CPF" id="cpf" name="cpf" autocomplete="off" maxlength="14" onkeypress="return somenteNumeros(event)"><br><br>

                        <input class="campo" type="password" placeholder="Senha" name="senha" id="senha" maxlength="6"><br><br>

                        <button class="bt-form">ENTRAR</button><br><br>

                        <script src="../scripts/main.js"></script>
                        <script src="../scripts/login.js"></script>

                    </form>
                </div>
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