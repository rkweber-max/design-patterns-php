<?php

namespace Alura\DesignPattern;
namespace Alura\DesignPattern\Descontos\DescontoMais5Itens;
namespace Alura\DesignPattern\Descontos\DescontoMais500Reais;
namespace Alura\DesignPattern\Descontos\SemDesconto;

use Alura\DesignPattern\Descontos\DescontoMais5Itens;
use Estudo\DesignPattern\Orcamento;

class CalculadoraDeDescontos 
{
    public function calculaDesontos(Orcamento $orcamento): float
    {
        $cadeiaDeDesconto = new DescontoMais5Itens(
            new DescontoMais500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDeDesconto->calculaDescontos($orcamento);
    }
}