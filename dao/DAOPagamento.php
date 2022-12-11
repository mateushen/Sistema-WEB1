<?php

class DAOPagamento
{
    public function lista(){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM pagamento ORDER BY idPagamento');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Pagamento $pagamento){
        $sql = 'INSERT INTO pagamento (tipo_pagamento) VALUES (?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $pagamento->getTipo_pagamento());


        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function exclui($idPagamento){
        $sql = 'DELETE FROM pagamento WHERE idPagamento = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $idPagamento);
        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function buscaID($idPagamento){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM pagamento WHERE idPagamento = ?');
        $pst->bindValue(1, $idPagamento);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

}

?>
