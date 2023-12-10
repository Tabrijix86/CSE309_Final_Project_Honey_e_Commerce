<?php
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$productname = $_POST['productname'];

$conn = new mysqli('localhost', 'root', '', 'Honey');
if ($conn->connect_error) {
    die('connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into customerinfo(name,email,contact, address, productname) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $contact, $address, $productname);
    $stmt->execute();
    echo "Your submission has been successful! We will contact you soon. Stay healthy with our premium honey.";
    $stmt->close();
    $conn->close();
}
?>