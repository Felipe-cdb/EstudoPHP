<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Nome não encontrado";
            $sobrenome = $_GET["sobrenome"] ?? "Sobrenome não encontrado";
            echo "<p>É um prazer conhecer você,<strong> $nome $sobrenome </strong></p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
    </main>
    
</body>
</html>