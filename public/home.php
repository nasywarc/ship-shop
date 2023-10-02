<?php

session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShipShop</title>
    <link rel="stylesheet" href="./home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <img id="logo" src="../assets/images/logo-black_page-0001-removebg-preview.png" alt="shipshoplogo">
    <a href="logout.php" class="tbl-biru">Logout</a> 
    <a href="../category/pages/order.php" class="tbl-biru orders">Orders</a>

    <div class="kategori">
        <div class="elektronik">
            <a href="../category/pages/elektronik.php">Elektronik <br>
                <img src="../assets/images/phone.png" alt="elektronik">
            </a>
        </div>
        <div class="food ganti">
            <a href="../category/pages/makanminum.php">Makanan dan Minuman <br>
                <img src="../assets/images/food.png" alt="makanminum">
            </a>
        </div>
        <div class="perkap">
            <a href="../category/pages/perkap.php">Perlengkapan Rumah <br>
                <img src="../assets/images/perlengkapanrumah.png" alt="perkap">
            </a>
        </div>
        <div class="bajuP">
            <a href="../category/pages/pria.php">Pakaian Pria <br>
                <img src="../assets/images/suit.png" alt="suit">
            </a>
        </div>
        <div class="bajuW">
            <a href="../category/pages/blankpage.php">Pakaian Wanita <br>
                <img src="../assets/images/dress.png" alt="dress">
            </a>
        </div>
        <div class="kesehatan">
            <a href="../category/pages/blankpage.php">Kesehatan <br>
                <img src="../assets/images/kesehatan.png" alt="obat">
            </a>
        </div>
        <div class="oto">
            <a href="../category/pages/blankpage.php">Otomotif <br>
                <img src="../assets/images/car.png" alt="mobil">
            </a>
        </div>
        <div class="olah">
            <a href="../category/pages/olahraga.php">Olahraga <br>
                <img src="../assets/images/bicycle.png" alt="sepeda">
            </a>
        </div>
        <div class="foto">
            <a href="../category/pages/fotografi.php">Fotografi <br>
                <img src="../assets/images/camera.png" alt="kamera">
            </a>
        </div>
        <div class="aksesoris">
            <a href="../category/pages/blankpage.php">Aksesoris <br>
                <img src="../assets/images/aksesoris.png" alt="kalung">
            </a>
        </div>
    </div>
</body>

</html>