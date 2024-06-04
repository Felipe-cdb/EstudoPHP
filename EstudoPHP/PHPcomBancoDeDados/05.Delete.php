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
	$sql = 'DELETE FROM clientes WHERE id = :id';
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['id' => 6]);
	echo "cliente excluído com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao inserir dados: " . $e->getMessage();
} finally {
    // Fecha a conexão explicitamente (opcional, pois o PDO destrói a conexão ao final do script)
    $pdo = null;
}
?>