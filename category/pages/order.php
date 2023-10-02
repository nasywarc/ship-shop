<?php

session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../../public/login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShipShop</title>
    <link rel="stylesheet" href="../css/order.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <img id="logo" src="../../assets/images/logo-black_page-0001-removebg-preview.png" alt="shipshoplogo">
    <a href="../../public/logout.php" class="tbl-biru">Logout</a>

    <div class="namatabel">
        <h1 class="total">Item</h1>
        <h1 class="ship">Shipping</h1>
        <h1 class="pay">Total</h1>
        <h1 class="deliv">Payment</h1>
    </div>

    <div class="info">
        <div class="one">
            <h2>Adibas RUNNING</h2>
            <h2>Conon N99</h2>
            <h2>Sofa Bed</h2>
            <h2>Mango imPhone</h2>
            <h2>Polo Shirt</h2>
        </div>
        <div class="two">
            <h2>Kargo</h2>
            <h2>Instant</h2>
            <h2>Reguler</h2>
            <h2>Instant</h2>
            <h2>Reguler</h2>
        </div>
        <div class="three">
            <h2>900000.00</h2>
            <h2>4560000.00</h2>
            <h2>6750000.00</h2>
            <h2>7999999.00</h2>
            <h2>69999.00</h2>
        </div>
        <div class="four">
            <h2>m-Banking</h2>
            <h2>Debit Card</h2>
            <h2>m-Banking</h2>
            <h2>Credit Card</h2>
            <h2>m-Banking</h2>
        </div>
    </div>
</body>
</html>