<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de funcionário</title>
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script type="text/javascript" src="scripts/editdata.js"></script>

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
        <div class="header">
            <img src="../img/title.png" />
        </div>
    </header>

    <div class="bar"></div>

    <main>
        <br>
        <div class="title">
            <h1>EDIÇÃO DE FUNCIONÁRIO</h1>
        </div>

        <form class="form-main">

            <?php
            require_once '../../modelo/Funcionario.php';
            require_once '../../dao/DAOFuncionario.php';
            require_once '../../dao/Conexao.php';

            $idFuncionario = $_POST['idFuncionario'];

            $dao = new DAOFuncionario();

            $lista = $dao->buscaID($idFuncionario);

            $funcionario = $lista[0];

            ?>

            <input type="hidden" id="idFuncionario" name="idFuncionario" value="<?= $funcionario['idFuncionario'] ?>">

            <label for="nome">Nome: </label>
            <input class="input-form" type="text" name="nome" id="nome" maxlength="25" onkeypress="return somenteLetras(event)" value="<?= $funcionario['nome'] ?>"><br>

            <label for="cpf">CPF: </label>
            <input class="input-form" type="text" name="cpf" id="cpf" autocomplete="off" maxlength="14" onkeypress="return somenteNumeros(event)" value="<?= $funcionario['cpf'] ?>"><br>

            <label for="email">E-mail: </label>
            <input class="input-form" type="text" name="email" id="email" onblur="checarEmail();" value="<?= $funcionario['email'] ?>"><br>

            <label for="senha">Senha: </label>
            <input class="input-form" type="password" name="senha" id="senha" maxlength="6" value=""><br><br>

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