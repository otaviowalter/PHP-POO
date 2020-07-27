<?php


namespace Alura\Banco\Modelo\Funcionario;


use Alura\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->pegaSalario();
    }
    //Metodo implementado da interface, serve pra autenticar o Gerente com uma senha padrao
    public function autenticar(string $senha): bool
    {
        return $senha === '12345';
    }
}