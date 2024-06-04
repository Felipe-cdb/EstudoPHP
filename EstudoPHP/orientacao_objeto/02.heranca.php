<!-- Herança: Permite que uma classe (subclasse ou classe derivada) herde propriedades e métodos de outra classe (superclasse ou classe base). -->

<!-- Classe Pai -->
<?php
class Car {
    // Propriedades
    public $brand;
    public $model;
    private $engineStatus = false;

    // Método construtor
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    // Métodos
    public function startEngine() {
        $this->engineStatus = true;
        echo "O motor do $this->brand $this->model foi ligado.<br>";
    }

    public function stopEngine() {
        $this->engineStatus = false;
        echo "O motor do $this->brand $this->model foi desligado.<br>";
    }

    // Método para verificar o estado do motor
    public function isEngineOn() {
        return $this->engineStatus ? 'Ligado' : 'Desligado';
    }
}

// Criando objetos (instâncias da classe Car)
$car1 = new Car('Toyota', 'Corolla');
$car2 = new Car('Honda', 'Civic');

// Usando métodos dos objetos
$car1->startEngine();  // Saída: O motor do Toyota Corolla foi ligado.
echo "Estado do motor do $car1->brand $car1->model: " . $car1->isEngineOn() . "<br>";

$car2->startEngine();  // Saída: O motor do Honda Civic foi ligado.
$car2->stopEngine();   // Saída: O motor do Honda Civic foi desligado.
echo "Estado do motor do $car2->brand $car2->model: " . $car2->isEngineOn() . "<br>";
?>

<!-- Classe Filha -->
<?php
class ElectricCar extends Car {
    public $batteryCapacity;

    public function __construct($brand, $model, $batteryCapacity) {
        parent::__construct($brand, $model);
        $this->batteryCapacity = $batteryCapacity;
    }

    // Método específico para carros elétricos
    public function chargeBattery() {
        echo "A bateria do $this->brand $this->model está carregando.<br>";
    }
}

// Criando um objeto da subclasse ElectricCar
$eCar = new ElectricCar('Tesla', 'Model S', '100 kWh');
$eCar->startEngine();  // Saída: O motor do Tesla Model S foi ligado.
$eCar->chargeBattery();  // Saída: A bateria do Tesla Model S está carregando.
?>
