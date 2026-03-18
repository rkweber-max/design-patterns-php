<?php

namespace Alura\DesignPattern\Descontos;

use Estudo\DesignPattern\Orcamento;

class DescontoMais5Itens extends Desconto
{
    public function calculaDesontos(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeDeItens > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calculaDescontos($orcamento);
    }
}