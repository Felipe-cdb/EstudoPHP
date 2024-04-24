<?php

$matriz = array(
	    array(array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode")),
	    array(array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode")),
	    array(array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode")),
	    array(array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode")),
	    array(array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode"), array("Sabão", 56, "30-02-2026", 12324, "idQrcode")),
	);



// Função para imprimir os valores da matriz com quebra de linha
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