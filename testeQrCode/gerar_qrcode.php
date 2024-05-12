<?php
require_once "phpqrcode/qrlib.php";

// Dados do produto
$nomeProduto = "Nome do Produto";
$descricaoProduto = "Descrição do Produto";
$precoProduto = "Preço do Produto";

// Endereço de entrega
$rua = "Nome da Rua";
$numero = "Número da Casa";

// Concatenação das informações do produto e endereço de entrega
$informacoes = "Produto: $nomeProduto\nDescrição: $descricaoProduto\nPreço: $precoProduto\nEntregar em: $rua, $numero";

echo $informacoes;
// Nome do arquivo QR Code gerado
$arquivoQR = "assets/qrcode.png";

// Gerar o QR Code
QRcode::png($informacoes, $arquivoQR);
