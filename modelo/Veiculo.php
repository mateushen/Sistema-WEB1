<?php
class Veiculo
{
    private $idVeiculo;
    private $placa;
    private $renavam;
    private $marca;
    private $modelo;
    private $cor;
    private $ano;
    private $vendido;

    public function getIdVeiculo()
    {
        return $this->idVeiculo;
    }

    public function setIdVeiculo($idVeiculo)
    {
        $this->idVeiculo = $idVeiculo;
        return $this;
    }

    public function getPlaca()
    {
        return $this->placa;
    }

    public function setPlaca($placa)
    {
        $this->placa = $placa;
        return $this;
    }

    public function getRenavam()
    {
        return $this->renavam;
    }

    public function setRenavam($renavam)
    {
        $this->renavam = $renavam;
        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
        return $this;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
        return $this;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
        return $this;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
        return $this;
    }

    public function getVendido()
    {
        return $this->vendido;
    }

    public function setVendido($vendido)
    {
        $this->vendido = $vendido;
        return $this;
    }
}
?>