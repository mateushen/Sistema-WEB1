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

}

?>