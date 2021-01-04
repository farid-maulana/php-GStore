<?php
session_start();
include 'connect.php';
$session_id = $_SESSION['username'];

$query = mysqli_query($connect,"SELECT product_id FROM cart WHERE product_id = '$_GET[id]' AND session_id = '$session_id'");
$found = mysqli_num_rows($query);
if ($found == 0) {
    // kalau barang belum ada, maka di jalankan perintah insert
    mysqli_query($connect,"INSERT INTO cart(session_id, product_id, amount) VALUES ('$session_id', $_GET[id], 1)");
} else {
//  kalau barang ada, maka di jalankan perintah update
    mysqli_query($connect,"UPDATE cart SET amount = amount + 1 where product_id = $_GET[id]");       
}   
header('location: index.php?menu=katalog');
?>