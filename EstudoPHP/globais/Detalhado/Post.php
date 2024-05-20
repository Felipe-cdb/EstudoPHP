<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Method Example</title>
</head>
<body>
    <h1>Formulário POST</h1>
    <form method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="age">Idade:</label>
        <input type="number" id="age" name="age" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <h1>Dados Recebidos via POST</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name']) && isset($_POST['age'])) {
            $name = htmlspecialchars($_POST['name']);
            $age = htmlspecialchars($_POST['age']);

            echo "Nome: " . $name . "<br>";
            echo "Idade: " . $age . "<br>";
        } else {
            echo "Nenhum dado recebido.";
        }
    }
    ?>
</body>
</html>
