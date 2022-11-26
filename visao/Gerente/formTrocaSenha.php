<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troca de senha</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script type="text/javascript" src="scripts/changepass.js"></script>

    <?php
    require_once '../../dao/Conexao.php';
    require_once '../../dao/DAOGerente.php';

    $dao = new DAOGerente();

    $lista = $dao->lista();

    if (!$lista) {
        echo "<script>alert('Não existe gerente cadastrado');</script>";
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
            <h1>Alteração de senha</h1>
        </div><br>
        <form class="form-main">

            <?php

            session_start();
            $cpf = $_SESSION['cpf'];
            $email = $_SESSION['email'];

            ?>

            <label for="cpf">CPF</label>
            <input class="input-form" type="text" id="cpf" name="cpf" disabled="true" value="<?= $cpf ?>"><br>

            <label class="label-form" for="email">E-mail</label>
            <input class="input-form" type="text" name="email" id="email" disabled="true" value="<?= $email ?>"><br>

            <label class="label-form" for="senha">Nova senha</label>
            <input class="input-form" type="password" name="senha" id="senha" maxlength="6"><br><br>

            <button>ENVIAR</button><br><br>

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