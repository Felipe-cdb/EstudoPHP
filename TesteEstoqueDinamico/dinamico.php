<?php

function gerarEstrutura($numeroRuas, $qtdPrediosPorRua, $qtdAndaresPorPredio, $qtdCasasPorAndar) {

    $estrutura = [];
    
    for ($i = 0; $i < $numeroRuas; $i++) {
        $predios = [];
        
        for ($p = 0; $p < $qtdPrediosPorRua; $p++) {
            $andares = [];
            
            for ($j = 0; $j < $qtdAndaresPorPredio; $j++) {
                $casas = [];
                
                for ($k = 0; $k < $qtdCasasPorAndar; $k++) {
                    $casas[] = [];
                }
                
                $andares[] = ['qtdCasas' => $casas];
            }
            
            $predios[] = ['qtdAndares' => $andares];
        }
        
        $estrutura[] = ['qtdPredios' => $predios];
    }
    
    return ['numeroRuas' => $numeroRuas, 'qtdPrediosPorRua' => $qtdPrediosPorRua, 'qtdAndaresPorPredio' => $qtdAndaresPorPredio, 'qtdAndares' => $estrutura];
}

function imprimirMatriz($estrutura) {
    $numeroRuas = $estrutura['numeroRuas'];
    
    // echo "<pre>";
    // var_dump($estrutura);
    // exit;
    foreach ($estrutura['qtdAndares'] as $ruaIndex => $rua) {
        echo "<strong>Rua $ruaIndex:</strong><br>";
        
        foreach ($rua['qtdPredios'] as $predioIndex => $predio) {
            echo "<hr>";
            echo "Prédio $predioIndex:<br>";
            echo "<hr>";
            
            
            foreach ($predio['qtdAndares'] as $andarIndex => $andar) {
                echo "Andar $andarIndex: |";
                
                foreach ($andar['qtdCasas'] as $casaIndex => $casa) {
                    echo "      --- Casa $casaIndex |";
                }
                
                echo "<hr>";

            }
        }
        echo "<br>";
        echo "<hr>";
    }
}

// Exemplo de uso:
$numeroRuas = 3;
$qtdPrediosPorRua = 2;
$qtdAndaresPorPredio = 3;
$qtdCasasPorAndar = 2;

$estrutura = gerarEstrutura($numeroRuas, $qtdPrediosPorRua, $qtdAndaresPorPredio, $qtdCasasPorAndar);
imprimirMatriz($estrutura);
