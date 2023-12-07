<?php
include 'connection.php';
session_start();
$user_id = $_SESSION['user_id'];
if (!isset($user_id)) {
    header("location: login.php");
}
if (isset($_POST['logout'])) {
    session_destroy();
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--    bootstrap icon link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!--    bootstrap css link-->
    <!--    slick slider link-->
<!--    <link rel="stylesheet" type="text/css" href="slick.css">-->
    <!--    default css link-->
    <link rel="stylesheet" href="main.css">
    <title>About Us Page</title>
</head>
<body>
<?php include 'header.php'; ?>
<script type="text/javascript" src="script.js">
</script>
</body>
</html>