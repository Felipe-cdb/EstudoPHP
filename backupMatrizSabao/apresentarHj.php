<?php

// Função para gerar a matriz com estrutura inicial e numeração sequencial
function gerarMatriz($numAndares, $numColunas) {
    $galpao = [];
    //Contadores para formar o id das posição
    $contadorColuna = 1;
    $contadorAndar = 1000;

    for ($i = 0; $i < $numAndares; $i++) {
    	//array do andar para armazenar todas as posições do respectivo andar
        $andar = [];
        for ($j = 0; $j < $numColunas; $j++) {
        	//o id da posição é formado pela contagem de colunas e o andar que a posição atual está localizada
        	$idPosicao = $contadorAndar+$contadorColuna;
            $posicao = [$idPosicao, [null], [null]]; // Inicializa a posição com id sequencial e dois arrays vazios
            $andar[] = $posicao; //adiciona a nova posição criada ao fim do array andar
            $contadorColuna++;
        };
        $galpao[] = $andar; //adiciona o andar total criado
        $contadorColuna = 1;
        $contadorAndar = $contadorAndar+1000;
    };

    return $galpao;
};

// Função imprimir antiga com 4 for
// function imprimirMatriz($galpao) {
//     for ($i = 0; $i < count($galpao); $i++) {
// 	print("Andar: " . ($i+1) . "<br>");
//         for ($j = 0; $j < count($galpao[$i]); $j++) {
//             echo ("  |  ");
//             for ($z = 0; $z < count($galpao[$i][$j]); $z++) {
//             	echo (" [ ");
//             	for ($x = 0; $x < count($galpao[$i][$j][$z]); $x++) {
//             		echo $galpao[$i][$j][$z][$x];
//             	}
//             	echo (" ] ");
//             };
//             echo ("  |  ");
//         }
//         echo "<br>"; // Quebra de linha após cada linha da matriz
//     }
// }

// Função para imprimir a matriz gerada
function imprimirMatriz($galpao) {
    $numAndares = count($galpao);
    for ($i = 0; $i < $numAndares; $i++) {
        echo "Andar " . ($i + 1) . ": <br>";
        foreach ($galpao[$i] as $posicao) {
            echo "| ";
            echo $posicao[0] . " ";
            echo "[" . implode(",", $posicao[1]) . "] ";
            echo "[" . implode(",", $posicao[2]) . "] ";
            echo "| ";
        };
        echo "<hr>";
    };
};

function espacosDisponiveis($galpao){
	echo "Locais disponiveis no Galpão<br>";
	$numAndares = count($galpao);
    for ($i = 0; $i < $numAndares; $i++) {
        echo "Andar " . ($i + 1) . ": <br>";
        foreach ($galpao[$i] as $posicao) {
        	if($posicao[1] === [null] || $posicao[2] === [null] ){
	            echo "| ";
	            echo $posicao[0] . " ";
	            echo "Esquerdo [" . implode(",", $posicao[1]) . "] ";
	            echo "Direito [" . implode(",", $posicao[2]) . "] ";
	            echo "| ";
        	} else {
        		continue;
        	};
        };
        echo "<hr>";
    };
};

function addProduto($galpao, $nomeProduto){
	echo $nomeProduto;
	espacosDisponiveis($galpao);
};


// Exemplo de uso
$numAndares = 5;
$numColunas = 4;

$galpao = gerarMatriz($numAndares, $numColunas);

// Exibir a matriz gerada
echo "Matriz Gerada:<br>";
imprimirMatriz($galpao);

addProduto($galpao,"Arroz");

echo "<br><br>analisando o primeiro index[0][0] do galpão<br>";
$galpao[1][1][2] = ["Arroz"];
$galpao[1][2][1] = ["Feijão"];
$galpao[1][2][2] = ["Arroz"];

addProduto($galpao,"Arroz");

        foreach ($galpao[1] as $posicao) {
        	 echo "| ";
	            echo $posicao[0] . " ";
	            echo "Esquerdo [" . implode(",", $posicao[1]) . "] ";
	            echo "Direito [" . implode(",", $posicao[2]) . "] ";
	            echo "| ";
        };


?>
