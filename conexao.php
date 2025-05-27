<?php

$user = 'root'; 
$pass = ''; 
$dbname = 'erarich_store'; 
$host = 'localhost';

try{

    $pdo = new PDO ("mysql:host=$host; dbname=$dbname", $user, $pass );
    
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>