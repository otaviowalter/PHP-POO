<?php
//Lista timezones disponiveis
//print_r(DateTimeZone::listIdentifiers());

require 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Cpf;

$funcionario = new Desenvolvedor(new Cpf('081.408.499-01'), 'Otávio2', 1000);

$timezone = new DateTimeZone('America/Sao_Paulo');
$entrada = new DateTime('9:00', $timezone);
$saida = new DateTime('18:00', $timezone);

$horasTrabalhadas = $saida->diff($entrada);

echo $horasTrabalhadas->h; // h = horas