<?php
session_start(); 
require("conexao.php");

if(isset($_POST['sendEntrar'])){ 
    $email = $_POST['email']; 
    $senha = $_POST['senha']; 

    $query = "SELECT id, nome, email, senha FROM usuarios WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $senha === $user['senha']) { 
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['nome'];
        $_SESSION['user_email'] = $user['email'];
        header("Location: dashboard.php"); 
        exit();
    } else {
        header("Location: conta.php?erro=login"); 
        exit();
    }
} else {
    header("Location: conta.php"); 
    exit();
}
?>