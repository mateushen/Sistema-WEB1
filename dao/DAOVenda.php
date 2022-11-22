<?php

class DAOVenda
{
    public function lista(){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM Venda');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Venda $venda){
        $sql = 'INSERT INTO Venda (idFuncionario, idCliente, idVeiculo, idPagamento, data_venda) VALUES (?,?,?,?,?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $venda->getIdFuncionario());
        $pst->bindValue(2, $venda->getIdCliente());
        $pst->bindValue(3, $venda->getIdVeiculo());
        $pst->bindValue(4, $venda->getIdPagamento());
        $pst->bindValue(5, $venda->getData_venda());

        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function exclui($idVenda){
        $sql = 'DELETE FROM Venda WHERE idVenda = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $idVenda);
        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function buscaID($idVenda){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM Venda WHERE idVenda = ?');
        $pst->bindValue(1, $idVenda);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function listagemVenda(){
        $lista = [];
        $pst = Conexao::getPreparedStatement('
            SELECT idVenda, F.nome AS FNome, 
            C.nome AS CNome, V.modelo AS modelo, 
            P.tipo_pagamento AS pgto, data_venda FROM 
            Venda AS Vd 
            INNER JOIN Funcionario AS F ON F.idFuncionario = Vd.idFuncionario 
            INNER JOIN Cliente AS C ON C.idCliente = Vd.idCliente 
            INNER JOIN Veiculo AS V ON V.idVeiculo = Vd.idVeiculo 
            INNER JOIN Pagamento AS P ON P.idPagamento = Vd.idPagamento
        ');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function qtVendas($idFuncionario){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT COUNT(*) as qt FROM Venda WHERE idFuncionario = ?');
        $pst->bindValue(1, $idFuncionario);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        if($lista){
            return $lista;
        } else {
            return false;
        }
    }
}
