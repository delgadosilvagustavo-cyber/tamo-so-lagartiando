<?php 

$usuario = 'root';
$senha = 'root';
$dbname = 'gerartxt';
$host = 'localhost:3306';

try 
{
    $pdo = new PDO("myslq:host=$host;dbname=$dbname", $usuario, $senha);
}
catch(PDOException $e)
{
    echo $e->getMessage();
}