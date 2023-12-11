<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payment_data";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $conn->real_escape_string($_POST['fullName']);
    $address = $conn->real_escape_string($_POST['address']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $streetAddress = $conn->real_escape_string($_POST['streetAddress']);
    $city = $conn->real_escape_string($_POST['city']);
    $state = $conn->real_escape_string($_POST['state']);
    $zipCode = $conn->real_escape_string($_POST['zipCode']);
    $paymentAmount = $conn->real_escape_string($_POST['paymentAmount']);
    if (isset($_POST['PaymentMethod'])) {
        $paymentMethod = $conn->real_escape_string($_POST['PaymentMethod']);
    } else {
        echo "Error: Payment method not selected.";
   
    }

    $sql = "INSERT INTO paymentdata (FullName, Address, Phone, Email, StreetAddress, City, State, ZipCode, PaymentAmount, PaymentMethod)
            VALUES ('$fullName', '$address', '$phone', '$email', '$streetAddress', '$city', '$state', '$zipCode', '$paymentAmount', '$paymentMethod')";

    if ($conn->query($sql) === TRUE) {
        echo '<p style="color: green;">Your payment has been successfully processed.</p>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
