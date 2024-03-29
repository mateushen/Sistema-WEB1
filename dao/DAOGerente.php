<?php

class DAOGerente
{
    public function lista(){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM gerente WHERE idGerente = 1');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    
    public function inclui(Gerente $gerente){
        $sql = 'INSERT INTO gerente (idGerente, nome, cpf, email, senha) VALUES (?,?,?,?,?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $gerente->getIdGerente());
        $pst->bindValue(2, $gerente->getNome());
        $pst->bindValue(3, $gerente->getCpf());
        $pst->bindValue(4, $gerente->getEmail());
        $pst->bindValue(5, $gerente->getSenha());

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
        $pst = Conexao::getPreparedStatement('SELECT * FROM gerente WHERE cpf = ?');
        $pst->bindValue(1, $cpf);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
       
        if($lista){
            $login = $lista[0];
            if (password_verify($senha, $login['senha'])){
                unset($login['senha']);
                return $login;
            }else{
                return false;
            }
        }else{
            return false;
        };
    }

    public function recupera($cpf, $email){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM gerente WHERE cpf = ? AND email = ?');
        $pst->bindValue(1, $cpf);
        $pst->bindValue(2, $email);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
       
        if($lista){
            return true;
        }else{
            return false;
        };
    }

    public function alteraSenha($senha, $cpf, $email){
        $sql = 'UPDATE gerente SET senha = ? WHERE cpf = ? AND email = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $senha);
        $pst->bindValue(2, $cpf);
        $pst->bindValue(3, $email);

        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }
}