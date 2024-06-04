<?php

// Função para gerar a matriz com estrutura inicial e numeração sequencial
function gerarMatriz($numAndares, $numPrateleira) {
    $galpao = [];
    //Contadores para formar o id das posição
    //contadorPredio identifica a quantidade de colunas presentes e o contadorAndar a quantidade de andares
    $contadorPrateleira = 1; // quantidade de colunas por andares representada em centenas 
    $contadorAndar = 1000; // quantidade de andares representado por milhar

    for ($i = 0; $i < $numAndares; $i++) {
    	//array do andar para armazenar todas as posições do respectivo andar
        $andar = [];
        for ($j = 0; $j < $numPrateleira; $j++) {
        	//o id da posição é formado pela contagem de colunas e o andar que a posição atual está localizada
        	$idPosicao = $contadorAndar+$contadorPrateleira;
            $posicao = [$idPosicao, [null], [null]]; // Inicializa a posição com id sequencial e dois arrays vazios
            $andar[] = $posicao; //adiciona a nova posição criada ao fim do array andar
            $contadorPrateleira++;
        };
        $galpao[] = $andar; //adiciona o andar total criado
        $contadorPrateleira = 1; //Renicia o contadorPrateleira para o próximo andar
        $contadorAndar = $contadorAndar+1000; //adiciona uma milhar para contabilizar o próximo andar
    };

    return $galpao;
};

// Função para imprimir a matriz gerada
function imprimirMatriz($galpao) {
    $numAndares = count($galpao);
     // Loop através de cada posição (prateleira) no andar atual
    for ($i = 0; $i < $numAndares; $i++) {
        echo "Andar " . ($i + 1) . ": <br>";
        foreach ($galpao[$i] as $posicao) {
            echo "| ";
            echo $posicao[0] . " "; // Identificador da posição
            echo "[" . implode(",", $posicao[1]) . "] "; // Item da Esquerda
            echo "[" . implode(",", $posicao[2]) . "] "; // Item da Direita
            echo "| ";
        };
        echo "<hr>";
    };
};

// Melhora Função
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


// função em criação
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
