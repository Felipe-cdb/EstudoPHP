<!-- Para usar itens de um namespace diferente, você pode usar o operador de resolução de escopo \ ou a palavra-chave use -->

<?php
namespace AnotherProject;

class MyClass {
    public function myFunction() {
        return "Hello from MyClass in AnotherProject namespace!";
    }
}

// Usando classes de outros namespaces
use MyProject\MyClass as ProjectClass;

$projectClass = new ProjectClass();
echo $projectClass->myFunction(); // Saída: Hello from MyClass in MyProject namespace!

$anotherClass = new MyClass();
echo $anotherClass->myFunction(); // Saída: Hello from MyClass in AnotherProject namespace!
?>
