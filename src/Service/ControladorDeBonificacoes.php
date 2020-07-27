<?php


namespace Alura\Banco\Service;


use Alura\Banco\Modelo\Funcionario\Funcionario;

//Controla as bonificações dos funcionários
class ControladorDeBonificacoes
{
    private float $totalBonificacoes = 0.0;

    public function adicionaBonificacao(Funcionario $funcionario): void
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function pegaTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }

}