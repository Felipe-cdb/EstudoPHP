<?php
require_once "phpqrcode/qrlib.php";

// Dados do produto
$nomeProduto = "Sabão";
$descricaoProduto = "Descrição do Produto";
$precoProduto = "3.8";

// Endereço de entrega
$rua = "Rua 1";
$numero = "123";

// Concatenação das informações do produto e endereço de entrega
$informacoes = "Produto: $nomeProduto\nDescrição: $descricaoProduto\nPreço: $precoProduto\nEntregar em: $rua, $numero";

echo $informacoes;
// Nome do arquivo QR Code gerado
$arquivoQR = "assets/qrcode.png";

// Gerar o QR Code
QRcode::png($informacoes, $arquivoQR);
