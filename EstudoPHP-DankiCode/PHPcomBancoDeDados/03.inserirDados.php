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

<!-- Inserir Dados -->
<?php
try {
    // Método 1: Usando Parâmetros Nomeados - vantagem em legibilidade e evitar erros
    $sql = 'INSERT INTO clientes (nome, sobrenome) VALUES (:nome, :sobrenome)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nome' => 'João', 'sobrenome' => 'Cadu Kando']);
    echo "Novo cliente inserido com sucesso!";
    //ou
    // Método 2: Usando Marcadores de Posicionamento(?) - vantagem em simplicidade
    // $nome='Marco';
    // $sobrenome='Polo';
    // $sql = $pdo->prepare("INSERT INTO `clientes` (nome, sobrenome) VALUES (?, ?)");
    // if ($sql->execute(array($nome,$sobrenome))) {
    //     echo "Novo cliente inserido com sucesso!";
    // }
} catch (PDOException $e) {
    echo "Erro ao inserir dados: " . $e->getMessage();
} finally {
    // Fecha a conexão explicitamente (opcional, pois o PDO destrói a conexão ao final do script)
    $pdo = null;
}
?>


