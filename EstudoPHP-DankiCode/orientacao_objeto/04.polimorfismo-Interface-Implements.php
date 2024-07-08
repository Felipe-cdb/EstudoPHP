<!-- Polimorfismo -->
<!-- Pode ser usada com herança ou com classes abstratas e funções abstratas-->
<?php
class Animal {
    public function makeSound(){
        return "uhhhhuhh!";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "AuAu!";
    }
}
?>

<!-- Forma ideal de usar Polimorfismo abaixo, semelhante ao abstrato, mas classes abstratas utilizam o polimorfismo de modo parcial pois nem tudo precisa ser subescrito, com interface assume o polimorfismo de maneira total.-->
<!-- Interface e Implements -->
<!-- Interface assemelha ao abstract -->
<?php
interface Animal {
    public function makeSound();
}

class Dog implements Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat implements Animal {
    public function makeSound() {
        return "Meow!";
    }
}

function animalSound(Animal $animal) {
    echo $animal->makeSound() . "<br>";
}

$dog = new Dog();
$cat = new Cat();

animalSound($dog); // Saída: Woof!
animalSound($cat); // Saída: Meow!
?>
