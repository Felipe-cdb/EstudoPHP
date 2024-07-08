<!-- Namespaces são frequentemente usados com autoloading para carregar classes automaticamente sem a necessidade de incluir arquivos manualmente. O autoloading pode ser configurado usando o padrão PSR-4, que mapeia namespaces para diretórios de forma estruturada. -->

<!-- evitar múltiplos require ou include. -->

<!-- Para configurar o autoloading, você precisa rodar o comando composer dump-autoload após definir o autoloading no composer.json. -->
<?php
require 'vendor/autoload.php';

use MyProject\MyClass;

$myClass = new MyClass();
echo $myClass->myFunction(); // Saída: Hello from MyClass in MyProject namespace!
?>

<!-- Exemplo de Autoloading com PSR-4
Suponha a seguinte estrutura de diretórios: -->

<!-- 

src/
    MyProject/
        MyClass.php
index.php
composer.json

 -->