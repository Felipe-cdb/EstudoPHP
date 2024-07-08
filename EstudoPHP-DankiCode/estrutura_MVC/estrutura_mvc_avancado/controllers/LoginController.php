<?php
	
	namespace controllers;

	class LoginController extends Controller{

		public function __construct($view,$model){
			parent::__construct($view,$model);
		}

		public function index(){
			if(isset($_POST['acao'])){
				if($this->model->validarLogin($_POST['login'],$_POST['senha']))
					die('logado com sucesso!');
				else
					die('falhou!');
			}
			$this->view->render('login.php');
		}

	}

?>