<?php
include 'config.php';

error_reporting(0);

session_start();

if(isset($_COOKIE['user_id']) && isset($_COOKIE['key'])) {
    $user_id = $_COOKIE['user_id'];
    $key = $_COOKIE['key'];
}

$result = mysqli_query($conn, "SELECT username FROM user_login WHERE user_id='$user_id'");

$row = mysqli_fetch_assoc($result);


if($key === hash('sha256', $row['username'])) {
    $_SESSION['username'] = true;
}


if (isset($_SESSION['username'])) {
    header("Location: home.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = ($_POST['password']);

    $sql = "SELECT * FROM user_login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: home.php");
    } else {
        echo "<script> alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
    }

    if(isset($_POST['remember'])) {
        setcookie('user_id', $row['user_id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60);
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShipShop</title>
    <!-- <link rel="stylesheet" href="./login.css"> -->
    <link rel="stylesheet" type="text/css" href="./login.css?v=1.1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <img id="logo"src="../assets/images/logo-black_page-0001-removebg-preview.png" alt="shipshoplogo">
    <div class="login">
        <form id="loginForm" class="login-input" action="" method="POST">
            <label class="button" for="inputusername">Username</label>
            <input id="inputusername" type="username" name="username" value="<?php echo $username; ?>" required>
            <br>
            <label class="button" for="inputPassword">Password</label>
            <input id="inputPassword" type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
            <br>
            <button id="buttonLogin" type="submit" name="submit">Login</button>
        </form>
    </div>
</body>

</html>