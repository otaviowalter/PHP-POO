<?php
//################# TRATAMENTO DE ERROS

//Obs.: A partir da versão 7 do php surgiu uma nova cadeia de erros, mas a maioria ainda é tratado dessa forma

//Mostrar todos os erros.
error_reporting(E_ALL);

//Mostrar a mensagem de todos os erros, 0 = false, 1 = true.
//Produção = 0, Desenvolvimento = 1.
ini_set('display_errors', 1);

//Modo antigo que ainda é usado para controlar erros no PHP.
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    switch ($errno) {
        case E_WARNING:
            echo "UM WARNING AQUI!" .PHP_EOL;
            break;
        case E_NOTICE:
            echo "UM NOTICE AQUI!" . PHP_EOL;
            break;
    }
});

echo $variavel;
echo $array[12];

echo CONSTANTE;
//###################

//################### ANOTATIONS IDE
//Se for utilizado uma IDE, ela avisa para outras partes do código que chamarem essa função que ela pode causar um erro ou exceção
/**
 * @throws Exception
 */
/*
function funcaoQueLancaExcecao()
{}

function outraFuncao()
{
    funcaoQueLancaExcecao();
}*/
//###################

//################### FINALLY
/*
// Quase nunca usado mas pra essa situação onde quer fazer algo antes de retornar ela pode ser útil
function a(): int
{
    try {
        echo "Código";
        return 0;
    } catch (Throwable $e) {
        echo "Problema";
        return 1;
    } finally {
        echo "Final da função";
    }

}

echo a();
*/