<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de funcionário</title>
</head>

<body>
    <?php
    require_once '../../modelo/Funcionario.php';
    require_once '../../dao/DAOFuncionario.php';
    require_once '../../dao/Conexao.php';

    $idFuncionario = $_POST['idFuncionario'];

    $dao = new DAOFuncionario();

    $lista = $dao->buscaID($idFuncionario);

    $funcionario = $lista[0];

    ?>
    <form action="editaFuncionario.php" onSubmit="return (verifica())" name="frmEnvia" method="post">

        <input type="hidden" id="idFuncionario" name="idFuncionario" value="<?= $funcionario['idFuncionario'] ?>">

        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" maxlength="25" onkeypress="return somenteLetras(event)" value="<?= $funcionario['nome'] ?>"><br><br>

        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" id="cpf" autocomplete="off" maxlength="14" onkeypress="return somenteNumeros(event)" value="<?= $funcionario['cpf'] ?>"><br><br>

        <label for="email">E-mail: </label>
        <input type="text" name="email" id="email" onblur="checarEmail();" value="<?= $funcionario['email'] ?>"><br><br>

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" maxlength="6" value="<?= $funcionario['senha'] ?>"><br><br>
        <button>SALVAR</button><br><br>

        <script src="../scripts/funcionario.js"></script>
        <script src="../scripts/main.js"></script>
    </form>

    <a href="/Sistema-WEB1">Inicio</a>

</body>

</html>