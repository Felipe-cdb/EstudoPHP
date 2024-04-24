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
            echo "<h1>Resultado do numero $num</h1>";
            echo "<p>Seu <strong>Antecessor</strong> é: " . ($num-1) . "</p>";
            echo "<p>Seu <strong>Sucessor</strong> é: " . ($num+1) . "</p>";        
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
        <!-- Outra maneira de voltar é usando o local especifico da navegação -->
        <!-- <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button> -->
</main>
    
</body>
</html>