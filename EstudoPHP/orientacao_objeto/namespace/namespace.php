<!-- A palavra-chave namespace é usada para definir um namespace. Tudo que é declarado depois dessa linha pertence ao namespace definido, até que outro namespace seja declarado ou o arquivo termine. -->
<?php
namespace MyProject;

class MyClass {
    public function myFunction() {
        return "Hello from MyClass in MyProject namespace!";
    }
}

function myFunction() {
    return "Hello from function in MyProject namespace!";
}

// Além de classes, você também pode definir funções e constantes em namespaces.
const MY_CONST = "Hello from constant in MyProject namespace!";
?>

<!-- ###################################################################### -->
<!-- Funções e Constantes em Namespaces -->
<?php
namespace MyProject\Utils;

function myUtilityFunction() {
    return "Utility function from MyProject\\Utils namespace";
}

const MY_UTIL_CONST = "Utility constant from MyProject\\Utils namespace";
?>


<!-- Para usar essas funções e constantes: -->
<?php
use function MyProject\Utils\myUtilityFunction;
use const MyProject\Utils\MY_UTIL_CONST;

echo myUtilityFunction(); // Saída: Utility function from MyProject\Utils namespace
echo MY_UTIL_CONST;       // Saída: Utility constant from MyProject\Utils namespace
?>
