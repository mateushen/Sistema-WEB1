<?php

class DAOVeiculo
{
    public function lista(){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM Veiculo');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Veiculo $veiculo){
        $sql = 'INSERT INTO Veiculo (placa, renavam, marca, modelo, cor, ano, vendida) VALUES (?,?,?,?,?,?,?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $veiculo->getPlaca());
        $pst->bindValue(2, $veiculo->getRenavam());
        $pst->bindValue(3, $veiculo->getMarca());
        $pst->bindValue(4, $veiculo->getModelo());
        $pst->bindValue(5, $veiculo->getCor());
        $pst->bindValue(6, $veiculo->getAno());
        $pst->bindValue(7, $veiculo->getVendida());

        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function exclui($idVeiculo){
        $sql = 'DELETE FROM Veiculo WHERE idVeiculo = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $idVeiculo);
        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function altera(Veiculo $veiculo){
        $sql = 'UPDATE Veiculo SET placa = ?, renavam = ?, marca = ?, modelo = ?, cor = ?, ano = ?, vendida = ? WHERE idVeiculo = ?';
        $pst = Conexao::getPreparedStatement($sql);        
        $pst->bindValue(1, $veiculo->getPlaca());
        $pst->bindValue(2, $veiculo->getRenavam());
        $pst->bindValue(3, $veiculo->getMarca());
        $pst->bindValue(4, $veiculo->getModelo());
        $pst->bindValue(5, $veiculo->getCor());
        $pst->bindValue(6, $veiculo->getAno());
        $pst->bindValue(7, $veiculo->getVendida());
        $pst->bindValue(8, $veiculo->getIdVeiculo());

        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function buscaID($idVeiculo){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM Veiculo WHERE idVeiculo = ?');
        $pst->bindValue(1, $idVeiculo);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
    
}

?>
