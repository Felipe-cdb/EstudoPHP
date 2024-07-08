<?php

	// mudar caminho conforme local do seu projeto
	//caminho completo
	// define('INCLUDE_PATH','/EstudoPHP/EstudoPHP-DankiCode/estrutura_MVC/site_MVC/');]
	//Podemos simplificar usando o ../
	define('INCLUDE_PATH','../site_MVC/');
	
	$autoload = function ($class){
		if(file_exists($class.'.php')){
			include($class.'.php');
		}else{
			die('Não conseguimos chamar a classe: '.$class);
		}
	};

	spl_autoload_register($autoload);

	$application = new Application();
	$application->run();

?>