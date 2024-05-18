<?php
// Inicia a sessão
session_start();

// Verifica se o usuário já está logado
if(isset($_SESSION['user_id'])) {
    echo "Bem-vindo de volta, Usuário #" . $_SESSION['user_id'] . "!<br>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    // Verifica se o formulário de login foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica as credenciais do usuário (exemplo simples)
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Aqui você faria a validação do usuário e senha no seu sistema
        // Vamos simular um usuário válido para este exemplo
        if($username === 'user' && $password === 'password') {
            // Define o ID do usuário na sessão
            $_SESSION['user_id'] = 1;

            // Redireciona para a página de boas-vindas
            header('Location: welcome.php');
            exit;
        } else {
            echo "Credenciais inválidas.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
