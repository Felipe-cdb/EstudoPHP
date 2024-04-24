<!-- As funções sleep e die são ferramentas úteis em PHP para controlar o fluxo de execução de um script.  -->

<!-- sleep():
A função sleep() é usada para pausar a execução do script por um determinado número de segundos. Isso é útil quando você precisa fazer o script esperar antes de continuar sua execução. O argumento para sleep() é o número de segundos que o script deve esperar antes de continuar. -->
<?php 
echo "Início do script<br>";
sleep(3); // Pausa a execução por 3 segundos
echo "Após a pausa de 3 segundos<br>";
?>

<!-- die():
A função die() (ou exit()) encerra imediatamente a execução do script e exibe uma mensagem opcional. Isso é útil quando você precisa terminar a execução de um script prematuramente devido a algum erro ou condição específica. Se a mensagem não for fornecida, o script será encerrado com um código de saída 0 (sucesso). Se a mensagem for fornecida, o script será encerrado com um código de saída 1 (erro). -->
<?php 
$idade = 15;
if ($idade < 18) {
    die("Você deve ser maior de idade para acessar este conteúdo.");
}
// Continua o script se a idade for maior ou igual a 18
?>