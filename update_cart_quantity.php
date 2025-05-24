<?php
session_start();
header('Content-Type: application/json');

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
    // IMPORTANT: Get product_variation from POST data
    $product_variation = isset($_POST['product_variation']) ? $_POST['product_variation'] : ''; // Default to empty string if not provided
    $new_quantity = isset($_POST['new_quantity']) ? (int)$_POST['new_quantity'] : 1;

    if ($new_quantity < 1) {
        $new_quantity = 1; // Ensure quantity is at least 1
    }

    if (!empty($product_name) && isset($_SESSION['cart'])) {
        $found = false;
        foreach ($_SESSION['cart'] as &$item) {
            // Match both name AND variation to ensure correct product is updated
            if ($item['name'] === $product_name && $item['variation'] === $product_variation) {
                $item['quantity'] = $new_quantity;
                $found = true;
                break;
            }
        }
        unset($item); // Break the reference to the last element

        if ($found) {
            // Recalculate total cart value after updating quantity
            $total_cart_value = 0;
            foreach ($_SESSION['cart'] as $item) {
                $total_cart_value += (float)$item['price'] * (int)$item['quantity'];
            }

            $response['success'] = true;
            $response['newTotal'] = $total_cart_value; // Send the new total back
            $response['message'] = 'Quantity updated successfully.';
        } else {
            $response['message'] = 'Product not found in cart or variation mismatch.';
        }
    } else {
        $response['message'] = 'Invalid request or cart is empty.';
    }
} else {
    $response['message'] = 'Invalid request method.';
}

echo json_encode($response);
?>