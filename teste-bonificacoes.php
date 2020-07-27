<?php

require 'autoload.php';

use Alura\Banco\Modelo\{Cpf};
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, Gerente};
use Alura\Banco\Service\{ControladorDeBonificacoes};


$funcUm = new Desenvolvedor(
    new Cpf('081.408.499-01'),
    'Otávio',
    '2000'
);

$funcUm->promocaoNivel();

$funcDois = new Diretor(
    new Cpf('081.408.499-01'),
    'Augusto',
    '10000'
);

$funcTres = new Gerente(
    new Cpf('081.408.499-01'),
    'Otávio Walter',
    '5000'
);

$controler = new ControladorDeBonificacoes();

$controler->adicionaBonificacao($funcUm);
$controler->adicionaBonificacao($funcDois);
$controler->adicionaBonificacao($funcTres);

echo $controler->pegaTotalBonificacoes();
