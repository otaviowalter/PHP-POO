<?php


namespace Alura\Banco\Service;


use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function login(Autenticavel $autenticavel, string $senha): void
    {
        if (! $autenticavel->autenticar($senha)) {
            echo "Não logado!";
            return;
        }

        echo "Logado com sucesso!";
    }
}