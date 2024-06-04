<!-- principalmente quatro tipos de estruturas de repetição: 
for, while, do-while e foreach -->

<!-- FOR -->
<!-- usado quando você sabe exatamente quantas vezes deseja repetir um bloco de código.  -->
<?php 
    for ($i = 0; $i < 5; $i++) {
        echo "O valor de i é: $i <br>";
    }    
?>

<!-- While -->
<!-- utilizado quando você quer repetir um bloco de código enquanto uma condição específica for verdadeira. -->
<!-- A condição é verificada antes da execução do bloco de código. -->
<?php 
    $i = 0;
    while ($i < 5) {
        echo "O valor de i é: $i <br>";
        $i++;
    }
?>

<!-- do-While -->
<!-- é semelhante ao while, mas a condição é verificada após a execução do bloco de código. -->
<!-- o bloco de código é executado pelo menos uma vez -->
<?php 
    $i = 0;
    do {
        echo "O valor de i é: $i <br>";
        $i++;
    } while ($i < 5);
?>

<!-- foreach -->
<!-- é usado exclusivamente para iterar sobre arrays ou objetos. 
Ele percorre cada elemento do array ou cada propriedade do objeto. -->
<?php 
    $cores = array("vermelho", "verde", "azul");
    foreach ($cores as $cor) {
        echo "A cor é: $cor <br>";
    }
?>

<!-- foreach() as key => value -->
<!-- que oferece mais flexibilidade ao iterar sobre arrays associativos. Vou explicar essa estrutura em detalhes -->
<!-- Esta estrutura de repetição é semelhante à estrutura foreach padrão, mas permite que você itere sobre um array associativo e acesse tanto a chave quanto o valor de cada elemento. -->

<?php 
$frutas = array("maçã" => "vermelha", "banana" => "amarela", "laranja" => "laranja");

foreach ($frutas as $fruta => $cor) {
    echo "A $fruta é $cor <br>";
}
?>