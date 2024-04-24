<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converção</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $valor = $_GET["valor"] ?? 0;
            // echo "<p>O valor em reais é <strong>R$ " . number_format($valor,2, ",",".") . "</strong></p>";
            // echo "<p>O valor em dolares é <strong>US$" .  number_format(($valor/5.12),2,",",".") . "</strong></p>";     
            # Usando a biblioteca interna do PHP, Biblioteca intl, ela deve ser ativada no php.ini            
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);  
            echo "<p>O valor em reais é <strong>" . numfmt_format_currency($padrao, $valor, "BRL") . "</strong></p>";
            echo "<p>O valor em dolares é <strong>" .  numfmt_format_currency($padrao, $valor/5.12, "USD") . "</strong></p>";
        ?>
        <br><br>
        <label for="text">Valor estatico em 5,12</label> 
        <br>          
        <button onclick="javascript:history.go(-1)">&#x2B05; Converter Outro Valor</button>
    </main>    
</body>
</html>