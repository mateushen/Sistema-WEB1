<?php
Class Cliente{
    private $idCliente;
    private $nome;
    private $cpf;
    private $telefone;

    public function __construct ($i, $n, $c, $t){
        $this->idCliente = $i;
        $this->nome = $n;
        $this->cpf = $c;
        $this->telefone = $t;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }
 
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
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
 
    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }
}
?>