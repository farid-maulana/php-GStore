<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GStore</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <div class="nav">
            <div class="nav__logo">
                <span class="nav__title">GStore</span>
            </div>
            <div class="nav__menu">
                <a href="index.php?menu=katalog" class="nav__menu-item">Katalog</a>
                <a href="index.php?menu=order" class="nav__menu-item">Cara Order</a>
                <a href="index.php?menu=cart" class="nav__menu-item">Cart</a>
                <a href="index.php?menu=contact" class="nav__menu-item">Contact</a>
                <?php
                session_start();
                // error_reporting(0);
                if (isset($_SESSION['status'])) {
                    echo '<a href="logout.php" class="nav__menu-item">Logout</a>';
                } else {
                    echo '<a href="login.php" class=nav__menu-item>Login</a>';
                }
                ?>
            </div>
        </div>
        <div class="underline-title"></div>
        <h1 align="center">TRANSACTION SUCCESS</h1>
        <div class="footer">
            <span class="footer__text">Copyright 2020 GStore. All rights reserved.</span>
        </div>
    </div>
</body>
</html>