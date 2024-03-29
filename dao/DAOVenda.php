<?php

class DAOVenda
{
    public function lista(){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM venda ORDER BY idVenda');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Venda $venda){
        $sql = 'INSERT INTO venda (idFuncionario, idCliente, idVeiculo, idPagamento, data_venda) VALUES (?,?,?,?,?)';

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
        $sql = 'DELETE FROM venda WHERE idVenda = ?';
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
            venda AS Vd 
            INNER JOIN funcionario AS F ON F.idFuncionario = Vd.idFuncionario 
            INNER JOIN cliente AS C ON C.idCliente = Vd.idCliente 
            INNER JOIN veiculo AS V ON V.idVeiculo = Vd.idVeiculo 
            INNER JOIN pagamento AS P ON P.idPagamento = Vd.idPagamento ORDER BY Vd.idVenda
        ');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function listaVendaFuncionario($idFuncionario){
        $lista = [];
        $pst = Conexao::getPreparedStatement('
            SELECT idVenda, F.nome AS FNome, 
            C.nome AS CNome, V.modelo AS modelo, 
            P.tipo_pagamento AS pgto, data_venda FROM 
            venda AS Vd 
            INNER JOIN funcionario AS F ON F.idFuncionario = Vd.idFuncionario 
            INNER JOIN cliente AS C ON C.idCliente = Vd.idCliente 
            INNER JOIN veiculo AS V ON V.idVeiculo = Vd.idVeiculo 
            INNER JOIN pagamento AS P ON P.idPagamento = Vd.idPagamento 
            WHERE Vd.idFuncionario = ? ORDER BY Vd.idVenda
        ');
        $pst->bindValue(1, $idFuncionario);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        if($lista){
            return $lista;
        } else {
            return false;
        }

    }

    public function qtVendas($idFuncionario){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT COUNT(*) as qt FROM venda WHERE idFuncionario = ?');
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
