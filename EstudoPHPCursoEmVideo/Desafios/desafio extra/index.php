<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1> Desafio Extra - Números aléatoria para Loteria </h1>        
    </header>
    <section>
        <form action="index.php" method="get">
            <p>Gerando Números Aleatórios para apostas da lotéria</p>
            <label for="text"><strong>6</strong> números de <strong>1 a 60</strong> serão gerados aléatoriamente</label>
            <p> </p>

            <!-- PRECISO DE UMA CONDIÇÃO para Não sortear numeros repetidos -->
            <?php
                echo "Seus números são: <strong>" . mt_rand(1, 60) . " , " . mt_rand(1, 60) . " , " . mt_rand(1, 60) . " , " . mt_rand(1, 60) . " , " . mt_rand(1, 60) . " , " . mt_rand(1, 60) . "</strong>";
            ?>
            <input type="submit" value="Boa Sorte!!">
        </form>        
    </section>
    
</body>
</html>