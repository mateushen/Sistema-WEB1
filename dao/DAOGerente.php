<?php

class DAOGerente
{
    public function lista(){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM Gerente WHERE idGerente = 1');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    
    public function inclui(Gerente $gerente){
        $sql = 'INSERT INTO Gerente (idGerente, nome, cpf, senha) VALUES (?,?,?,?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $gerente->getIdGerente());
        $pst->bindValue(2, $gerente->getNome());
        $pst->bindValue(3, $gerente->getCpf());
        $pst->bindValue(4, $gerente->getSenha());

        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function verificaGerente($cpf, $senha){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT cpf, senha FROM Gerente');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);

        if (($lista['cpf'] == $cpf) && ($lista['senha'] == $senha)) {
            return true;
        } else {
            return false;
        }
    }

    public function login($cpf, $senha){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT senha FROM Gerente WHERE cpf = ?');
        $pst->bindValue(1, $cpf);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);

        if($lista){
            $login = $lista[0];
            if($login['senha'] == $senha){
                return $login;
            }else{
                $login = [];
                return $login;
            }
        }else return $lista;
    }
}
