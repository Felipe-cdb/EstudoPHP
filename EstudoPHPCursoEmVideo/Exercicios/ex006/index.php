<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario retroativo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1=$_GET["valor1"] ?? 0;
        $valor2=$_GET["valor2"] ?? 0;
    ?>
    <main>
        <!-- <form action="index.php" method="get"> NÃO fazer assim por questões de segurança -->
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get"> 
            <label for="v1">Valor 1</label>
            <input type="number" name="valor1" id="idvalor1" value="<?php $valor1?>"> 
            <label for="v2">Valor 2</label>
            <input type="number" name="valor2" id="idvalor2" value="<?php $valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resposta:</h2>
        <?php 
            $soma = $valor1+$valor2;
            echo "SOMA = $soma";
        ?>
    </section>    
</body>
</html>