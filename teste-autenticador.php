<?php

require 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Titular;

$titular = new Titular(
    new Cpf(
        '081.408.499-01'
    ), 
    'Otávio', 
    new Endereco(
        '$cidade', 
        '$bairro', 
        '$rua', 
        '$numero'
    )
);

$autenticador = new Autenticador();

$autenticador->login($titular, '123456');

$funcionario = new Gerente(
    new Cpf('081.408.499-01'),
    'Augusto',
    6000
);

$autenticador->login($funcionario, '123456');