<!-- As principais estruturas de controle condicionais em PHP são 
if, else, elseif (ou else if) e switch.  -->

<!-- if/else -->
<?php
$idade = 18;

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
?>

<!-- elseif (ou else if) -->
<?php
$hora = date("H");

if ($hora < "12") {
    echo "Bom dia!";
} elseif ($hora < "18") {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}
?>

<!-- switch -->
<?php
$cor = "vermelho";

switch ($cor) {
    case "vermelho":
        echo "Sua cor favorita é vermelho!";
        break;
    case "azul":
        echo "Sua cor favorita é azul!";
        break;
    case "verde":
        echo "Sua cor favorita é verde!";
        break;
    default:
        echo "Sua cor favorita não é vermelho, azul ou verde!";
}
?>

<!-- break e continue são utilizadas para controlar o fluxo de execução dentro de loops (for, while, do-while) e da estrutura switch  -->

<!-- break:
A palavra-chave break é usada para sair de um loop ou de uma estrutura switch -->
<?php 
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
    if ($i == 5) {
        break; // Sai do loop quando $i for igual a 5
    }
}
?>

<!-- continue:
A palavra-chave continue é usada para pular a execução da iteração atual em um loop e continuar com a próxima iteração. -->

<?php 
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue; // Pula a iteração atual quando $i for igual a 3
    }
    echo $i . "<br>";
}
// Saida: 1 2 4 5
?>

<!-- estrutura ternária, que é uma é uma forma compacta de expressar condições simples -->

<?php
$idade = 20;
$status = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $status;
?>

<!-- isset() -->
<!-- embora não seja uma estrutura condicional em si, é importante mencionar a função isset() em PHP, que é comumente usada para verificar se uma variável está definida ou não. -->

<?php
$nome = "João";

if (isset($nome)) {
    echo "A variável \$nome está definida.";
} else {
    echo "A variável \$nome não está definida.";
}
?>
