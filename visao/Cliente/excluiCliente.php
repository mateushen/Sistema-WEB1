<?php
    require_once '../../dao/Conexao.php';
    require_once '../../dao/DAOCliente.php';

    $idCliente = $_POST['idCliente'];

    $dao = new DAOCliente();

    if($idCliente){
        $dao->exclui($idCliente);
        header("location: listagemCliente.php");
    }
