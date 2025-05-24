document.addEventListener("DOMContentLoaded", ready);

function ready() {
    const quantityInputs = document.querySelectorAll(".product-qtd"); 
    quantityInputs.forEach(input => {
        input.addEventListener("change", handleQuantityChange);
    });

   
    updateTotal();
}



function handleQuantityChange(event) {
    const input = event.target;
    let newQuantity = parseInt(input.value);

    // Validar quantidade
    if (isNaN(newQuantity) || newQuantity < 1) {
        newQuantity = 1;
        input.value = 1;
    }

    const productName = input.dataset.productName;
    const productVariation = input.dataset.productVariation; 

    fetch('update_cart_quantity.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `product_name=${productName}&product_variation=${productVariation}&new_quantity=${newQuantity}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            const formattedTotal = parseFloat(data.newTotal).toLocaleString('pt-BR', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
            document.getElementById("total-cart-value").innerText = "R$ " + formattedTotal;
            document.querySelector('input[name="total_pedido"]').value = parseFloat(data.newTotal).toFixed(2);
        } else {
            console.error('Error updating quantity:', data.message);
            alert('Erro ao atualizar a quantidade: ' + data.message);
           
        }
    })
    .catch(error => {
        console.error('Error in AJAX request:', error);
        alert('Erro de comunicação com o servidor ao atualizar a quantidade.');
    });
}


function updateTotal() {
    let totalAmount = 0;
    const cartRows = document.querySelectorAll(".cart-table tbody tr");

    cartRows.forEach(row => {
        // Ensure the row is a product row and not the "Seu carrinho está vazio" message
        if (row.querySelector('.cart-produto')) {
            // Find the <td> containing the price. It's the second <td> in the row.
            const priceElement = row.querySelector("td:nth-child(2)");
            // Find the quantity input. It has the class 'product-qtd' and is within the third <td>.
            const quantityInput = row.querySelector("td:nth-child(3) .product-qtd"); // Changed to product-qtd

            if (priceElement && quantityInput) {
                const productPriceText = priceElement.innerText;
                if (productPriceText) {
                    // Replace dot for thousands separator, then comma for decimal point
                    const productPrice = parseFloat(productPriceText.replace('R$', '').replace('.', '').replace(',', '.'));
                    const productQuantity = parseInt(quantityInput.value);

                    if (!isNaN(productPrice) && !isNaN(productQuantity)) {
                        totalAmount += productPrice * productQuantity;
                    }
                }
            }
        }
    });

    const formattedTotal = totalAmount.toLocaleString('pt-BR', {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
    });
    document.getElementById("total-cart-value").innerText = "R$ " + formattedTotal;
    document.querySelector('input[name="total_pedido"]').value = totalAmount.toFixed(2);
}