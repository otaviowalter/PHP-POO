<?php


namespace Alura\Banco\Modelo;


trait PegaDefineAtributos
{
    public function __get($name): string
    {
        $metodo = 'pega' . ucfirst($name);
        return $this->$metodo();
    }

    public function __set($name, $value): void
    {
        $metodo = 'define' . ucfirst($name);
        $this->$metodo($value);
    }
}