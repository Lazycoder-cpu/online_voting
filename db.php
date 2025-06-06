<?php
// Parse .env file manually
$env = parse_ini_file(__DIR__ . '/.env');

$db_host = $env['DB_HOST'] ?? 'localhost';
$db_user = $env['DB_USER'] ?? '';
$db_pass = $env['DB_PASS'] ?? '';
$db_name = $env['DB_NAME'] ?? '';

try {
    // Set DSN (Data Source Name)
    $dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4";

    // Create PDO instance with error mode exception
    $pdo = new PDO($dsn, $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);

   // echo "Connected successfully to the database '$db_name' using PDO as user '$db_user'.";

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
