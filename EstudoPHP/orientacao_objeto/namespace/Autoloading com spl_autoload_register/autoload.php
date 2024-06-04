<?php
function myAutoloader($className) {
    $path = __DIR__ . '/src/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($path)) { //verifica se o arquivo existe 
        require $path;
    } else {
        echo "Class $className not found!";
    }
}

spl_autoload_register('myAutoloader');
?>

<!-- 
* A função myAutoloader recebe o nome completo da classe (incluindo o namespace).
* str_replace('\\', '/', $className) substitui as barras invertidas dos namespaces por barras normais para construir o caminho do arquivo.
* __DIR__ é usado para garantir que o caminho seja relativo ao diretório do arquivo autoload.php.
* file_exists($path) verifica se o arquivo existe antes de tentar incluí-lo.
 -->

 <!-- str_replace('\\', '/', $className) é usado pois no caso do servidor ser no linus o "\" não é identificado corretamente então a função str_replace substitui '\' por '/' corrigindo um futuro erro-->
<!-- na função é usado duas barras '\\' , pois a barra é um caracter reservado do php para transformar caracteres reservado em string, mas se precisamos de '\' como string basta usar duas '\\' que significa '\' -->