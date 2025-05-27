<?php
session_start(); 
require_once('conexao.php'); 


if (!isset($_SESSION['user_id'])) {
    header("Location: conta.php"); 
    exit(); 
}

$user_id = $_SESSION['user_id']; 
$user_name = $_SESSION['user_name']; 

?>
<?php require_once('header.php')?>
<br><br><br>

<div class="minha-conta">
    <div class="container">
        <div class="col-2">
            <div class="formulario" style="height: auto; padding: 40px 20px;">
                <h2 style="color: #f1e5d0; margin-bottom: 20px;">Bem-vindo(a), <?php echo htmlspecialchars($user_name); ?>!</h2>
                <p style="color: #f1e5d0; margin-bottom: 30px;">Este é o seu painel de controle. Aqui você pode gerenciar suas informações e pedidos.</p>
                
                <a href="pedidos.php" class="btn" style="background-color: #f1e5d0; color: #A63352; display: block; margin: 10px auto; max-width: 200px;">Ver Meus Pedidos</a>
                <a href="perfil.php" class="btn" style="background-color: #f1e5d0; color: #A63352; display: block; margin: 10px auto; max-width: 200px;">Editar Perfil</a>
                <a href="logout.php" class="btn" style="background-color: #f1e5d0; color: #A63352; display: block; margin: 10px auto; max-width: 200px;">Sair</a>
            </div>
        </div>
    </div>
</div>
<?php require_once('footer.php')?>