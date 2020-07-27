<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        //parente se refere a classe pai que está sendo estendida, nesse exemplo está usando a sua classe construct
        parent::__construct($cpf, $nome);
        $this->endereco = $endereco;
    }

    public function pegaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function autenticar(string $senha): bool
    {
        return $senha === '123456';
    }
}