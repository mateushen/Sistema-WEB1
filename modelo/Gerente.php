<?php
Class Gerente{
    private $idGerente;
    private $nome;
    private $cpf;
    private $senha;
 
    public function getIdGerente()
    {
        return $this->idGerente;
    }

    public function setIdGerente($idGerente)
    {
        $this->idGerente = $idGerente;
        return $this;
    }
 
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }
}
?>