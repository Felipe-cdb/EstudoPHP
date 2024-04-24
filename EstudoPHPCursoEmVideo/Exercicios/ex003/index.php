<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiposPrimitivos</title>
</head>
<body>
    <h1>Tipos Primitivos</h1>
    <?php 
        $nome = "Felipe";
        var_dump($nome); // função que retorna não somente o print, mas tbm o tipo da variavel/constante

        echo "<br>"; // quebra linha

        $array = [13, 13.5, -19, "Escrever", true, "true", 010];
        var_dump($array);

        echo "<br>"; // quebra linha

        //Força o tipo da variavel
        $numero = "132";
        var_dump($numero);
        echo "<br>"; // quebra linha
        $numero = (int) "132";
        var_dump($numero);

        //Como usar aspas duplas ou simple dentro das próprias aspas
        # Usa-se os escapes , nesse caso o escape \"
        echo "<br>"; // quebra linha
        echo "A seguir as \"AspasDuplas\" dentro das aspas Duplas \\ \\" . '  A seguir as \'AspasSimples\' dentro das aspas Simples';
        echo "<br>"; // quebra linha
        //Outro caso é misturar os dois tipos, assim não necessita dos escapes
        echo "<br>"; // quebra linha
        echo "A seguir as 'AspasSimples' dentro das aspas dupla";

    ?>
</body>
</html>