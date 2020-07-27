<?php

//Faz a importação das classes automaticamente
spl_autoload_register(

	function (string $nomeClasse): void { //Ex.: $nomeClasse = 'Alura\Banco\Modelo\Pessoa'•
	    $nomeClasse = str_replace('Alura\\Banco', 'src', $nomeClasse); //Ex.: $nomeClasse = 'src\Modelo\Pessoa'
	    $nomeClasse = str_replace('\\', DIRECTORY_SEPARATOR, $nomeClasse); //Ex.: $nomeClasse = 'src/Modelo/Pessoa'
	    $nomeClasse .= '.php'; //Ex.: $nomeClasse = 'src/Modelo/Pessoa.php'

		if (file_exists($nomeClasse)) {
		    require_once $nomeClasse;
    	};	
    }
);