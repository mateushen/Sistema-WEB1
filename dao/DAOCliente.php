<?php

class DAOCliente
{
    public function lista(){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM Cliente ORDER BY idCliente');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Cliente $cliente){
        $sql = 'INSERT INTO Cliente (nome, cpf, telefone) VALUES (?,?,?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $cliente->getNome());
        $pst->bindValue(2, $cliente->getCpf());
        $pst->bindValue(3, $cliente->getTelefone());

        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function exclui($idCliente){
        $sql = 'DELETE FROM Cliente WHERE idCliente = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $idCliente);
        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function altera(Cliente $cliente){
        $sql = 'UPDATE Cliente SET nome = ?, cpf = ?, telefone = ? WHERE idCliente = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $cliente->getNome());
        $pst->bindValue(2, $cliente->getCpf());
        $pst->bindValue(3, $cliente->getTelefone());
        $pst->bindValue(4, $cliente->getIdCliente());

        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function buscaID($idCliente){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM Cliente WHERE idCliente = ?');
        $pst->bindValue(1, $idCliente);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

}

?>