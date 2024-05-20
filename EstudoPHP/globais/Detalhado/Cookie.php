<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>
    <h1>Cookie Example</h1>

    <?php
    // Definindo um cookie com o nome 'user' e o valor 'John' com validade de 1 hora
    setcookie('user', 'John', time() + 3600*60, '/');

    // Usamos a função setcookie() para definir um cookie. Os parâmetros são:
    //     - Nome do cookie.
    //     - Valor do cookie.
    //     - Tempo de expiração (calculado com a função time() para definir uma hora no futuro).
    //     - Caminho onde o cookie estará disponível ('/' significa disponível em todo o site).

    // Verificando se o cookie 'user' está definido
    if(isset($_COOKIE['user'])) {
        echo "Olá, " . htmlspecialchars($_COOKIE['user']) . "!<br>";
    } else {
        echo "Cookie 'user' não encontrado.<br>";
    }

    // Excluindo o cookie 'user' (definindo seu tempo de expiração para um valor passado)
    setcookie('user', '', time() - 3600, '/');

    // Verificando se o cookie 'user' foi excluído
    if(isset($_COOKIE['user'])) {
        echo "Cookie 'user' não foi excluído.";
    } else {
        echo "Cookie 'user' foi excluído.";
    }
    ?>
</body>
</html>
