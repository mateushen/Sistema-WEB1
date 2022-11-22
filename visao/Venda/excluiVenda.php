<?php
require_once '../../dao/Conexao.php';
require_once '../../dao/DAOVenda.php';
require_once '../../dao/DAOVeiculo.php';

$idVenda = $_POST['idVenda'];

if ($idVenda) {
    try {
        $venda = new DAOVenda();
        $veiculo = new DAOVeiculo();

        $lista = $venda->buscaID($idVenda);
        $listaAux = $lista[0];
        $veiculo->retiraVenda($listaAux['idVeiculo']);
        $venda->exclui($idVenda);
        $retorno = [
            'status' => 'ok',
            'mensagem' => 'Venda excluída com sucesso!',
        ];
    } catch (Exception $e) {
        $retorno = [
            'status' => 'error',
            'mensagem' => 'Erro ao excluir a venda!',
        ];
    }
} else {
    $retorno = [
        'status' => 'error',
        'mensagem' => 'Erro ao excluir a venda!',
    ];
}
echo json_encode($retorno);