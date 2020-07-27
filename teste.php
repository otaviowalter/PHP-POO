<?php

require 'autoload.php';

use Alura\Banco\Modelo\{Cpf, Endereco};
use Alura\Banco\Modelo\Conta\{Titular, ContaCorrente};
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

$funcionario = new Desenvolvedor(
    new Cpf('081.408.499-01'),
    'Otávio',
    5000
);
echo '<pre>';
print_r($funcionario);
echo '</pre>';

$titularUm = new Titular(
    new Cpf(
        '081.408.499-01'
    ),
    'Janice',
    new Endereco(
        'Criciuma',
        'Quarta Linha',
        'A1',
        '3123'
    )
);

echo '<pre>';
print_r($titularUm->pegaCpf());
echo '</pre>';

$contaUm = new ContaCorrente($titularUm);

echo '<pre>';
print_r($contaUm);
echo '</pre>';

$contaUm->deposita(1850);

echo '<pre>';
print_r($contaUm->pegaSaldo());
echo '</pre>';

$contaUm->saca(500);

echo '<pre>';
print_r($contaUm->pegaSaldo());
echo '</pre>';
