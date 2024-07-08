<?php
	
	//Necessario criar um banco de dados para testar

	class MySql
	{
		private $pdo;
		
		public static function connect(){
			if(!isset($pdo)){
				$pdo = new PDO('mysql:host=localhost;dbname=testes','root','');
			}

			return $pdo;
		}
	}
?>