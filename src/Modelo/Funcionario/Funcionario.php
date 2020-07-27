<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(Cpf $cpf, string $nome, float $salario)
    {
        parent::__construct($cpf, $nome);
        $this->salario = $salario;
    }

    public function pegaSalario(): float
    {
        return $this->salario;
    }

    public function aumentoSalario(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "O aumento no salário deve ser maior que zero!";
            return;
        }

        $this->salario += $valorAumento;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
    // Uma bonificação que o usuario ganha no salário após Ex.: Metas de vendas, Um ano.
    public abstract function calculaBonificacao(): float;
}