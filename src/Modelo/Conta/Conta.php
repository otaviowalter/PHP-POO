<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Titular;
use http\Exception\InvalidArgumentException;

//Classes abstratas são uma meia classe, ou seja, necessitam de algo mais, por isso são extendidas por outras classes
// e complementadas, da mesma forma que seus metodos abastratos
abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    //atributo interno da Conta, não é criado um para uma conta, mas é criado assim que uma conta inicia e conta p todas
    private static $numContas = 0;
    //Função que vai ser iniciada quando uma nova Conta for criada
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        //self:: se refere a Conta em si, não a instância dela
        //conta a quantidade de contas que foram criadas
        self::$numContas++;
    }
    //GarbageColector, essa função limpa da memória as contas iniciadas que não tem mais nenhuma instância pra ela
    public function __destruct()
    {
        self::$numContas--;
    }

    public function saca(float $valorSaque): void
    {
        $valorSaque = $this->taxaSaque($valorSaque);
        if ($valorSaque > $this->saldo) {
            //Lança exception pro lugar que chamou o método,
            // se não foi usado trycatch nesse lugar vai dar Fatal Error e finalizar o programa
            throw new SaldoInsuficienteException($this->saldo, $valorSaque);
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorDeposito): void
    {
        if ($valorDeposito <= 0) {
            //Usa uma exception já existente
            throw new InvalidArgumentException();
        }

        $this->saldo += $valorDeposito;
    }

    public function pegaTitular(): Titular
    {
        return $this->titular;
    }

    public function pegaSaldo(): float
    {
        return $this->saldo;
    }

    public static function pegaNumContas(): int
    {
        return self::$numContas;
    }

    //Métodos abstratos sempre devem ser sobescritos por as classes que extendem essa
    protected abstract function taxaSaque($valor): float;

}