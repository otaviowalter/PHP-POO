<?php

namespace Alura\Banco\Modelo;
// Uma classe final não pode ser herdada
use http\Exception\InvalidArgumentException;

final class Cpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->validaCpfTitular($cpf);
        $this->cpf = $cpf;
    }

    public function pegaNumero(): string
    {
        return $this->cpf;
    }

    private function validaCpfTitular($cpf)
    {
        // Verifica se o número digitado contém todos os digitos
        $cpf = str_replace(".", "", $cpf);
        $cpf = str_replace("-", "", $cpf);
        // Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
        for($i = 0; $i < 10; $i++) {
            if (strlen($cpf) != 11 || $cpf == $i.$i.$i.$i.$i.$i.$i.$i.$i.$i.$i) {
                throw new InvalidArgumentException();
            }

        }
        // Calcula os números para verificar se o CPF é verdadeiro
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }

            $d = ((10 * $d) % 11) % 10;

            if ($cpf[$c] != $d) {
                throw new InvalidArgumentException();
            }
        }

        return true;
    }
}