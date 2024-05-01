<!-- Formas de criar arrays -->
<?php 
    // Array indexado
    $cores = array("vermelho", "verde", "azul");

    // Array associativo
    $frutas = array("maçã" => "vermelha", "banana" => "amarela", "laranja" => "laranja");

    // Sintaxe mais curta (a partir do PHP 5.4)
    $nomes = ["João", "Maria", "Pedro"];
?>

<!-- Acessando elementos -->
<?php 
    echo $cores[0]; // Saída: vermelho
    echo $frutas["banana"]; // Saída: amarela
?>

<!-- Adicionando elementos -->
<?php 
    $cores[] = "amarelo"; // Adicionando um elemento ao final do array $cores
    $frutas["limão"] = "verde"; // Adicionando um elemento ao array associativo $frutas
?>

<!-- Iterando sobre um Array -->
<!-- pode percorrer um array utilizando estruturas de repetição, como for, foreach, while, etc -->
<?php 
    foreach ($cores as $cor) {
        echo $cor . "<br>";
    }
    
    foreach ($frutas as $fruta => $cor) {
        echo "A $fruta é $cor <br>";
    }    
?>

<!-- Funções do array -->
<!-- O PHP oferece várias funções embutidas para manipular arrays, como: 
count(), array_push(), array_pop(), array_shift(), 
array_unshift(), array_merge(), array_reverse(), entre outras. -->

<!-- count(): Retorna o número de elementos em um array. -->
<?php 
    $numeros = [1, 2, 3, 4, 5];
    echo count($numeros); // Saída: 5    
?>

<!-- array_push(): Adiciona um ou mais elementos ao final de um array -->
<?php 
    $frutas = ["maçã", "banana"];
    array_push($frutas, "laranja", "morango");
    print_r($frutas); // Saída: Array ( [0] => maçã [1] => banana [2] => laranja [3] => morango )    
?>

<!-- array_pop(): Remove e retorna o último elemento de um array -->
<?php 
    $frutas = ["maçã", "banana", "laranja"];
    $ultima_fruta = array_pop($frutas);
    echo $ultima_fruta; // Saída: laranja    
?>

<!-- array_shift(): Remove e retorna o primeiro elemento de um array -->
<?php 
    $frutas = ["maçã", "banana", "laranja"];
    $primeira_fruta = array_shift($frutas);
    echo $primeira_fruta; // Saída: maçã    
?>

<!-- array_unshift(): Adiciona um ou mais elementos no início de um array -->
<?php 
    $frutas = ["banana", "laranja"];
    array_unshift($frutas, "maçã", "morango");
    print_r($frutas); // Saída: Array ( [0] => maçã [1] => morango [2] => banana [3] => laranja )    
?>

<!-- array_merge(): Combina dois ou mais arrays em um único array -->
<?php 
    $frutas1 = ["maçã", "banana"];
    $frutas2 = ["laranja", "morango"];
    $frutas_combinadas = array_merge($frutas1, $frutas2);
    print_r($frutas_combinadas); // Saída: Array ( [0] => maçã [1] => banana [2] => laranja [3] => morango )    
?>

<!-- array_reverse(): Inverte a ordem dos elementos em um array -->
<?php 
    $frutas = ["maçã", "banana", "laranja"];
    $frutas_invertidas = array_reverse($frutas);
    print_r($frutas_invertidas); // Saída: Array ( [0] => laranja [1] => banana [2] => maçã )    
?>

<!-- array_slice(): Retorna uma parte de um array -->
<?php 
    $frutas = ["maçã", "banana", "laranja", "morango", "uva"];
    $parte = array_slice($frutas, 1, 3);
    print_r($parte); // Saída: Array ( [0] => banana [1] => laranja [2] => morango )    
?>

<!-- array_splice(): Remove e/ou substitui elementos de um array -->
<?php 
    $frutas = ["maçã", "banana", "laranja", "morango"];
    array_splice($frutas, 2, 1, "uva");
    print_r($frutas); // Saída: Array ( [0] => maçã [1] => banana [2] => uva [3] => morango )    
?>

<!-- array_key_exists(): Verifica se uma chave existe em um array associativo -->
<?php 
    $frutas = ["maçã" => "vermelha", "banana" => "amarela"];
    if (array_key_exists("banana", $frutas)) {
        echo "A chave 'banana' existe no array de frutas.";
    } else {
        echo "A chave 'banana' não existe no array de frutas.";
    }    
?>

<!-- in_array(): Verifica se um valor existe em um array -->
<?php 
    $frutas = ["maçã", "banana", "laranja"];
    if (in_array("banana", $frutas)) {
        echo "A fruta 'banana' está presente no array.";
    } else {
        echo "A fruta 'banana' não está presente no array.";
    }    
?>

<!-- array_search(): Procura por um valor em um array e retorna a chave correspondente, se encontrada -->
<?php 
    $frutas = ["maçã" => "vermelha", "banana" => "amarela", "laranja" => "laranja"];
    $chave = array_search("amarela", $frutas);
    echo "A fruta 'amarela' está na chave: $chave";    
?>
<!-- Array multimensionais -->
<!-- Matriz -->
<?php 
    $alunos = array(
        array("João", 18, "Masculino"),
        array("Maria", 20, "Feminino"),
        array("Pedro", 22, "Masculino")
    );    
?>
<!-- Neste exemplo, $alunos é um array multidimensional que contém três elementos, cada um sendo um array representando informações sobre um aluno. Cada elemento do array $alunos é, por sua vez, um array com três elementos: nome, idade e sexo. -->

<!-- Para acessar elementos em um array multidimensional, você precisa especificar o índice de cada dimensão separado por colchetes [ ] -->
<?php 
    echo $alunos[0][0]; // Saída: João
?>

<!-- array multidimensional associativo -->
<?php 
    $estoque = array(
        "frutas" => array("maçã" => 10, "banana" => 15),
        "legumes" => array("cenoura" => 20, "batata" => 12)
    );    
?>

<!-- Para mais funções do array acesse a documentação -->
<!-- https://www.php.net/manual/pt_BR/book.array.php -->
