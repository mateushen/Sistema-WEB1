<?php
Class Funcionario{

    private $idFuncionario;
    private $nome;
    private $cpf;
    private $email;
    private $senha;
    private $idGerente;

    public function getIdFuncionario()
    {
        return $this->idFuncionario;
    }

    public function setIdFuncionario($idFuncionario)
    {
        $this->idFuncionario = $idFuncionario;
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

    public function getEmail()
    {
        return $this->email;
    }
 
    public function setEmail($email)
    {
        $this->email = $email;
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
 
    public function getIdGerente()
    {
        return $this->idGerente;
    }

    public function setIdGerente($idGerente)
    {
        $this->idGerente = $idGerente;
        return $this;
    }
}
?>