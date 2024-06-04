<?php

//Versão 3. Continua com a matriz Estática.
//Essa versão já começamos a trabalhar a estrutura com 2 paletes para cada espaço
//Cada palete possui um indentificador para representar o espaço que esse palete esta armazenado, como são dois palete para cada espaço, temos o codigo identificador duplicado.
$galpao = [
	    [[[1,"Sabão"],[1,"Sabão"]], [[2,"Sabão"],[2,"Sabão"]], [[3,"Detergente"],[3,"Detergente"]],[[4,"Amaciante"],[4,"Amaciante"]],[[5,"Detergente"],[5,"Detergente"]]],
	    [[[6,"Amaciante"],[6,"Amaciante"]], [[7,"Vazio"],[7,"Vazio"]], [[8,"Detergente"],[8,"Detergente"]], [[9,"Amaciante"],[9,"Amaciante"]], [[10,"Vazio"],[10,"Vazio"]]],
	    [[[11,"Sabão"],[11,"Sabão"]],[ [12,"Sabão"], [12,"Sabão"]], [[13,"Vazio"],[13,"Vazio"]], [[14,"Amaciante"],[14,"Amaciante"]], [[15,"Amaciante"],[15,"Amaciante"]]],
	    [[[16,"Sabão"],[16,"Sabão"]], [[17,"vazio"],[17,"vazio"]], [[18,"Detergente"],[18,"Detergente"]], [[19,"Amaciante"],[19,"Amaciante"]], [[20,"Amaciante"],[20,"Amaciante"]]],
	    [[[21,"vazio"],[21,"vazio"]], [[22,"Sabão"],[22,"Sabão"]], [[23,"vazio"],[23,"vazio"]], [[24,"Amaciante"],[24,"Amaciante"]], [[25,"Sabão"],[25,"Sabão"]]],
		];



// Função para imprimir os valores da matriz com quebra de linha
// Nessa versão necessitamos de 4 for
// - O primeito para pecorrer os andares
// - O segundo para pecorrer os espaços
// - O terceiro para pecorrer os palete( no caso 2 palete)
// - O quarto para pecorrer cada elemento presente em um palete(Nome do produto, qtd, lote e etc) 
function imprimirMatriz($galpao) {
    for ($i = 0; $i < count($galpao); $i++) {
	print("Andar: " . ($i+1) . "<br>");
        for ($j = 0; $j < count($galpao[$i]); $j++) {
            echo ("  |  ");
            for ($z = 0; $z < count($galpao[$i][$j]); $z++) {
            	for ($x = 0; $x < count($galpao[$i][$j][$z]); $x++) {
            		echo $galpao[$i][$j][$z][$x] . "  ";
            	}
            }
            
        }
        echo "<br>"; // Quebra de linha após cada linha da matriz
    }
}

imprimirMatriz($galpao);

?>