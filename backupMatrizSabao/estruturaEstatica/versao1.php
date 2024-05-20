<?php

//Versão estática.
//Essa versão a matriz carrega um array para o galpão inteiro , e dentro do array matriz, temos 5 array para representar os 5 andares, e dentro dos andares temos arrays para representar cada espaço que armazena 2 palete.
//OBS: utilizamos a declaração "array()" e não chaves "[]"
$matriz = array(
	    array(array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode")),
	    array(array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode")),
	    array(array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode")),
	    array(array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode")),
	    array(array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode")),
	);



// Função para imprimir os valores da matriz com quebra de linha
//Para pecorrer a matriz utilizamos 3 for, o primeiro para pecorrer os andares, o segundo pecorre os espaços que armazena os paletes e o terceiro cada elemento do palete. 
function imprimirMatriz($matriz) {
    for ($i = 0; $i < count($matriz); $i++) {
	print("Andar: " . ($i+1) . "<br>");
        for ($j = 0; $j < count($matriz[$i]); $j++) {
            echo ("  |  ");
            for ($z = 0; $z < count($matriz[$i][$j]); $z++) {
            	echo $matriz[$i][$j][$z] . "  ";
            }
            
        }
        echo "<br>"; // Quebra de linha após cada linha da matriz
    }
}

// Imprimir os valores da matriz com quebra de linha
imprimirMatriz($matriz);

?>