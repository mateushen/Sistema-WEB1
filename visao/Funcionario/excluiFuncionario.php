<?php
require_once '../../dao/Conexao.php';
require_once '../../dao/DAOFuncionario.php';

$idFuncionario = $_POST['idFuncionario'];

if ($idFuncionario) {
    $dao = new DAOFuncionario();
    $dao->exclui($idFuncionario);

    $retorno = [
        'status' => 'ok',
        'mensagem' => 'Excluído com sucesso!',
    ];
} else {
    $retorno = [
        'status' => 'error',
        'mensagem' => 'Erro ao realizar a exclusão!',
    ];
}

echo json_encode($retorno);