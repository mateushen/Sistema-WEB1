<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Adição de um gerente
    require_once 'modelo/Gerente.php';
    require_once 'dao/DAOGerente.php';
    require_once 'dao/Conexao.php';

    $dao = new DAOGerente();
    $obj = new Gerente();

    $lista = $dao->lista();

    if (!$lista) {

        $obj->setIdGerente(1);
        $obj->setNome('Mateus');
        $obj->setCpf('123.456.789-12');
        $obj->setSenha('123456');

        try {
            $dao->inclui($obj);
        } catch (Exception $e) {
            echo 'ERRO: ',  $e->getMessage(), "\n";
        }
    }
    ?>

    <a href="visao/Cliente/formCadastroCliente.php">Cadastrar Cliente</a><br><br>
    <a href="visao/Cliente/listagemCliente.php">Listagem de Clientes</a>

    <br><br><br><br>

    <a href="visao/Veiculo/formCadastroVeiculo.php">Cadastrar Veiculo</a><br><br>
    <a href="visao/Veiculo/listagemVeiculo.php">Listagem de Veiculos</a>
    <br><br><br><br>

    <a href="visao/Pagamento/formCadastroPagamento.php">Cadastrar Pagamento</a><br><br>
    <a href="visao/Pagamento/listagemPagamento.php">Listagem de Pagamentos</a>
    <br><br><br><br>

    <a href="visao/Funcionario/formCadastroFuncionario.php">Cadastrar Funcionario</a><br><br>
    <a href="visao/Funcionario/listagemFuncionario.php">Listagem de Funcionarios</a>
    <br><br><br><br>

    <a href="visao/Venda/formCadastroVenda.php">Cadastrar Venda</a><br><br>
    <a href="visao/Venda/listagemVenda.php">Listagem de Vendas</a>
</body>

</html>