<?php

require 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$endereco = new Endereco('Criciuma', 'Ana Maria', 'Rua', '500');

echo $endereco->rua . PHP_EOL;

$endereco->rua = "Dagostim";

echo $endereco->rua;
