<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de conta</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script type="text/javascript" src="scripts/recover.js"></script>

    <?php
    require_once '../../dao/Conexao.php';
    require_once '../../dao/DAOFuncionario.php';

    $dao = new DAOFuncionario();

    $lista = $dao->lista();

    if (!$lista) {
        echo "<script>alert('Não existe funcionário cadastrado');</script>";
        echo "<script>window.open('../../main.php', '_self');</script>";
    }
    ?>

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
            <h1>Esqueceu a senha?</h1>
        </div><br><br>
        <p class="msg-recover">Para fazer a recuperação do login preencha os campos abaixo:</p>
        <form class="form-main">

            <label for="cpf">CPF</label>
            <input class="input-form" type="text" id="cpf" name="cpf" autocomplete="off" maxlength="14" onkeypress="return somenteNumeros(event)"><br>

            <label class="label-form" for="email">E-mail</label>
            <input class="input-form" type="text" name="email" id="email"><br><br>

            <button>ENVIAR</button><br>

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