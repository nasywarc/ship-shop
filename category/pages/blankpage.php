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
    <link rel="stylesheet" href="../css/blankpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <img id="logo" src="../../assets/images/logo-black_page-0001-removebg-preview.png" alt="shipshoplogo">
    <a href="../../public/logout.php" class="tbl-biru">Logout</a>
    <h1>Coming Soon!</h1>
</body>
</html>