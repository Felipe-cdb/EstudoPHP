<?php


// $gapao = array(
// 	    array(array(1,"Sabão"), array(2,"Sabão"), array(3,"Detergente"),array(4,"Amaciante"),array(5,"Detergente")),
// 	    array(array(6,"Amaciante"), array(7,"Vazio"), array(8,"Detergente"), array(9,"Amaciante"), array(10,"Vazio")),
// 	    array(array(11,"Sabão"), array(12,"Sabão"), array(13,"Vazio"), array(14,"Amaciante"), array(15,"Amaciante")),
// 	    array(array(16,"Sabão"), array(17,"vazio"), array(18,"Detergente"), array(19,"Amaciante"), array(20,"Amaciante")),
// 	    array(array(21,"vazio"), array(22,"Sabão"), array(23,"vazio"), array(24,"Amaciante"), array(25,"Sabão")),
// 	);
	
$gapao = [
    [[1,"Sabão"], [2,"Sabão"], [3,"Detergente"],[4,"Amaciante"],[5,"Detergente"]],
    [[6,"Amaciante"], [7,"Vazio"], [8,"Detergente"], [9,"Amaciante"], [10,"Vazio"]],
    [[11,"Sabão"], [12,"Sabão"], [13,"Vazio"], [14,"Amaciante"], [15,"Amaciante"]],
    [[16,"Sabão"], [17,"vazio"], [18,"Detergente"], [19,"Amaciante"], [20,"Amaciante"]],
    [[21,"vazio"], [22,"Sabão"], [23,"vazio"], [24,"Amaciante"], [25,"Sabão"]],
    ];


// Função para imprimir os valores da matriz com quebra de linha
function imprimirMatriz($gapao) {
    for ($i = 0; $i < count($gapao); $i++) {
	print("Andar: " . ($i+1) . "<br>");
        for ($j = 0; $j < count($gapao[$i]); $j++) {
            echo ("  |  ");
            for ($z = 0; $z < count($gapao[$i][$j]); $z++) {
            	echo $gapao[$i][$j][$z] . "  ";
            }
            
        }
        echo "<br>"; // Quebra de linha após cada linha da matriz
    }
}

// Imprimir os valores da matriz com quebra de linha
imprimirMatriz($gapao);

?>