<?php

class GeradorEstoque
{
    private $estruturaEstoque = array();

    public function gerarEstrutura()
    {
        $this->estruturaEstoque = [
            'rua 1' => [
                'predio 1' => [
                    'andar 1' => [
                        'apartamento 1' => [
                            'cod_prod' => '1452',
                            'lote' => '1234',
                            'qtd_max' => '120',
                            'qtd_lote_disponivel' => '100'
                        ],
                        'apartamento 2' => [
                            'cod_prod' => '1453',
                            'lote' => '1234',
                            'qtd_max' => '120',
                            'qtd_lote_disponivel' => '100'
                        ],
                    ],
                    'andar 2' => [
                        'apartamento 1' => [
                            'cod_prod' => '1452',
                            'lote' => '1234',
                            'qtd_max' => '120',
                            'qtd_lote_disponivel' => '100'
                        ],
                        'apartamento 2' => [
                            'cod_prod' => '1453',
                            'lote' => '1234',
                            'qtd_max' => '120',
                            'qtd_lote_disponivel' => '100'
                        ],
                    ],
                ],
                'predio 2' => [
                    'andar 1' => [
                        'apartamento 1' => [
                            'cod_prod' => '1452',
                            'lote' => '1234',
                            'qtd_max' => '120',
                            'qtd_lote_disponivel' => '100'
                        ],
                        'apartamento 2' => [
                            'cod_prod' => '1453',
                            'lote' => '1234',
                            'qtd_max' => '120',
                            'qtd_lote_disponivel' => '100'
                        ],
                    ],
                    'andar 2' => [
                        'apartamento 1' => [
                            'cod_prod' => '1452',
                            'lote' => '1234',
                            'qtd_max' => '120',
                            'qtd_lote_disponivel' => '100'
                        ],
                        'apartamento 2' => [
                            'cod_prod' => '1453',
                            'lote' => '1234',
                            'qtd_max' => '120',
                            'qtd_lote_disponivel' => '100'
                        ],
                    ],
                ],
            ],
        ];
    }

    public function adicioneEstrutura($rua, $predio, $andar, $apartamento = [])
    {
        array_push($this->estruturaEstoque[$rua][$predio][$andar], $apartamento);
    }

    public function getEstruturaEstoque()
    {
        foreach ($this->estruturaEstoque as $rua => $predio) {
            echo "----------------------------------------- <br>";
            echo "--------------" . $rua . "-------------------- <br>";
            echo "----------------------------------------- <br> <br>";

            foreach ($predio as $nomePredio => $andares) {
                echo "--------------" . $nomePredio . "-------------------- <br>";
                echo "----------------------------------------- <br>";

                foreach ($andares as $nomeApartamento => $apartamentos) {
                    echo "$nomeApartamento ---| ";

                    foreach ($apartamentos as $apartamento) {
                        echo $apartamento['cod_prod'] . " | ";
                        // exit;   
                    }
                    echo "<br>----------------------------------------- <br>";
                }
            }
        }
    }
}


$geradorEstoque = new GeradorEstoque();
$geradorEstoque->gerarEstrutura();
$geradorEstoque->getEstruturaEstoque();

$newPosition = [
    'cod_prod' => '1458',
    'lote' => '1234',
    'qtd_max' => '120',
    'qtd_lote_disponivel' => '100'
];
echo "-------- Após adicionar ------- <br>";

$geradorEstoque->adicioneEstrutura('rua 1', 'predio 1', 'andar 1', $newPosition);

$geradorEstoque->getEstruturaEstoque();

