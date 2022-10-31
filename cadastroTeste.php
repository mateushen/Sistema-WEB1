<?php
$nome = filter_input(INPUT_POST, 'nome');
$estado = filter_input(INPUT_POST, 'estado');
$cidade = filter_input(INPUT_POST, 'cidade');

if ($nome && $estado && $cidade) {
    $retorno = [
        'status' => 'ok',
        'mensagem' => 'Dados gravados',
    ];
} else {
    $retorno = [
        'status' => 'error',
        'mensagem' => 'Dados ausentes',
    ];
}

echo json_encode($retorno);
