<?php

require_once('config/conn.php');

$id = (int) $_GET['id'];

$stmt = $pdo->prepare('SELECT conteudo, tipo FROM fotos WHERE id = :id');
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

if ($stmt->execute())
{
    $foto = $stmt->fetchObject();
    
    if ($foto != null)
    {
      
        header('Content-Type: '. $foto->tipo);
    
        echo $foto->conteudo;
    }
}