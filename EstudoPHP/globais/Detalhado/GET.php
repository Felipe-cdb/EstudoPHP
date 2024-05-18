<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Method Example</title>
</head>
<body>
    <h1>Formulário GET</h1>
    <form method="get">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="age">Idade:</label>
        <input type="number" id="age" name="age" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <h1>Dados Recebidos via GET</h1>
    <?php
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = htmlspecialchars($_GET['name']);
        $age = htmlspecialchars($_GET['age']);

        echo "Nome: " . $name . "<br>";
        echo "Idade: " . $age . "<br>";
    } else {
        echo "Nenhum dado recebido.";
    }
    ?>
</body>
</html>
