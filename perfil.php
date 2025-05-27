<?php
session_start(); 
require_once('conexao.php'); 


if (!isset($_SESSION['user_id'])) {
    header("Location: conta.php"); 
    exit(); 
}

$user_id = $_SESSION['user_id']; 


$stmt = $pdo->prepare("SELECT nome, email, endereco, numero_casa, cep, cidade, estado, telefone FROM usuarios WHERE id = :user_id"); 
$stmt->bindParam(':user_id', $user_id); 
$stmt->execute(); 
$user_data = $stmt->fetch(PDO::FETCH_ASSOC); 


if (!$user_data) {

    header("Location: dashboard.php");
    exit();
}

if (isset($_POST['update_profile'])) {
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = htmlspecialchars(trim($_POST['email']));
    $endereco = htmlspecialchars(trim($_POST['endereco']));
    $numero_casa = htmlspecialchars(trim($_POST['numero_casa']));
    $cep = htmlspecialchars(trim($_POST['cep']));
    $cidade = htmlspecialchars(trim($_POST['cidade']));
    $estado = htmlspecialchars(trim($_POST['estado']));
    $telefone = htmlspecialchars(trim($_POST['telefone']));


    $stmt = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email, endereco = :endereco, numero_casa = :numero_casa, cep = :cep, cidade = :cidade, estado = :estado, telefone = :telefone WHERE id = :user_id");
    $stmt->bindParam(':nome', $nome); 
    $stmt->bindParam(':email', $email); 
    $stmt->bindParam(':endereco', $endereco); 
    $stmt->bindParam(':numero_casa', $numero_casa); 
    $stmt->bindParam(':cep', $cep); 
    $stmt->bindParam(':cidade', $cidade); 
    $stmt->bindParam(':estado', $estado); 
    $stmt->bindParam(':telefone', $telefone); 
    $stmt->bindParam(':user_id', $user_id); 

    if ($stmt->execute()) { 

        $_SESSION['user_name'] = $nome;
        $_SESSION['user_email'] = $email;
        $success_message = "Perfil atualizado com sucesso!";

        $stmt = $pdo->prepare("SELECT nome, email, endereco, numero_casa, cep, cidade, estado, telefone FROM usuarios WHERE id = :user_id"); 
        $stmt->bindParam(':user_id', $user_id); 
        $stmt->execute(); 
        $user_data = $stmt->fetch(PDO::FETCH_ASSOC); 
    } else {
        $error_message = "Erro ao atualizar o perfil. Tente novamente.";
    }
}

if (isset($_POST['delete_account'])) {
    

    $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = :user_id"); 
    $stmt->bindParam(':user_id', $user_id); 

    if ($stmt->execute()) { 
        session_unset(); 
        session_destroy(); 
        header("Location: index.php?conta=excluida"); 
        exit();
    } else {
        $error_message = "Erro ao excluir a conta. Tente novamente.";
    }
}

?>

<?php require_once('header.php')?>
<br><br><br>

<div class="minha-conta">
    <div class="container">
        <div class="col-2">
            <div class="formulario"> 
                <h2 style="color: #f1e5d0; margin-bottom: 20px;">Editar Perfil</h2>

                <?php if (isset($success_message)): ?>
                    <p style="color: #f1e5d0; margin-bottom: 15px;"><?php echo $success_message; ?></p>
                <?php endif; ?>
                <?php if (isset($error_message)): ?>
                    <p style="color: red; margin-bottom: 15px;"><?php echo $error_message; ?></p>
                <?php endif; ?>

                <form action="perfil.php" method="POST">
                    <input type="text" name="nome" placeholder="Nome Completo" value="<?php echo htmlspecialchars($user_data['nome']); ?>" required>
                    <input type="email" name="email" placeholder="E-mail" value="<?php echo htmlspecialchars($user_data['email']); ?>" required>
                    <input type="text" name="endereco" placeholder="Endereço" value="<?php echo htmlspecialchars($user_data['endereco']); ?>">
                    <input type="text" name="numero_casa" placeholder="Número da Casa" value="<?php echo htmlspecialchars($user_data['numero_casa']); ?>">
                    <input type="text" name="cep" placeholder="CEP" value="<?php echo htmlspecialchars($user_data['cep']); ?>">
                    <input type="text" name="cidade" placeholder="Cidade" value="<?php echo htmlspecialchars($user_data['cidade']); ?>">
                    <input type="text" name="estado" placeholder="Estado" value="<?php echo htmlspecialchars($user_data['estado']); ?>">
                    <input type="text" name="telefone" placeholder="Telefone" value="<?php echo htmlspecialchars($user_data['telefone']); ?>">
                    <button type="submit" name="update_profile" class="btn">Salvar Alterações</button>
                </form>
                <br>

                <form action="perfil.php" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir sua conta? Esta ação é irreversível.');">
                    <button type="submit" name="delete_account" class="btn-delete-account">Excluir Conta</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php')?>