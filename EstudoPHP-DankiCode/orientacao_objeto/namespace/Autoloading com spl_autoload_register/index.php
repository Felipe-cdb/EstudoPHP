<!-- Autoloading em PHP é uma técnica que permite carregar classes, interfaces e traits automaticamente quando elas são usadas, sem a necessidade de incluir manualmente os arquivos que as contêm. Isso torna o código mais limpo e fácil de gerenciar, especialmente em projetos grandes. -->

<!-- evitar múltiplos require ou include. -->


<!-- Antes do PHP 5.3, autoloading era feito usando a função mágica __autoload(). No entanto, essa abordagem foi substituída pela função spl_autoload_register(), que oferece mais flexibilidade e permite registrar múltiplas funções de autoload. -->

<?php
require 'autoload.php';

use Controllers\HomeController;
use Models\User;

$controller = new HomeController();
echo $controller->index(); // Saída: Hello from HomeController!

$user = new User();
echo $user->getName(); // Saída: John Doe
?>

<!-- 
* require 'autoload.php'; inclui o arquivo de autoload, registrando a função myAutoloader.
* As classes HomeController e User são usadas diretamente, e o autoloading se encarrega de carregar os arquivos correspondentes. 
-->

<!-- Estrutura de diretorio -->
<!-- 
project/
    src/
        Controllers/
            HomeController.php
        Models/
            User.php
    index.php
    autoload.php
 -->