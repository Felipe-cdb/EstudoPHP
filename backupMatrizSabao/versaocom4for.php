<?php

$gapao = [
	    [[[1,"Sabão"],[1,"Sabão"]], [[2,"Sabão"],[2,"Sabão"]], [[3,"Detergente"],[3,"Detergente"]],[[4,"Amaciante"],[4,"Amaciante"]],[[5,"Detergente"],[5,"Detergente"]]],
	    [[[6,"Amaciante"],[6,"Amaciante"]], [[7,"Vazio"],[7,"Vazio"]], [[8,"Detergente"],[8,"Detergente"]], [[9,"Amaciante"],[9,"Amaciante"]], [[10,"Vazio"],[10,"Vazio"]]],
	    [[[11,"Sabão"],[11,"Sabão"]],[ [12,"Sabão"], [12,"Sabão"]], [[13,"Vazio"],[13,"Vazio"]], [[14,"Amaciante"],[14,"Amaciante"]], [[15,"Amaciante"],[15,"Amaciante"]]],
	    [[[16,"Sabão"],[16,"Sabão"]], [[17,"vazio"],[17,"vazio"]], [[18,"Detergente"],[18,"Detergente"]], [[19,"Amaciante"],[19,"Amaciante"]], [[20,"Amaciante"],[20,"Amaciante"]]],
	    [[[21,"vazio"],[21,"vazio"]], [[22,"Sabão"],[22,"Sabão"]], [[23,"vazio"],[23,"vazio"]], [[24,"Amaciante"],[24,"Amaciante"]], [[25,"Sabão"],[25,"Sabão"]]],
		];



// Função para imprimir os valores da matriz com quebra de linha
function imprimirMatriz($gapao) {
    for ($i = 0; $i < count($gapao); $i++) {
	print("Andar: " . ($i+1) . "<br>");
        for ($j = 0; $j < count($gapao[$i]); $j++) {
            echo ("  |  ");
            for ($z = 0; $z < count($gapao[$i][$j]); $z++) {
            	for ($x = 0; $x < count($gapao[$i][$j][$z]); $x++) {
            		echo $gapao[$i][$j][$z][$x] . "  ";
            	}
            }
            
        }
        echo "<br>"; // Quebra de linha após cada linha da matriz
    }
}

imprimirMatriz($gapao);

print("<br><br>");


?>