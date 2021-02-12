<?php

$host = 'localhost';
$usuario = 'root';
$senha = 'root';
$banco = 'root';
$dsn = "mysql:host={$host};port=3306;dbname={$banco}";

try 
{
    
    $pdo = new PDO($dsn, $usuario, $senha);
} 
catch (PDOException $e) 
{
    
    die($e->getMessage());
}