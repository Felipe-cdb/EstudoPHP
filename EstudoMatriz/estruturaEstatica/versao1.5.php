<?php

//Versão estática.
//Essa versão a matriz carrega um array para o galpão inteiro , e dentro do array matriz, temos 5 array para representar os 5 andares, e dentro dos andares temos arrays para representar cada palete.
//A diferença para versão anterior é que não utilizamos a palavra resevada array para declara o array e sim chaves "[]". 
// Foi implementado um identificador sequencial para identificar cada espaço
 	
$galpao = [
    [[1,"Sabão"], [2,"Sabão"], [3,"Detergente"],[4,"Amaciante"],[5,"Detergente"]],
    [[6,"Amaciante"], [7,"Vazio"], [8,"Detergente"], [9,"Amaciante"], [10,"Vazio"]],
    [[11,"Sabão"], [12,"Sabão"], [13,"Vazio"], [14,"Amaciante"], [15,"Amaciante"]],
    [[16,"Sabão"], [17,"vazio"], [18,"Detergente"], [19,"Amaciante"], [20,"Amaciante"]],
    [[21,"vazio"], [22,"Sabão"], [23,"vazio"], [24,"Amaciante"], [25,"Sabão"]],
    ];


// Função para imprimir os valores da matriz com quebra de linha
//Para pecorrer a matriz utilizamos 3 for, o primeiro para pecorrer os andares, o segundo pecorre os espaços que armazena os paletes e o terceiro cada elemento do palete. 
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

// Imprimir os valores da matriz com quebra de linha
imprimirMatriz($galpao);

?>