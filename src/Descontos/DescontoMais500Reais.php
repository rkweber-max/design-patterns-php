<?php

namespace Alura\DesignPattern\Descontos;

use Estudo\DesignPattern\Orcamento;

class DescontoMais5Itens extends Desconto
{
    public function calculaDesontos(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calculaDescontos($orcamento);
    }
}