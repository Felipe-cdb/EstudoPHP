
<!-- Arquivo classes.php -->


<?php

	//Uma classe serve como um molde para a criação de objetos, definindo suas características e comportamentos


	class NomeDaClasse {
		// Propriedades, métodos e constantes da classe serão definidos aqui
	}


	class Pessoa {
	  // Propriedades (atributos)
	  private $nome;
	  public $idade;

	  // Método (ação)
	  public function apresentar() {
	    echo "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.";
	  }
	}

	// public: Permite acesso à propriedade de qualquer lugar do seu código.
	// private: Restringe o acesso à propriedade apenas dentro da própria classe.
	// protected: Permite acesso à propriedade dentro da classe e em classes derivadas (herança).

	class Pessoa {
	  private $nome; // Somente acessível dentro da classe Pessoa
	  public $idade; // Acessível de qualquer lugar
	  protected $cidade; // Acessível em Pessoa e classes herdadas
	}

	// public: Permite que qualquer parte do seu código chame o método.
	// private: Restringe a chamada do método apenas dentro da própria classe.
	// protected: Permite que o método seja chamado dentro da classe e em classes derivadas (herança).
	// static: Torna o método acessível sem a necessidade de instanciar um objeto (método de classe).

	class Pessoa {
	  public function apresentar() {
	    echo "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.";
	  }

	  private function setNome($novoNome) {
	    $this->nome = $novoNome;
	  }

	  protected static function criarPessoaVazia() {
	    return new Pessoa;
	  }
	}

?>


<!-- Arquivo main.php -->

<?php 

	// 	Use require_once para classes essenciais que não mudam frequentemente.
	// Use include para classes dinâmicas que precisam ser atualizadas em tempo de execução.
	
	//require_once 'classes.php'; // Inclui o arquivo com a classe
	include 'classes.php';

	$pessoa1 = new Pessoa;
	$pessoa1-> nome = "João";
	$pessoa1-> idade = 30;
	$pessoa1-> apresentar();

	$pessoa2 = Pessoa::criarPessoaVazia(); // Chama método estático
	$pessoa2-> setNome("Maria");
	$pessoa2-> idade = 25;
	$pessoa2-> apresentar();

?>

<!-- Properties Typed (Propriedades Tipadas) -->

<?php
class User {
    public string $name;
    public int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }
}
?>
