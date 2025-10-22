<?php

$dsn = "mysql:host=localhost;dbname=car;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_TIMEOUT => 5
];

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword, $options);
} catch (PDOException $e) {
    error_log("Error: " . $e->getMessage());
    exit;
}
