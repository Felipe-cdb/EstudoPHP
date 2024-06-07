<!-- execute esse script no phpmyadmin para criar o banco e a tabela -->
<!-- 
CREATE DATABASE IF NOT EXISTS exemplo_db;

USE exemplo_db;

CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT,
    data_pedido DATE,
    valor DECIMAL(10, 2),
    FOREIGN KEY (cliente_id) REFERENCES clientes(id)
);
 -->

<?php
// Configuração do banco de dados
echo("<h1>Conectando Banco de Dados</h1>");
$host = '127.0.0.1';
$db = 'exemplo_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Conexão bem-sucedida!<br><br>";

    echo("<h1>Inserir dados no Banco:</h1><br>");
    // Inserir dados na tabela clientes
    $clientes = [
        ['nome' => 'João', 'sobrenome' => 'Silva'],
        ['nome' => 'Maria', 'sobrenome' => 'Fernandes'],
        ['nome' => 'Pedro', 'sobrenome' => 'Santos'],
        ['nome' => 'Ana', 'sobrenome' => 'Oliveira'],
    ];

    $sql = 'INSERT INTO clientes (nome, sobrenome) VALUES (:nome, :sobrenome)';
    $stmt = $pdo->prepare($sql);

    foreach ($clientes as $cliente) {
        $stmt->execute(['nome' => $cliente['nome'], 'sobrenome' => $cliente['sobrenome']]);
    }
    echo "Clientes inseridos com sucesso!<br>";

    // Inserir dados na tabela pedidos
    $pedidos = [
        ['cliente_id' => 1, 'data_pedido' => '2024-05-01', 'valor' => 25.50],
        ['cliente_id' => 1, 'data_pedido' => '2024-05-10', 'valor' => 15.75],
        ['cliente_id' => 2, 'data_pedido' => '2024-05-15', 'valor' => 50.00],
        ['cliente_id' => 3, 'data_pedido' => '2024-05-20', 'valor' => 75.25],
    ];

    $sql = 'INSERT INTO pedidos (cliente_id, data_pedido, valor) VALUES (:cliente_id, :data_pedido, :valor)';
    $stmt = $pdo->prepare($sql);

    foreach ($pedidos as $pedido) {
        $stmt->execute(['cliente_id' => $pedido['cliente_id'], 'data_pedido' => $pedido['data_pedido'], 'valor' => $pedido['valor']]);
    }
    echo "Pedidos inseridos com sucesso!<br>";


    // Exemplo de SELECT simples
    // Realiza uma consulta simples para buscar todos os registros da tabela 
    echo("<h1>Todos os Clientes:</h1><br>");
    $stmt = $pdo->query("SELECT * FROM clientes");
    while ($row = $stmt->fetch()) {
        echo $row['nome'] . ' ' . $row['sobrenome'] . '<br>';
    }

    // Exemplo de INNER JOIN
    // Junta registros das tabelas clientes e pedidos onde há correspondência em cliente_id.
    echo("<br><h1>INNER JOIN</h1><br>");
    echo("<br><h2>Pedidos com INNER JOIN:</h2><br>");
    $sql = "SELECT clientes.nome, clientes.sobrenome, pedidos.valor 
            FROM clientes 
            INNER JOIN pedidos ON clientes.id = pedidos.cliente_id";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
        echo $row['nome'] . ' ' . $row['sobrenome'] . ': ' . $row['valor'] . '<br>';
    }

    // Exemplo de LEFT JOIN
    // Junta registros da tabela clientes com pedidos, incluindo clientes que não têm pedidos.
    echo("<br><h1>LEFT JOIN</h1><br>");
    echo("<br><h2>Pedidos com LEFT JOIN (Clientes sem pedidos também):</h2><br>");
    $sql = "SELECT clientes.nome, clientes.sobrenome, pedidos.valor 
            FROM clientes 
            LEFT JOIN pedidos ON clientes.id = pedidos.cliente_id";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
        echo $row['nome'] . ' ' . $row['sobrenome'] . ': ' . ($row['valor'] ?? 'Sem Pedido') . '<br>';
    }

    // Exemplo de RIGHT JOIN
    // Junta registros da tabela pedidos com clientes, incluindo pedidos que não têm clientes correspondentes (embora raro).
    echo("<br><h1>RIGHT JOIN</h1><br>");
    echo("<br><h2>Pedidos com RIGHT JOIN (Pedidos sem clientes também):</h2><br>");
    $sql = "SELECT clientes.nome, clientes.sobrenome, pedidos.valor 
            FROM clientes 
            RIGHT JOIN pedidos ON clientes.id = pedidos.cliente_id";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
        echo ($row['nome'] ?? 'Sem Cliente') . ' ' . ($row['sobrenome'] ?? '') . ': ' . $row['valor'] . '<br>';
    }

    // Exemplo de GROUP BY e COUNT
    // Agrupa os registros por nome e conta o número de pedidos para cada cliente.
    echo("<br><h1>GROUP BY e COUNT</h1><br>");
    echo("<br><h2>Contagem de Pedidos por Cliente:</h2><br>");
    $sql = "SELECT clientes.nome, COUNT(pedidos.id) AS num_pedidos
            FROM clientes 
            LEFT JOIN pedidos ON clientes.id = pedidos.cliente_id
            GROUP BY clientes.nome";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
        echo $row['nome'] . ': ' . $row['num_pedidos'] . '<br>';
    }

    // Exemplo de ORDER BY
    // Ordena os registros da tabela pedidos pelo valor de forma descendente.
    echo("<br><h1>ORDER BY</h1><br>");
    echo("<br><h2>Pedidos Ordenados pelo Valor (DESC):</h2><br>");
    $sql = "SELECT * FROM pedidos ORDER BY valor DESC";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
        echo 'Pedido ID: ' . $row['id'] . ' - Valor: ' . $row['valor'] . '<br>';
    }

    // Exemplo de LIMIT
    // Limita os resultados para mostrar apenas os top 2 pedidos pelo valor.
    echo("<br><h1>LIMIT</h1><br>");
    echo("<br><h2>Top 2 Pedidos pelo Valor:</h2><br>");
    $sql = "SELECT * FROM pedidos ORDER BY valor DESC LIMIT 2";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
        echo 'Pedido ID: ' . $row['id'] . ' - Valor: ' . $row['valor'] . '<br>';
    }

    // Exemplo de LIKE
    // Filtra clientes cujos nomes começam com 'J'.
    echo("<br><h1>LIKE</h1><br>");
    echo("<br><h2>Clientes cujos nomes começam com 'J':</h2><br>");
    $sql = "SELECT * FROM clientes WHERE nome LIKE 'J%'";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
        echo $row['nome'] . ' ' . $row['sobrenome'] . '<br>';
    }

    // Exemplo de IN
    // Seleciona registros da tabela clientes onde o ID é 1 ou 2.
    echo("<br><h1>IN</h1><br>");
    echo("<br><h2>Clientes com IDs 1 e 2:</h2><br>");
    $sql = "SELECT * FROM clientes WHERE id IN (1, 2)";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
        echo $row['nome'] . ' ' . $row['sobrenome'] . '<br>';
    }

    // Exemplo de BETWEEN
    // Seleciona pedidos cujo valor está entre 10 e 50.
    echo("<br><h1>BETWEEN</h1><br>");
    echo("<br><h2>Pedidos com valores entre 10 e 50:</h2><br>");
    $sql = "SELECT * FROM pedidos WHERE valor BETWEEN 10 AND 50";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
        echo 'Pedido ID: ' . $row['id'] . ' - Valor: ' . $row['valor'] . '<br>';
    }

} catch (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
}
?>