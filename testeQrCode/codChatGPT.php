<?php
// Incluir a biblioteca PHP QR Code
require "phpqrcode/qrlib.php";

// Dados para catalogar o QR Code
$rua = "Rua 1";
$predio = "Prédio A";
$apartamento = "101"; // Número do apartamento/palete

// Montar os dados que serão codificados no QR Code
$data = "Rua: $rua, Prédio: $predio, Apartamento: $apartamento";

// Caminho para salvar o QR Code gerado
$filename = "qrcodes/apartamento_$apartamento.png"; // Salvar cada QR Code com o número do apartamento

// Tamanho e margem do QR Code
$size = 10;
$margin = 2;

// Gerar o QR Code
$errorCorrectionLevel = 'H'; // Nível de correção de erro
$matrixPointSize = 4; // Tamanho da matriz do QR Code

try {
    QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, $margin);
    echo '<img src="'.$filename.'" />';
} catch (Exception $e) {
    echo 'Ocorreu um erro ao gerar o QR Code: ' . $e->getMessage();
}
?>