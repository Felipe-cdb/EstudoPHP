<!-- https://www.php.net/manual/en/reserved.variables.request.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REQUEST Method Example</title>
</head>
<body>
    <h1>Formulário REQUEST</h1>
    <!-- Funciona com get ou Post -->
    <!-- <form method="get"> -->
    <form method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="age">Idade:</label>
        <input type="number" id="age" name="age" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <h1>Dados Recebidos via REQUEST</h1>
    <?php
    if (!empty($_REQUEST['name']) && !empty($_REQUEST['age'])) {
        $name = htmlspecialchars($_REQUEST['name']);
        $age = htmlspecialchars($_REQUEST['age']);

        echo "Nome: " . $name . "<br>";
        echo "Idade: " . $age . "<br>";
    } else {
        echo "Nenhum dado recebido.";
    }
    ?>
</body>
</html>
