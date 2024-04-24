<?php 
    /**
    *Aqui está a ordem de precedência dos operadores lógicos no PHP, 
    *do mais alto para o mais baixo:
    *
    *   ! (NOT)
    *   && (AND)
    *   || (OR)
    *
    * OBS: podemos usar as variaveis reservadas(AND,OR,NOT), 
    * mas assim perdemos a ordem de precedência
    */
?>

<!-- AND (&&): Este operador retorna verdadeiro se todas as expressões booleanas 
que ele combina forem verdadeiras. -->

<?php 
    $idade = 20;
    if ($idade >= 18 && $idade <= 30) {
        echo "A idade está entre 18 e 30 anos.";
    }    
?>

<!-- OR (||): Este operador retorna verdadeiro se pelo menos uma 
das expressões booleanas que ele combina for verdadeira. -->

<?php 
    $cor = "vermelho";
    if ($cor == "vermelho" || $cor == "azul") {
        echo "A cor é vermelho ou azul.";
    }    
?>

<!-- NOT (!): Este operador inverte o valor de uma expressão booleana. 
Se a expressão era verdadeira, ela se torna falsa, e vice-versa. -->

<?php 
    $temperatura = 25;
    if (!($temperatura > 30)) {
        echo "A temperatura não está acima de 30 graus.";
    }    
?>

<!-- XOR (^): Este operador retorna verdadeiro se uma, e somente uma, 
das expressões booleanas que ele combina for verdadeira. -->

<?php 
    $tem_chave = true;
    $porta_aberta = true;
    
    if ($tem_chave ^ $porta_aberta) {
        echo "A porta está aberta, mas a chave está faltando, ou vice-versa.";
    }    
?>