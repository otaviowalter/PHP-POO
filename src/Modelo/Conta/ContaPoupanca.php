<?php


namespace Alura\Banco\Modelo\Conta;


class ContaPoupanca extends Conta
{

    protected function taxaSaque($valorSaque): float
    {
        return $valorSaque += ($valorSaque * 0.03);
    }
}