<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Order Summary</title>
</head>

<body style="background: url('backadmin.jpg') no-repeat center center fixed;background-size: cover;">

    <!-- Navigation Section -->
    <!-- ... (Your existing navigation code) -->

    <h1 style="text-align: center; margin-top:100px; color:rgb(255, 217, 0)">Order Summary</h1>
    <h6 style="text-align: center;"><i>"Here is your cart"</i></h6>
    <img src="assets/cartimg.png" alt="" style="display: flex; max-height: 200px; margin-left: 88vh;">

    <!-- Order Summary Section -->
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm-12" style="background-color: aliceblue; border: 2px solid #F1C40F; border-radius: 15px;">
                <div class="container">

                    <!-- PHP code to handle form submissions -->
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Handle the form submission
                        $productName = $_POST["productName"];
                        $productPrice = $_POST["productPrice"];

                        // Add your logic to update the order summary or database as needed
                        // For example, you can store the product details in a session variable
                        // and update the order summary accordingly.
                        // You can also store the order details in a database.
                    }
                    ?>

                    <!-- Display the order summary -->
                    <div class="row">
                        <div class="col-sm-3">
                            <h1 style="text-align: center; margin-top:20px;" name="num">$199 </h1>
                            <p style="text-align: center; margin-top:10px;">Total Pending</p>
                        </div>
                        <div class="col-sm-3">
                            <h1 style="text-align: center; margin-top:20px;" name="num">$250</h1>
                            <p style="text-align: center; margin-top:10px;">Total after Delivery + Shipping</p>
                        </div>
                        <div class="col-sm-3">
                            <h1 style="text-align: center; margin-top:20px;" name="num">2</h1>
                            <p style="text-align: center; margin-top:10px;">Orders Placed</p>
                        </div>
                        <div class="col-sm-3">
                            <h1 style="text-align: center; margin-top:20px;" name="num">2</h1>
                            <p style="text-align: center; margin-top:10px;">Days until arrival</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <h1 style="text-align: center; margin-top:20px;" name="num">$Total</h1>
                            <p style="text-align: center; margin-top:10px;">Total Amount</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Bootstrap JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

</body>

</html>

<?php

$productData = isset($_POST['product_data']) ? $_POST['product_data'] : '';

$decodedProductData = json_decode($productData, true);


echo "<h1>Order Confirmation</h1>";
echo "<p>Your order has been received.</p>";
?>