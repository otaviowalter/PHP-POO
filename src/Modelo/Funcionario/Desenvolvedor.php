<?php


namespace Alura\Banco\Modelo\Funcionario;


class Desenvolvedor extends Funcionario
{

    public function promocaoNivel()
    {
        return $this->aumentoSalario($this->pegaSalario() * 0.5);
    }

    public function calculaBonificacao(): float
    {
        return $this->pegaSalario() * 0.2;
    }
}