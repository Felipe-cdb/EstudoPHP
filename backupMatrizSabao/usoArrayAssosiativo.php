<?php 
$produtos = [
    [["produto" => "maçã", "preco" => 3.25],["produto" => "maçã Verde", "preco" => 3.25]],
    [["produto" => "banana", "preco" => 2],["produto" => "Banana Prata", "preco" => 2]],
    [["produto" => "laranja", "preco" => 1.5],[null]],
    [["produto" => "morango", "preco" => 4],[null]],
    [["produto" => "uva", "preco" => 5],["produto" => "uva Verde", "preco" => 5]]
];

echo "Produtos com preço acima de 3:<br>";
foreach ($produtos as $pares) {
    foreach ($pares as $produto) {
        if ($produto !== null && isset($produto["preco"]) && $produto["preco"] > 3) {
            echo $produto["produto"] . "<br>";
        }
    }
}
?>

<?php 
$produtos = [
    [["produto" => "maçã", "preco" => 3.25],["produto" => "maçã Verde", "preco" => 3.25]],
    [["produto" => "banana", "preco" => 2],["produto" => "Banana Prata", "preco" => 2]],
    [["produto" => "laranja", "preco" => 1.5], ["produto" => null, "preco" => null]],
    [["produto" => "morango", "preco" => 4], ["produto" => null, "preco" => null]],
    [["produto" => "uva", "preco" => 5], ["produto" => "uva Verde", "preco" => 5]]
];

echo "Produtos com preço acima de 3:<br>";
foreach ($produtos as $pares) {
    foreach ($pares as $produto) {
        if ($produto["preco"] !== null && $produto["preco"] > 3) {
            echo $produto["produto"] . "<br>";
        }
    }
}
?>