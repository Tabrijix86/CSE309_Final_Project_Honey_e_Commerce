<?php

$productData = isset($_POST['product_data']) ? $_POST['product_data'] : '';

$decodedProductData = json_decode($productData, true);


echo "<h1>Order Confirmation</h1>";
echo "<p>Your order has been received.</p>";
?>