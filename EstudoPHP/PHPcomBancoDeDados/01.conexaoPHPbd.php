<!-- https://www.php.net/manual/pt_BR/pdo.connections.php -->
<!-- Criar a Conexão com o Banco de Dados -->
<?php
$host = '127.0.0.1';   // ou $host = 'localhost'
$db = 'estudophp';     // $db   = 'meu_banco_de_dados';
$user = 'root'; // $user = 'meu_usuario'; // $user: O nome de usuário para autenticar no banco de dados.
$pass = ''; // $pass = 'minha_senha'; // $pass: A senha correspondente ao nome de usuário fornecido.
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
// mysql: Especifica o driver que está sendo usado. Para MySQL, é mysql.
// host: O endereço do servidor de banco de dados. Pode ser um endereço IP (127.0.0.1) ou um nome de domínio (localhost).
// dbname: O nome do banco de dados ao qual você deseja se conectar.
// charset: O conjunto de caracteres a ser usado para a comunicação com o banco de dados. utf8mb4 é recomendado para suportar uma ampla gama de caracteres, incluindo emojis.

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lança exceções em caso de erro
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Modo de busca padrão como array associativo
    PDO::ATTR_EMULATE_PREPARES   => false, // Desativa a emulação de consultas preparadas
];
// $options: Um array de opções que personalizam o comportamento da conexão PDO. Ao fim do documento tem uma descrição mais detalhada

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    //$pdo = new PDO('mysql:host=localhost;dbname=estudophp','root', '');
    echo "Conexão bem-sucedida!<br>";
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
?>

<!-- Consulta Simples para testar conexão -->
<?php
$stmt = $pdo->query('SELECT * FROM clientes where id=1');
while ($row = $stmt->fetch()) {
    echo "Bem-vindo<br>" . $row['nome'] . "  " . $row['sobrenome'] . "<br>";
}
?>


<!-- Fechar a Conexão -->
<!-- A conexão com o banco de dados é fechada automaticamente quando o script termina. No entanto, você pode fechar explicitamente a conexão atribuindo null à variável PDO. -->
<?php
$pdo = null;
?>



<!-- Opções de Conexão PDO -->
<!-- 
As opções de conexão fornecidas através do parâmetro $options permitem configurar várias características da conexão. Elas são passadas como um array associativo.

Aqui estão algumas opções comumente usadas:

PDO::ATTR_ERRMODE: Define o modo de erro. Pode ser configurado para:
    PDO::ERRMODE_SILENT: Apenas define códigos de erro.
    PDO::ERRMODE_WARNING: Emite warnings.
    PDO::ERRMODE_EXCEPTION: Lança exceções. (Recomendado para melhor tratamento de erros)

PDO::ATTR_DEFAULT_FETCH_MODE: Define o modo de busca padrão. Pode ser configurado para:
    PDO::FETCH_ASSOC: Retorna um array associativo.
    PDO::FETCH_NUM: Retorna um array numérico.
    PDO::FETCH_BOTH: Retorna ambos os tipos de array.
    PDO::FETCH_OBJ: Retorna um objeto anônimo com nomes de propriedades que correspondem aos nomes das colunas retornadas.

PDO::ATTR_EMULATE_PREPARES: Ativa ou desativa a emulação de consultas preparadas. Pode ser configurado como true ou false.
    true: Emula as consultas preparadas no cliente.
    false: Usa as consultas preparadas nativas do banco de dados.

PDO::MYSQL_ATTR_INIT_COMMAND: Executa uma instrução SQL inicial ao estabelecer a conexão. Útil para configurar coisas como o time zone ou modos SQL.
 -->