<?php
// Database connection using PDO
$host = 'localhost';
$db = 'image_stack_db';
$user = 'root'; // Default user for XAMPP
$pass = ''; // Default password for XAMPP

$dsn = "mysql:host=$host;dbname=$db;charset=utf8";

try {
    $conn = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
