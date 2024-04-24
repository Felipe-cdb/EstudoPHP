<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $dataInicio = date("m-d-Y", strtotime("-7 days"));
            $dataFim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $dataInicio . '\'&@dataFinalCotacao=\'' . $dataFim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
            $dados = json_decode(file_get_contents($url),true);
            $atualDolar = $dados["value"][0]["cotacaoCompra"];
            $atualData = $dados["value"][0]["dataHoraCotacao"];
    
            $valor = $_GET["valor"] ?? "Valor não encontrado";
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>O valor em reais é <strong>" . numfmt_format_currency($padrao, $valor, "BRL") . "</strong></p>";
            echo "<p>O valor em dolares é <strong>" .  numfmt_format_currency($padrao, $valor/5.12, "USD") . "</strong></p>";   
            echo "<label for=\"text\">Valor da contação segundo o site do BACEN <br> data da cotação: $atualData</label>";  
        ?>
        <br>          
        <button onclick="javascript:history.go(-1)">&#x2B05; Converter Outro Valor</button>
    </main>    
</body>
</html>