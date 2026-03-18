<?php

namespace Alura\DesignPattern\Descontos;

use Estudo\DesignPattern\Orcamento;

abstract class Desconto 
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function calculaDescontos(Orcamento $orcamento): float;
}