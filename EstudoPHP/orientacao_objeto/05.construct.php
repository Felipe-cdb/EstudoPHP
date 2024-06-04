<!-- 
O método __construct() em PHP é um método especial chamado de "construtor". Ele é automaticamente chamado quando um objeto de uma classe é instanciado. O propósito do construtor é inicializar os objetos, geralmente definindo valores iniciais para as propriedades do objeto ou executando outras configurações necessárias.
 -->
<?php
class Car {
    public $brand;
    public $model;

    // Definindo o construtor
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getDetails() {
        return "Marca: $this->brand, Modelo: $this->model";
    }
}

// Criando um objeto da classe Car
$car = new Car('Toyota', 'Corolla');
echo $car->getDetails(); // Saída: Marca: Toyota, Modelo: Corolla
?>
