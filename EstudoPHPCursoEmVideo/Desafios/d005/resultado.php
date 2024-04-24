<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sulcessor e Antecessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $num = $_GET["numero"] ?? 0;
            echo "<h1>Analise do numero $num:</h1>";
            echo "<p>Parte <strong>Inteira</strong> é: " . (int)$num . "</p>";
            echo "<p>Parte <strong>Quebrada</strong> é: " . ($num-((int)$num)) . "</p>";        
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
</main>
    
</body>
</html>