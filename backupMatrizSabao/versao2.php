<?php

$galpao = [
	    [[1,"Sabão"], [2,"Sabão"], [3,"Detergente"],[4,"Amaciante"],[5,"Detergente"]],
	    [[6,"Amaciante"], [7,"Vazio"], [8,"Detergente"], [9,"Amaciante"], [10,"Vazio"]],
	    [[11,"Sabão"], [12,"Sabão"], [13,"Vazio"], [14,"Amaciante"], [15,"Amaciante"]],
	    [[16,"Sabão"], [17,"vazio"], [18,"Detergente"], [19,"Amaciante"], [20,"Amaciante"]],
	    [[21,"vazio"], [22,"Sabão"], [23,"vazio"], [24,"Amaciante"], [25,"Sabão"]],
		];


// Função para imprimir os valores da matriz com quebra de linha
function imprimirMatriz($galpao) {
    for ($i = 0; $i < count($galpao); $i++) {
	print("Andar: " . ($i+1) . "<br>");
        for ($j = 0; $j < count($galpao[$i]); $j++) {
            echo ("  |  ");
            for ($z = 0; $z < count($galpao[$i][$j]); $z++) {
            	echo $galpao[$i][$j][$z] . "  ";
            }
            
        }
        echo "<br>"; // Quebra de linha após cada linha da matriz
    }
}

function encontrarProduto($galpao, $produto) {
    $posicoes = [];
    for ($i = 0; $i < count($galpao); $i++) {
        for ($j = 0; $j < count($galpao[$i]); $j++) {
            if ($galpao[$i][$j][1] === $produto) {
                $posicoes[] = [$i, $j];
            }
        }
    }
    return $posicoes;
}

// Imprimir os valores da matriz com quebra de linha
imprimirMatriz($galpao);

print("<br><br>");
// Encontrar e imprimir as posições do produto "Sabão"
$posicoes_sabao = encontrarProduto($galpao, "Sabão");
echo "Posições do produto 'Sabão':<br>";
foreach ($posicoes_sabao as $posicao) {
    echo "[".$posicao[0].",".$posicao[1]."]"." Andar: " . ($posicao[0] + 1) . ", Coluna: " . ($posicao[1] + 1) . "<br>";
}

?>