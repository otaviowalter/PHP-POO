<?php


namespace Alura\Banco\Modelo;


use Throwable;

class NomeInvalidoException extends \Exception
{
    public function __construct($message = "O nome deve conter mais do que 5 carácteres!", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}