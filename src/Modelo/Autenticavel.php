<?php


namespace Alura\Banco\Modelo;

// Interface das classes que podem se autenticar no sistema
interface Autenticavel
{
    public function autenticar(string $senha): bool;
}