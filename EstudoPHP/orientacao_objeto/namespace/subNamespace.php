<!-- Namespaces podem ser aninhados, criando subnamespaces para uma organização ainda mais granular -->
<?php
namespace MyProject\SubNamespace;

class MyClass {
    public function myFunction() {
        return "Hello from MyClass in MyProject\\SubNamespace!";
    }
}
?>

<!-- Para utilizar essa classe de outro arquivo: -->
<?php
use MyProject\SubNamespace\MyClass;

$subNamespaceClass = new MyClass();
echo $subNamespaceClass->myFunction(); // Saída: Hello from MyClass in MyProject\SubNamespace!
?>
