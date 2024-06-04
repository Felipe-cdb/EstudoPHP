<!-- Criar a Conexão com o Banco de Dados -->
<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=estudophp','root', '');
    echo "Conexão bem-sucedida!<br>";
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
?>

<!-- Atualizar Dados -->
<?php
try {
    $sql = 'UPDATE clientes SET nome = :nome WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nome' => 'João', 'id' => 3]);
    echo "Cliente atualizado com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao inserir dados: " . $e->getMessage();
} finally {
    // Fecha a conexão explicitamente (opcional, pois o PDO destrói a conexão ao final do script)
    $pdo = null;
}
?>