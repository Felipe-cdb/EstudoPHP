<!-- src/MyProject/MyClass.php -->
<?php
namespace MyProject;

class MyClass {
    public function myFunction() {
        return "Hello from MyClass in MyProject namespace!";
    }
}
?>

<!-- Namespaces são frequentemente usados com autoloading para carregar classes automaticamente sem a necessidade de incluir arquivos manualmente. O autoloading pode ser configurado usando o padrão PSR-4, que mapeia namespaces para diretórios de forma estruturada. -->

<!-- Exemplo de Autoloading com PSR-4
Suponha a seguinte estrutura de diretórios: -->

<!-- 

src/
    MyProject/
        MyClass.php
index.php
composer.json

 -->