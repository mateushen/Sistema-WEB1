<?php

class DAOFuncionario
{
    public function lista(){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM Funcionario');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Funcionario $funcionario){
        $sql = 'INSERT INTO Funcionario (nome, cpf, email, senha, idGerente) VALUES (?,?,?,?,?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $funcionario->getNome());
        $pst->bindValue(2, $funcionario->getCpf());
        $pst->bindValue(3, $funcionario->getEmail());
        $pst->bindValue(4, $funcionario->getSenha());
        $pst->bindValue(5, $funcionario->getIdGerente());

        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function exclui($idFuncionario){
        $sql = 'DELETE FROM Funcionario WHERE idFuncionario = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $idFuncionario);
        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function altera(Funcionario $funcionario){
        $sql = 'UPDATE Funcionario SET nome = ?, cpf = ?, email = ?, senha = ? WHERE idFuncionario = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $funcionario->getNome());
        $pst->bindValue(2, $funcionario->getCpf());
        $pst->bindValue(3, $funcionario->getEmail());
        $pst->bindValue(4, $funcionario->getSenha());
        $pst->bindValue(5, $funcionario->getIdFuncionario());

        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function buscaID($idFuncionario){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT idFuncionario, nome, cpf, email FROM Funcionario WHERE idFuncionario = ?');
        $pst->bindValue(1, $idFuncionario);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function retornaID($nome){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT idFuncionario FROM Funcionario WHERE nome = ?');
        $pst->bindValue(1, $nome);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function login($cpf, $senha){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM Funcionario WHERE cpf = ?');
        $pst->bindValue(1, $cpf);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);

        if($lista){
            $login = $lista[0];
            if (password_verify($senha, $login['senha'])){
                unset($login['senha']);
                return $login;
            }else{
                $login = [];
                return $login;
            }
        }else{
            $lista = [];
            return $lista;
        };
    }

    public function recupera($cpf, $email){
        $lista = [];
        $pst = Conexao::getPreparedStatement('SELECT * FROM Funcionario WHERE cpf = ? AND email = ?');
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
        $sql = 'UPDATE Funcionario SET senha = ? WHERE cpf = ? AND email = ?';
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
?>