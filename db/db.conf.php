<?php
// Carregar o autoloader do Composer
require_once __DIR__ . '/../vendor/autoload.php'; // Verifique o caminho

// Carregar as variáveis de ambiente do arquivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../'); // Verifique o caminho do seu .env
$dotenv->load();

// Acessar variáveis do .env
$db_host = $_ENV['DB_HOST'];
$db_name = $_ENV['DB_NAME'];
$db_user = $_ENV['DB_USER'];
$db_password = $_ENV['DB_PASSWORD'] ?? ''; // Caso a senha esteja vazia, usa uma string vazia

//echo "Banco de Dados Host: $db_host<br>";
//echo "Banco de Dados Usuário: $db_user<br>";
//echo "Senha do Banco de Dados: $db_password<br>";

// Tentativa de conexão ao banco de dados (MySQL)
try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
