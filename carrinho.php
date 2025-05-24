<?php require_once('header.php')?>

<div class="main-content-wrapper"> <div class="container">
        <div class="corpo-categorias carrinho-compras">
            <div class="table-responsive">
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Valor</th>
                            <th>Quantidade</th>
                            <th>Remover</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        session_start();

                        if (!isset($_SESSION['cart'])) {
                            $_SESSION['cart'] = [];
                        }

                        if (isset($_POST['add_to_cart'])) {
                            $product_name = $_POST['product_name'];
                            $product_price_raw = $_POST['product_price'];
                            $product_image = $_POST['product_image'];
                            $product_quantity = isset($_POST['product_quantity']) ? (int)$_POST['product_quantity'] : 1;
                            $product_variation = isset($_POST['product_wireo_color_hidden']) ? $_POST['product_wireo_color_hidden'] : '';

                            $product_price_cleaned = str_replace(['R$', ','], ['', '.'], $product_price_raw);
                            $product_price = (float) $product_price_cleaned;

                            $item_added = false;
                            foreach ($_SESSION['cart'] as &$item) {
                                if ($item['name'] === $product_name && $item['variation'] === $product_variation) {
                                    $item['quantity'] += $product_quantity;
                                    $item_added = true;
                                    break;
                                }
                            }
                            unset($item);

                            if (!$item_added) {
                                $_SESSION['cart'][] = [
                                    'name' => $product_name,
                                    'price' => $product_price,
                                    'image' => $product_image,
                                    'quantity' => $product_quantity,
                                    'variation' => $product_variation
                                ];
                            }
                            // Redirect to prevent re-submission on refresh and show updated cart
                            header('Location: carrinho.php');
                            exit();
                        }

                        if (isset($_GET['remove_item'])) {
                            $item_to_remove = urldecode($_GET['remove_item']);
                            // Ensure variation is correctly passed, even if empty
                            $variation_to_remove = isset($_GET['variation']) ? urldecode($_GET['variation']) : '';

                            foreach ($_SESSION['cart'] as $key => $item) {
                                if ($item['name'] === $item_to_remove && $item['variation'] === $variation_to_remove) {
                                    unset($_SESSION['cart'][$key]);
                                    break;
                                }
                            }
                            $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index array

                            // Redirect to prevent re-submission on refresh
                            header('Location: carrinho.php');
                            exit();
                        }

                        $total_cart_value = 0;
                        if (!empty($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $item) {
                                $subtotal = $item['price'] * $item['quantity'];
                                $total_cart_value += $subtotal;
                                $item_variation_display = !empty($item['variation']) ? " - " . htmlspecialchars($item['variation']) : '';
                        ?>
                                <tr>
                                    <td>
                                        <div class="cart-produto">
                                            <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" class="produtoimg">
                                            <div class="info-carrinho">
                                                <h4><?php echo htmlspecialchars($item['name']) . $item_variation_display; ?></h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
                                    <td>
                                        <input type="number" value="<?php echo htmlspecialchars($item['quantity']); ?>" min="1" class="product-qtd" data-product-name="<?php echo urlencode($item['name']); ?>" data-product-variation="<?php echo urlencode($item['variation']); ?>">
                                    </td>
                                    <td>
                                        <a href="carrinho.php?remove_item=<?php echo urlencode($item['name']); ?>&variation=<?php echo urlencode($item['variation']); ?>" class="remove-product-button">Remover</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo '<tr><td colspan="4">Seu carrinho está vazio.</td></tr>';
                        }
                        ?>
                    </tbody>

                   <tfoot class="valor-total">
                        <tr>
                            <td colspan="3" class="cart-total-valor">TOTAL: </td>
                            <td class="cart-total-valor">
                                <span id="total-cart-value"> R$ <?php echo number_format($total_cart_value, 2, ',', '.'); ?> </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <form action="enviarpedidos.php" method="POST">
                                    <input type="hidden" name="total_pedido" value="<?php echo number_format($total_cart_value, 2, '.', ''); ?>">
                                    <button type="submit" name="sendPedido"> Finalizar Compra</button>
                                </form>
                            </td>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>
</div>
<script src="carrinho.js"></script>
<?php require_once('footer.php')?>