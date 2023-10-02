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
    <link rel="stylesheet" href="../css/food.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="up">
        <img id="logo" src="../../assets/images/logo-black_page-0001-removebg-preview.png" alt="shipshoplogo">
        <a href="../../public/logout.php" class="tbl-biru">Logout</a>
    </div>
    

    <div class="down">
        <div class="left">
            <div class="one">
                <h2>Cheeseburger</h2>
                <img src="../../assets/images/food.png" alt="phone">
            </div>
            <h3 class="description">Burger dengan isian daging, keju, serta sayuran.</h3>
        </div>
        <div class="right">
            <h2>Jumlah Stok
                <p>52</p>
            </h2>
        </div>
        <div class="bot">
            <p>Rp45,000.00
</p>
        </div>
    </div>
    
</body>
</html>