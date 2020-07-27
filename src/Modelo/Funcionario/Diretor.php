<?php


namespace Alura\Banco\Modelo\Funcionario;


use Alura\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{

    public function calculaBonificacao(): float
    {
        return $this->pegaSalario() * 2;
    }

    public function autenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}