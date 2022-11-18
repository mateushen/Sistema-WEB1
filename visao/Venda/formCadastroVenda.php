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
            <h1>CADASTRO DE VENDA</h1>
        </div>

        <form class="form-venda">
            <label for="funcionario">Funcionário</label>
            <select name="funcionario" id="funcionario">
                <?php
                session_start();
                echo '<option value="' . $_SESSION['idFuncionario'] . '" selected hidden>' . $_SESSION['nome'] . '</option>'
                ?>
            </select>

            <br>

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
                $lista = $dao->veiculoNaoVendido();

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

            <button>SALVAR</button><br><br>

            <p id="msg"></p>
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