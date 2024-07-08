<?php
	namespace models;
	class HomeModel extends Model
	{

		//Aqui é o método para puxar os clientes!
		public static function pegaClientes(){
		//Para executar com o Banco de dados ativados necessario remover os comentarios
		// $clientes = \MySql::connect()->prepare("SELECT * FROM clientes");
		// $clientes->execute();
		
		// return $clientes->fetchAll();
		return (object) array('cliente 1' => ['nome' => "Maria"],'cliente 2' => ['nome' => "João"]);
		}
		
	}
?>