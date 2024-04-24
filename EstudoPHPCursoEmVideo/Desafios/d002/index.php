<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1> Desafio 02 - Gerador Aléatorios</h1>        
    </header>
    <main>
            <p>Gerando Números Aleatórios</p>
            <label for="text">(!)Clique no botão e gere um número aléatorio de 0 a 100</label>
            <p> </p>
            <?php 
                // random_int é para números aleátorios criptografadamente seguros - Função mais lenta
                // echo "Seu número aléatorio é: <strong>" . random_int(0, 100) . "</strong>";
                // mt_rand é para números aleátorios de uso comum - Função mais rápida
                echo "Seu número aléatorio é: <strong>" . mt_rand(0, 100) . "</strong>";
            ?>
            <button onclick="javascript:document.location.reload()">&#x1F504; Gerar</button>
    </main>
    
</body>
</html>