
<?php

require("conexao.php");

if(isset($_POST)){

    $email = $_POST['email'];
    $senha = $_POST['senha'];
   
    $query = "INSERT INTO usuarios (email, senha) VALUES ( '$email', '$senha')";


    $stmt = $pdo->prepare($query);
    $stmt->execute();

    header("Location: index.php?minha=conta");
}