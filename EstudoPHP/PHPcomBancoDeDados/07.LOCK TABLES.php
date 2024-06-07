<!-- LOCK TABLES -->
<!-- O comando LOCK TABLES no MySQL é utilizado para bloquear tabelas em uma sessão específica, impedindo que outras sessões façam modificações ou, dependendo do tipo de bloqueio, até mesmo leituras nas tabelas bloqueadas. Esse comando é útil para garantir a integridade dos dados quando você precisa realizar operações críticas que não devem ser interrompidas ou afetadas por outras transações. -->

<!-- 
Tipos de Bloqueios
    READ LOCK: Permite que outras sessões leiam a tabela, mas impede que façam alterações.
    WRITE LOCK: Impede que outras sessões leiam ou modifiquem a tabela.
-->

<?php
// Configuração do banco de dados
$host = '127.0.0.1';
$db = 'exemplo_db';
$user = 'seu_usuario';
$pass = 'sua_senha';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    // Conectar ao banco de dados
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Conexão bem-sucedida!<br>";

    // Iniciar uma transação
    $pdo->beginTransaction();

    // Bloquear a tabela 'clientes' para leitura
    $sql = "LOCK TABLES clientes READ";
    $pdo->exec($sql);
    echo "Tabela 'clientes' bloqueada para leitura.<br>";

    // Realizar uma operação de leitura na tabela 'clientes'
    $stmt = $pdo->query("SELECT * FROM clientes");
    echo "Dados da tabela 'clientes':<br>";
    while ($row = $stmt->fetch()) {
        echo $row['nome'] . ' ' . $row['sobrenome'] . '<br>';
    }

    // Desbloquear as tabelas
    $sql = "UNLOCK TABLES";
    $pdo->exec($sql);
    echo "Tabelas desbloqueadas.<br>";

    // Confirmar a transação
    $pdo->commit();

} catch (PDOException $e) {
    // Reverter a transação em caso de erro
    $pdo->rollBack();
    echo 'Erro: ' . $e->getMessage();
}
?>


<!-- 
Início de uma Transação:
Inicia uma transação para garantir que todas as operações subsequentes sejam atômicas.

Bloqueio da Tabela:
Usa o comando LOCK TABLES clientes READ para bloquear a tabela clientes para operações de leitura.

Operação de Leitura:
Realiza uma consulta de leitura na tabela clientes enquanto ela está bloqueada.

Desbloqueio das Tabelas:
Usa o comando UNLOCK TABLES para liberar o bloqueio em todas as tabelas.

Confirmação da Transação:
Confirma a transação para aplicar todas as operações realizadas durante a transação.
 -->

 <!-- 
Bloqueio Exclusivo: Quando uma tabela está bloqueada, outras sessões não podem modificar ou, dependendo do tipo de bloqueio, nem mesmo ler os dados da tabela.

Desempenho: O uso de LOCK TABLES pode afetar o desempenho, especialmente em um ambiente de alta concorrência. Use bloqueios somente quando necessário.

Desbloqueio: Sempre desbloqueie as tabelas após completar as operações críticas para evitar bloqueios prolongados que possam impactar outras transações.
-->