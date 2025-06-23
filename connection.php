
<?php
// config/database.php
function getDBConnection() {
    // Variables de entorno de Railway
    $host = $_ENV['MYSQLHOST'] ?? 'localhost';
    $port = $_ENV['MYSQLPORT'] ?? '3306';
    $database = $_ENV['MYSQLDATABASE'] ?? 'adminMed';
    $username = $_ENV['MYSQLUSER'] ?? 'root';
    $password = $_ENV['MYSQLPASSWORD'] ?? 'rodme09*';
    
    try {
        $dsn = "mysql:host=$host;port=$port;dbname=$database;charset=utf8mb4";
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
}
?>