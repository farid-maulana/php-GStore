<?php
include 'connect.php';
session_start();
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
                <a href="?menu=katalog" class="nav__menu-item">Katalog</a>
                <a href="?menu=order" class="nav__menu-item">Cara Order</a>
                <?php
                if (isset($_SESSION['status'])) {
                ?>
                    <a href="?menu=cart" class="nav__menu-item">Cart</a>
                    <a href="?menu=contact" class="nav__menu-item">Contact</a>
                    <a href="logout.php" class="nav__menu-item">Logout</a>
                <?php
                } else {
                ?>
                    <a href="#" class="nav__menu-item" onclick="alert('Anda belum login')">Cart</a>
                    <a href="?menu=contact" class="nav__menu-item">Contact</a>
                    <a href="login.php" class=nav__menu-item>Login</a>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="underline-title"></div>
        <div id='search-box'>
            <form action='?menu=search' id='search-form' method='post' target='_top'>
                <input id='search-text' name='q' placeholder='Cari Produk Disini...' type='text'/>
                <button id='search-button' type='submit'><span>Search</span></button>
            </form>
        </div>
        <?php
        if (isset($_GET['menu'])) { 
            $pilih = $_GET['menu'];
            switch ($pilih) {
                case 'katalog':
                    include 'katalog.php';
                break;
                case 'detail':
                    include 'detail-product.php';
                break;
                case 'order':
                    include 'order.php';
                break;
                case 'cart':
                    include 'cart.php';
                break;
                case 'checkout':
                    include 'checkout.php';
                break;
                case 'contact':
                    include 'contact.php';
                break;
                case 'search':
                    include 'search.php';
                break;
                default:
                    include 'katalog.php';
            }
        } else {
            include 'katalog.php';
        }
        ?>
        <div class="footer">
            <span class="footer__text">Copyright 2020 GStore. All rights reserved.</span>
        </div>
    </div>
</body>
</html>