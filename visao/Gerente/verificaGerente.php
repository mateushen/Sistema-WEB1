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
        //Verifica se existe um gerente no id 1, se não existir ocorre a adição de um gerente
        require_once '../../modelo/Gerente.php';
        require_once '../../dao/DAOGerente.php';
        require_once '../../dao/Conexao.php';

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
                header('location: ../Veiculo/listagemVeiculo.php');
            } catch (Exception $e) {
                echo 'ERRO: ',  $e->getMessage(), "\n";
            }
        }else{
            header('location: ../Veiculo/listagemVeiculo.php');
        }
    ?>
    
</body>

</html>