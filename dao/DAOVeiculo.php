<?php

class DAOVeiculo
{
    public function lista(){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM veiculo ORDER BY idVeiculo');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Veiculo $veiculo){
        $sql = 'INSERT INTO veiculo (placa, renavam, marca, modelo, cor, ano, vendido) VALUES (?,?,?,?,?,?,?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $veiculo->getPlaca());
        $pst->bindValue(2, $veiculo->getRenavam());
        $pst->bindValue(3, $veiculo->getMarca());
        $pst->bindValue(4, $veiculo->getModelo());
        $pst->bindValue(5, $veiculo->getCor());
        $pst->bindValue(6, $veiculo->getAno());
        $pst->bindValue(7, $veiculo->getVendido());

        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function exclui($idVeiculo){
        $sql = 'DELETE FROM veiculo WHERE idVeiculo = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $idVeiculo);
        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function altera(Veiculo $veiculo){
        $sql = 'UPDATE veiculo SET placa = ?, renavam = ?, marca = ?, modelo = ?, cor = ?, ano = ? WHERE idVeiculo = ?';
        $pst = Conexao::getPreparedStatement($sql);        
        $pst->bindValue(1, $veiculo->getPlaca());
        $pst->bindValue(2, $veiculo->getRenavam());
        $pst->bindValue(3, $veiculo->getMarca());
        $pst->bindValue(4, $veiculo->getModelo());
        $pst->bindValue(5, $veiculo->getCor());
        $pst->bindValue(6, $veiculo->getAno());
        $pst->bindValue(7, $veiculo->getIdVeiculo());

        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function buscaID($idVeiculo){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM veiculo WHERE idVeiculo = ?');
        $pst->bindValue(1, $idVeiculo);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function veiculoVendido($idVeiculo){
        $sql = 'UPDATE veiculo SET vendido = 1 WHERE idVeiculo = ?';
        $pst = Conexao::getPreparedStatement($sql);        
        $pst->bindValue(1, $idVeiculo);

        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function retiraVenda($idVeiculo){
        $sql = 'UPDATE veiculo SET vendido = 0 WHERE idVeiculo = ?';
        $pst = Conexao::getPreparedStatement($sql);        
        $pst->bindValue(1, $idVeiculo);

        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function veiculoDisponivel(){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM veiculo WHERE vendido = 0 ORDER BY idVeiculo');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
    
}

?>
