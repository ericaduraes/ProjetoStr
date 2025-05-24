<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once('conexao.php');

if (isset($_POST['sendPedido'])) {
    echo "Botão 'Finalizar Compra' foi clicado.<br>";

    if (!empty($_SESSION['cart'])) {
        echo "Carrinho na sessão NÃO está vazio.<br>";

        $total_pedido = isset($_POST['total_pedido']) ? (float)$_POST['total_pedido'] : 0;
        $detalhes_pedido = json_encode($_SESSION['cart']);

        echo "Total do pedido: " . $total_pedido . "<br>";
        echo "Detalhes do pedido (JSON): " . $detalhes_pedido . "<br>";
        echo "Tamanho do JSON: " . strlen($detalhes_pedido) . " bytes<br>";


        try {

            $stmt = $pdo->prepare("INSERT INTO pedidos (total, detalhes_pedido) VALUES (:total, :detalhes_pedido)");


            $stmt->bindParam(':total', $total_pedido);
            $stmt->bindParam(':detalhes_pedido', $detalhes_pedido);


            $stmt->execute();

            echo "Pedido inserido com sucesso no banco de dados!<br>";


            unset($_SESSION['cart']);
            echo "Carrinho da sessão limpo.<br>";


            header("Location: index.php?pedido=sucesso");
            exit();

        } catch (PDOException $e) {
            echo "Erro ao processar o pedido (PDOException): " . $e->getMessage() . "<br>";
        }
    } else {
        echo "Carrinho na sessão ESTÁ VAZIO.<br>"; 
        header("Location: carrinho.php?msg=carrinho_vazio");
        exit();
    }
} else {
    echo "Script acessado diretamente sem o POST do botão 'Finalizar Compra'.<br>";
    header("Location: carrinho.php");
    exit();
}
?>