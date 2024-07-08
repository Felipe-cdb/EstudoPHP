<!-- https://www.php.net/manual/pt_BR/book.pdo.php -->
<!-- Criar a Conexão com o Banco de Dados -->
<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=estudophp','root', '');
    echo "Conexão bem-sucedida!<br>";
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
?>

<!-- Exemplo de uso da conexão para executar uma consulta -->
<?php
try {
    $stmt = $pdo->query('SELECT nome, sobrenome FROM clientes');
    while ($row = $stmt->fetch()) {
        echo "Bem-vindo<br>" . $row['nome'] . "  " . $row['sobrenome'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Erro na consulta: " . $e->getMessage();
} finally {
    // Fecha a conexão explicitamente (opcional, pois o PDO destrói a conexão ao final do script)
    $pdo = null;
}
?>