<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de cliente</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script type="text/javascript" src="scripts/editdata.js"></script>
</head>

<body>
    <?php
    require_once '../../modelo/Cliente.php';
    require_once '../../dao/DAOCliente.php';
    require_once '../../dao/Conexao.php';

    $idCliente = $_POST['idCliente'];

    $dao = new DAOCliente();

    $lista = $dao->buscaID($idCliente);

    $cliente = $lista[0];

    ?>

    <header>
        <div class="header">
            <img src="../img/title.png" />
        </div>
    </header>

    <div class="bar"></div>

    <main>
        <br>
        <div class="title">
            <h1>EDIÇÃO DE CLIENTE</h1>
        </div>

        <form class="form-main">

            <input type="hidden" id="idCliente" name="idCliente" value="<?= $cliente['idCliente'] ?>">

            <label for="nome">Nome: </label>
            <input class="input-form" type="text" id="nome" autocomplete="off" name="nome" maxlength="25" value="<?= $cliente['nome'] ?>"><br>

            <label for="cpf">CPF: </label>
            <input class="input-form" type="text" name="cpf" id="cpf" autocomplete="off" maxlength="14" onkeypress="return somenteNumeros(event)" value="<?= $cliente['cpf'] ?>"><br>

            <label for="telefone">Telefone: </label>
            <input class="input-form" type="text" name="telefone" id="telefone" autocomplete="off" maxlength="14" onkeypress="return somenteNumeros(event)" value="<?= $cliente['telefone'] ?>"><br><br>

            <button>SALVAR</button><br><br>

            <p id="p1"></p>

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