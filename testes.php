<?php

use Alura\DesignPattern\Descontos\SemDesconto\CalculadoraDeDescontos;
use Estudo\DesignPattern\Orcamento;

require 'vedor/autoload.php';

$calculadora = new CalculadoraDeDescontos;

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeDeItens = 6;

echo $calculadora->calculaDesontos($orcamento);