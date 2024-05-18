<?php
// Inicia a sessão
session_start();

// Verifica se o usuário está logado
if(!isset($_SESSION['user_id'])) {
    // Se não estiver logado, redireciona para a página de login
    header('Location: session.php');
    exit;
}

// Exibe uma mensagem de boas-vindas ao usuário
echo "Bem-vindo, Usuário #" . $_SESSION['user_id'] . "!<br>";

// Link para fazer logout
echo "<a href='logout.php'>Logout</a>";
?>
