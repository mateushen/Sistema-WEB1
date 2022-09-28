<?php
Class Pagamento{
    private $idPagamento;
    private $tipo_pagamento;

    public function getIdPagamento()
    {
        return $this->idPagamento;
    }

    public function setIdPagamento($idPagamento)
    {
        $this->idPagamento = $idPagamento;
        return $this;
    }

    public function getTipo_pagamento()
    {
        return $this->tipo_pagamento;
    }

    public function setTipo_pagamento($tipo_pagamento)
    {
        $this->tipo_pagamento = $tipo_pagamento;
        return $this;
    }
}
?>