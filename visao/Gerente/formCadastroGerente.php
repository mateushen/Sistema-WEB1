<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro acesso</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script type="text/javascript" src="scripts/savedata.js"></script>

    <?php
    require_once '../../dao/Conexao.php';
    require_once '../../dao/DAOGerente.php';

    $dao = new DAOGerente();

    $lista = $dao->lista();

    if ($lista) {
        echo "<script>alert('Já existe gerente cadastrado');</script>";
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
        <br><br>
        <div class="title">
            <h1>PRIMEIRO ACESSO DE GERENTE</h1>
        </div>

        <form class="form-main">

            <label for="nome">Nome: </label>
            <input class="input-form" type="text" name="nome" id="nome" maxlength="25" onkeypress="return somenteLetras(event)"><br><br>

            <label for="cpf">CPF: </label>
            <input class="input-form" type="text" id="cpf" name="cpf" autocomplete="off" maxlength="14" onkeypress="return somenteNumeros(event)"><br><br>

            <label for="email">E-mail: </label>
            <input class="input-form" type="text" name="email" id="email"><br><br>

            <label for="senha">Senha: </label>
            <input class="input-form" type="password" name="senha" id="senha" maxlength="6"><br><br>

            <button class="bt-form">SALVAR</button><br>

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