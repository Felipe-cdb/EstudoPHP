<!-- https://www.php.net/manual/en/reserved.variables.session.php -->
<?php
// Inicia a sessão
session_start();

// Limpa todas as variáveis de sessão
session_unset();

// Destroi a sessão
session_destroy();

// Redireciona o usuário para a página de login
header('Location: session.php');
exit;
?>
