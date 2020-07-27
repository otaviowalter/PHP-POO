<?php

namespace Alura\Banco\Modelo;
//Usado para a IDE entender quando chamar ex.: $endereço->rua;
/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @author Otávio
 * @property string $cidade;
 * @property string $bairro;
 * @property string $rua;
 * @property string $numero;
 */

final class Endereco
{
    use PegaDefineAtributos;

    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function pegaCidade(): string
    {
        return $this->cidade;
    }

    public function pegaBairro(): string
    {
        return $this->bairro;
    }

    public function pegaRua(): string
    {
        return $this->rua;
    }

    public function pegaNumero(): string
    {
        return $this->numero;
    }

    public function defineCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    public function defineBairro(string $bairro): void
    {
        $this->bairro = $bairro;
    }

    public function defineRua(string $rua): void
    {
        $this->rua = $rua;
    }

    public function defineNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->cidade}, {$this->bairro}.";
    }
}