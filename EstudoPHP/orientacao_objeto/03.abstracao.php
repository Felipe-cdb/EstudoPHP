<!-- Abstração: Permite que você defina classes que não podem ser instanciadas, mas podem ser estendidas por outras classes. Isto é feito utilizando classes abstratas e interfaces. -->

<?php
abstract class Vehicle {
    abstract public function start();

    public function FunctionName($value='')
    {
        // Outra função para demostrar que nem todas as funções da classe abstrata são funções abstrata
    }
}

class Motorcycle extends Vehicle {
    //a função estática deve ser adiciona na classe extendida, é obrigado
    public function start() {
        echo "A moto foi ligada.<br>";
    }
}

$moto = new Motorcycle();
$moto->start();  // Saída: A moto foi ligada.
?>
