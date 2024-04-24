<!-- declarar uma função em PHP -->

<?php 
function nomeDaFuncao($parametro1, $parametro2, $parametroN) {
    // Corpo da função
    // Código que a função executa
};
?>

<!-- A função pode não ter paramentros ou os parametros podem receber valores padrão, caso nenhum paramentro seja passado -->

<?php 
function semParametro($parametro1, $parametro2, $parametroN) {
    // Corpo da função
    // Código que a função executa
};
function parametrosValorPadronizado($parametro1 = 0, $parametro2 =0) {
    // Corpo da função
    // Código que a função executa
};
?>

<!-- Exemplos de função -->
<?php 
function soma($a, $b) {
    $resultado = $a + $b;
    return $resultado;
}

function digaOla() {
    echo "Olá, mundo!";
}

function saudacao($nome) {
    echo "Olá, $nome!";
}

$resultado = soma(5, 3); // Chama a função soma com os argumentos 5 e 3
echo $resultado; // Saída: 8

digaOla(); // Chama a função digaOla
// Saída: Olá, mundo!

saudacao("João"); // Chama a função saudacao com o argumento "João"
// Saída: Olá, João!
?>

<!-- Existem Funções Nativas no PHP, podemos aprende-la na documentação na página oficial do php -->
<!-- Exemplo -->
<?php 
$dataHoje = date("d/m/Y");
?>
<!-- time() 
é uma função interna que retorna o número de segundos decorridos como um valor de tipo inteiro. Isso é frequentemente usado para obter o timestamp atual, que é uma representação numérica da data e hora atual.

Aqui está um exemplo simples de como você pode usar a função time(): -->
<?php 
$timestamp = time();
echo $timestamp;
?>