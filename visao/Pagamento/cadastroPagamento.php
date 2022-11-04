<?php
require_once '../../modelo/Pagamento.php';
require_once '../../dao/DAOPagamento.php';
require_once '../../dao/Conexao.php';

$tipo_pagamento = filter_input(INPUT_POST, 'tipo_pagamento');

if ($tipo_pagamento) {

    $obj = new Pagamento();
    $dao = new DAOPagamento();

    $obj->setTipo_pagamento($tipo_pagamento);

    try {
        $dao->inclui($obj);
        $retorno = [
            'status' => 'ok',
            'mensagem' => 'Tipo de pagamento cadastrado com sucesso!',
        ];
    } catch (Exception $e) {
        $retorno = [
            'status' => 'error',
            'mensagem' => 'Erro ao realizar o cadastro!',
        ];
    }
} else {
    $retorno = [
        'status' => 'error',
        'mensagem' => 'Dados inválidos',
    ];
}

echo json_encode($retorno);