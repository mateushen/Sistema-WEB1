<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Venda</title>
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
        <?php
        $user = $_SESSION['user'];

        if($user == 'Gerente'){
            echo '<div class="img-back">
            <a href="../PainelGerente/listagemVenda.php"><img src="../img/icon-back.png" width="80" height="80" /></a>
            </div>';
        } else if($user == 'Funcionario'){
            echo '<div class="img-back">
            <a href="../PainelFuncionario/listagemVenda.php"><img src="../img/icon-back.png" width="80" height="80" /></a>
            </div>';
        }
        ?>
        
        <div class="header">
            <img src="../img/title.png" />
        </div>
    </header>

    <div class="bar"></div>

    <main>
        <br>
        <div class="title">
            <h1>CADASTRO DE VENDA</h1>
        </div>

        <form class="form-venda">
            <label for="funcionario">Funcionário</label>
            <input class="input-formVenda" type="text" disabled="disabled" value="<?= $_SESSION['nome'] ?>">

            <label>Cliente</label>
            <select name="cliente" id="cliente">
                <option value="0" selected hidden>- Selecione -</option>
                <?php
                require_once '../../modelo/Cliente.php';
                require_once '../../dao/DAOCliente.php';
                require_once '../../dao/Conexao.php';

                $dao = new DAOCliente();
                $lista = $dao->lista();

                if ($lista) {
                    foreach ($lista as $l) {
                        echo '<option value="' . $l['idCliente'] . '">' . $l['nome'] . '</option>';
                    }
                }
                ?>
            </select>

            <br>

            <label>Veículo</label>
            <select name="veiculo" id="veiculo">
                <option value="0" selected hidden>- Selecione -</option>
                <?php
                require_once '../../modelo/Veiculo.php';
                require_once '../../dao/DAOVeiculo.php';
                require_once '../../dao/Conexao.php';

                $dao = new DAOVeiculo();
                $lista = $dao->veiculoDisponivel();

                if ($lista) {
                    foreach ($lista as $l) {
                        echo '<option value="' . $l['idVeiculo'] . '">' . $l['modelo'] . '</option>';
                    }
                }
                ?>
            </select>

            <br>

            <label>Forma de pgto</label>
            <select name="pagamento" id="pagamento">
                <option value="0" selected hidden>- Selecione -</option>
                <?php
                require_once '../../modelo/Pagamento.php';
                require_once '../../dao/DAOPagamento.php';
                require_once '../../dao/Conexao.php';

                $dao = new DAOPagamento();
                $lista = $dao->lista();

                if ($lista) {
                    foreach ($lista as $l) {
                        echo '<option value="' . $l['idPagamento'] . '">' . $l['tipo_pagamento'] . '</option>';
                    }
                }
                ?>
            </select><br><br>

            <button class="btn">SALVAR</button><br>

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