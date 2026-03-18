<?php

namespace Alura\DesignPattern\Descontos;

use Estudo\DesignPattern\Orcamento;

class DescontoMais5Itens extends Desconto
{

    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculaDesontos(Orcamento $orcamento): float
    {
        return 0;
    }
}