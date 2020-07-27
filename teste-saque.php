<?php


require_once 'autoload.php';

use Alura\Banco\Modelo\{Pessoa, Endereco, Cpf, Funcionario};
use Alura\Banco\Modelo\Conta\{Conta, SaldoInsuficienteException, Titular, ContaCorrente, ContaPoupanca};

$conta = new ContaCorrente(
    new Titular(
        new Cpf('081.408.499-01'),
        'Otávio',
        new Endereco('A', 'B', 'C', '854')
    )
);

$contaDois = new ContaPoupanca(
    new Titular(
        new Cpf('081.408.499-01'),
        'Otávio',
        new Endereco('A', 'B', 'C', '854')
    )
);


$conta->deposita(1500);
echo "Depositou 1500, Saldo: " . $conta->pegaSaldo() . PHP_EOL;

try {
    $conta->saca(3000);
} catch (SaldoInsuficienteException $err) {
    echo $err->getMessage() . PHP_EOL;
    echo $err->getTraceAsString() .PHP_EOL;
}

echo "Sacou 500, Saldo: ".$conta->pegaSaldo() . PHP_EOL;

$conta->transfere(500, $contaDois);

echo "Transferiu 500, Saldo" . $conta->pegaSaldo() . PHP_EOL;

echo "Saldo conta poupança: " . $contaDois->pegaSaldo();
