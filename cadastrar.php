<?php
session_start(); 
require("conexao.php"); 

if(isset($_POST['sendCadastro'])){ 
    $nome = $_POST['nome']; 
    $email = $_POST['email']; 
    $senha = $_POST['senha']; 
   
   

    $query = "INSERT INTO usuarios (nome, email, senha) VALUES ( :nome, :email, :senha)";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha); 
    $stmt->execute();

    header("Location: index.php?criado=sucesso"); 
    exit();
} else {
    header("Location: conta.php"); 
    exit();
}
?>