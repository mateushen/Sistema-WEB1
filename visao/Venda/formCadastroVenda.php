<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Venda</title>

</head>

<body>

    <form action="cadastroVenda.php" onSubmit="return (verifica())" name="frmEnvia" method="post">

        <select name="funcionario" id="funcionario">
            <?php
            require_once '../../modelo/Funcionario.php';
            require_once '../../dao/DAOFuncionario.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOFuncionario();
            $lista = $dao->lista();

            if ($lista) {
                foreach ($lista as $l) {
                    echo '<option value="' . $l['nome'] . '">' . $l['nome'] . '</option>';
                }
            }
            ?>
        </select>

        <select name="cliente" id="cliente">
        <?php
            require_once '../../modelo/Cliente.php';
            require_once '../../dao/DAOCliente.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOCliente();
            $lista = $dao->lista();

            if ($lista) {
                foreach ($lista as $l) {
                    echo '<option value="' . $l['nome'] . '">' . $l['nome'] . '</option>';
                }
            }
            ?>
        </select>

        <select name="veiculo" id="veiculo">
        <?php
            require_once '../../modelo/Veiculo.php';
            require_once '../../dao/DAOVeiculo.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOVeiculo();
            $lista = $dao->motoNaoVendida();

            if ($lista) {
                foreach ($lista as $l) {
                    echo '<option value="' . $l['modelo'] . '">' . $l['modelo'] . '</option>';
                }
            }
            ?>
        </select>

        <select name="pagamento" id="pagamento">
        <?php
            require_once '../../modelo/Pagamento.php';
            require_once '../../dao/DAOPagamento.php';
            require_once '../../dao/Conexao.php';

            $dao = new DAOPagamento();
            $lista = $dao->lista();

            if ($lista) {
                foreach ($lista as $l) {
                    echo '<option value="' . $l['tipo_pagamento'] . '">' . $l['tipo_pagamento'] . '</option>';
                }
            }
            ?>
        </select>

        <button>SALVAR</button><br><br>

        <div></div>

        <a href="/Sistema-Concessionaria">Inicio</a>

        <script src="../scripts/venda.js"></script>

    </form>
</body>

</html>