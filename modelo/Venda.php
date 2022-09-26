<?php
Class Venda{
    private $idVenda;
    private $idFuncionario;
    private $idCliente;
    private $idVeiculo;
    private $idPagamento;
    private $data;

    public function __construct($i, $if, $ic, $iv, $ip, $d){
        $this->idVenda = $i;
        $this->idFuncionario = $if;
        $this->idCliente = $ic;
        $this->idVeiculo = $iv;
        $this->idPagamento = $ip;
        $this->data = $d;
    }

    public function getIdVenda()
    {
        return $this->idVenda;
    }

    public function setIdVenda($idVenda)
    {
        $this->idVenda = $idVenda;

        return $this;
    }

    public function getIdFuncionario()
    {
        return $this->idFuncionario;
    }

    public function setIdFuncionario($idFuncionario)
    {
        $this->idFuncionario = $idFuncionario;
        return $this;
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

    public function getIdVeiculo()
    {
        return $this->idVeiculo;
    }

    public function setIdVeiculo($idVeiculo)
    {
        $this->idVeiculo = $idVeiculo;
        return $this;
    }

    public function getIdPagamento()
    {
        return $this->idPagamento;
    }

    public function setIdPagamento($idPagamento)
    {
        $this->idPagamento = $idPagamento;
        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}
?>