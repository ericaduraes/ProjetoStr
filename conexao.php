<?php

$user = 'root'; // Nome do Usuário
$pass = ''; //Senha
$dbname = 'erarich_store'; //Nome do banco de dados
$host = 'localhost';

try{

    $pdo = new PDO ("mysql:host=$host; dbname=$dbname", $user, $pass );
    
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>