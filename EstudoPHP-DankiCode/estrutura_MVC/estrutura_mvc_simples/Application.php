<?php
	
	define('INCLUDE_PATH','../estrutura_mvc_simples/');
	define('INCLUDE_PATH_FULL','../estrutura_mvc_simples/Views/pages/');
	class Application
	{
		
		public function executar(){
			$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';

			$url = ucfirst($url);
			$url.="Controller";
			if(file_exists('Controllers/'.$url.'.php')){
				$className = 'Controllers\\'.$url;
				$controler = new $className;
				$controler->executar();
			}else{
				die("Não existe esse controlador!");
			}
		}
	}
	
?>