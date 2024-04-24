<!-- Inteiro (Integer ou int): Armazena números inteiros, positivos ou negativos, sem casas decimais. -->
<?php 
$idade = 20;
?>

<!-- Ponto Flutuante (Float ou Double): Armazena números decimais, também conhecidos como números de ponto flutuante. -->
<?php 
$preco = 10.99;
?>

<!-- String: Armazena uma sequência de caracteres, como texto ou números entre aspas simples ou duplas. -->
<?php 
$nome = "João";
?>

<!-- Booleano (Boolean): Armazena valores verdadeiro (true) ou falso (false), útil para expressar condições -->
<?php 
$ativo = true;
?>

<!-- Array: Armazena múltiplos valores em uma única variável, organizados em índices numéricos ou associativos. -->
<?php 
$cores = array("vermelho", 3, "azul");
$cores = ["vermelho", 3, "azul"];
$cores[] = ["vermelho", 3, "azul"];
?>

<!-- Objeto (Object): Armazena instâncias de classes, permitindo criar estruturas de dados complexas -->
<?php 
class Pessoa {
    public $nome;
    public $idade;
}

$pessoa1 = new Pessoa();
$pessoa1->nome = "Maria";
$pessoa1->idade = 30;
?>

<!-- NULL: Representa a ausência de valor. -->
<?php 
$valor = NULL;
?>

<!-- Resource: Um tipo especial usado para representar recursos externos, como conexões de banco de dados ou manipuladores de arquivos abertos. Normalmente, você não precisa lidar diretamente com esse tipo de variável, já que muitas funções internas do PHP que lidam com recursos retornam recursos diretamente. -->
<?php 
$arquivo = fopen("exemplo.txt", "r");
?>

<!-- Callback (Callable): Um tipo que pode ser usado para representar qualquer coisa que possa ser chamada de função, incluindo funções definidas pelo usuário, métodos de classe, objetos Closure e outros tipos. Isso é útil em contextos onde você precisa passar uma função como argumento para outra função -->
<?php 
function minhaFuncao($callback) {
    // Chama a função de retorno
    $callback();
}

minhaFuncao(function() {
    echo "Esta é uma função de retorno anônima.";
});
?>

<!-- CONVERSÕES -->

<!-- Conversão Implícita: Em muitos casos, o PHP realizará automaticamente a conversão de tipos para você, se necessário. Por exemplo, ao somar um número com uma string que contém um número, o PHP converterá automaticamente a string em um número. -->
<?php 
$numero = 10;
$texto = "20";
$soma = $numero + $texto; // O PHP converte automaticamente a string "20" em um número
echo $soma; // Saída: 30
?>

<!-- Conversão Explícita: Você também pode realizar conversões de tipos explicitamente usando funções ou operadores específicos. -->
<?php 
//Para Inteiro (Integer): Use a função (int) ou intval()
$texto = "123";
$inteiro = (int) $texto; // ou $inteiro = intval($texto);

//Para Ponto Flutuante (Float): Use a função (float) ou floatval()
$texto = "123.45";
$float = (float) $texto; // ou $float = floatval($texto);

//Para String: Use a função (string)
$numero = 123;
$texto = (string) $numero;

//Para Booleano (Boolean): Use a função boolval()
$texto = "true";
$booleano = boolval($texto); // Converte "true" para true, "false" para false
?>

<!-- Conversão Específica: Alguns tipos de variáveis podem ser convertidos para outros de maneira mais específica, usando funções específicas do PHP. Por exemplo, converter um array para um objeto ou vice-versa, usando json_decode() e json_encode() -->
<?php 
$array = array("chave" => "valor");
$objeto = (object) $array; // Converte array para objeto
$novo_array = (array) $objeto; // Converte objeto para array
?>