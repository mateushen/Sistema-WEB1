<?php

class DAOGerente
{
    public function verificaGerente($cpf, $senha)
    {
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

    public function exclui($idGerente)
    {
        $sql = 'DELETE FROM Gerente WHERE idGerente = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $idGerente);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
