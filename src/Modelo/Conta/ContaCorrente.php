<?php


namespace Alura\Banco\Modelo\Conta;


use Alura\Banco\Modelo\Conta\Conta;

class ContaCorrente extends Conta
{


    protected function taxaSaque($valorSaque): float
    {
        return $valorSaque += ($valorSaque * 0.05);
    }

    public function transfere(float $valorTransferencia, Conta $contaATransferir): void
    {
        if ($valorTransferencia > $this->saldo) {
            echo "O valor deve ser maior que o saldo da conta atual";
            return;
        }

        $this->saca($valorTransferencia);
        $contaATransferir->deposita($valorTransferencia);
    }
}