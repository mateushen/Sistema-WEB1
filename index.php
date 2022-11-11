<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Gerente</title>
    <link rel="icon" type="imagem/png" href="visao/img/logo.png" />
    <link rel="stylesheet" href="visao/css/form.css">
    <link rel="stylesheet" href="visao/css/header.css">
    <link rel="stylesheet" href="visao/css/footer.css">
    <script type="text/javascript" src="visao/Gerente/scripts/savedata.js"></script>
</head>

<body>

    <?php
    //Verifica se existe um gerente no id 1, se não existir ocorre a adição de um gerente
    require_once 'modelo/Gerente.php';
    require_once 'dao/DAOGerente.php';
    require_once 'dao/Conexao.php';

    $dao = new DAOGerente();
    $obj = new Gerente();

    $lista = $dao->lista();

    if (!$lista) {

        echo '

        <header>
            <div class="header">
                <img src="visao/img/title.png" />
            </div>
        </header>

        <div class="bar"></div>

        <main>
            <br><br>
            <div class="title">
                <br>
                <h1>PRIMEIRO ACESSO</h1><br>
                <h1>Cadastro de Gerente</h1>
                <br>
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
        
                <button class="bt-form">SALVAR</button><br><br>

                <p class="msg"></p>
        
                <script src="visao/scripts/main.js"></script>

            </form>
            <p></p>
        <br><br>
        </main>

        <footer>
            <div class="footer-penult">
                <img class="logo" src="visao/img/logo.png" />
                <div class="social">
                    <p class="pub">Siga WEBCars nas redes sociais:</p>
                    <img class="icon-social" src="visao/img/icon-facebook.png" />
                    <img class="icon-social" src="visao/img/icon-instagram.png" />
                </div>
            </div>
            <div class="footer-end">
                <p class="cookies">Copyright © WEBCars</p>
                <p class="cookies">Política de privacidade</p>
                <p class="cookies">Termos de uso</p>
            </div>
        </footer>';
    } else {
        header('location: main.php');
    }
    ?>

</body>

</html>