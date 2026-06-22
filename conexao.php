<?php

$usuario = 'root'; // Geralmente é root
$senha = 'Kaio1412'; // Coloque aqui a senha que você usa para entrar no Workbench
$dbname = 'gerartxt'; // Nome do banco que criamos no Workbench
$host = 'localhost';
$port = 3306; // Verifique no Workbench se a sua porta é 3306 ou 3307

try {
    $pdo = new PDO("mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro ao conectar ao banco de dados: ' . htmlspecialchars($e->getMessage());
    exit;
}
