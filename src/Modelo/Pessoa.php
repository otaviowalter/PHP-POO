<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Cpf;

abstract class Pessoa
{
    // Usando trait
    use PegaDefineAtributos;

    //protected é usado para que tanto dentro da classe pai e as filhas dela tenham acesso aos atributos, mas não fora.
    protected Cpf $cpf;
    protected string $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->validaNome($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function pegaCpf(): string
    {
        return $this->cpf->pegaNumero();
    }

    public function pegaNome(): string
    {
        return $this->nome;
    }

    // métodos finais não podem ser sobescritos
    final protected function validaNome($nome): void
    {
        if (strlen($nome) <= 5) {
            throw new NomeInvalidoException();
        }
    }

}