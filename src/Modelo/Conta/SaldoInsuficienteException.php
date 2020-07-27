<?php

namespace Alura\Banco\Modelo\Conta;
//Classe criada e extendendo Exception, assim ela pode tratar qualquer excessao, podia ser uma especifica também
class SaldoInsuficienteException extends \Exception
{
    //Modificado o construtor para fazer erros mais legiveis na exception
    public function __construct(float $saldo, float $valorSaque)
    {
        parent::__construct("O saldo da conta é {$saldo} e você está querendo sacar {$valorSaque}, isso não é possível!");
    }
}