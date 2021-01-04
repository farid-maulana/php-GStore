<?php
include 'connect.php';

$act = $_GET['act'];
$id = $_GET['id'];

if ($act == "plus") {
    $query = "UPDATE cart SET amount = amount + 1 WHERE id = $id";
    $result = mysqli_query($connect, $query);
} else {
    $query = "UPDATE cart SET amount = amount - 1 WHERE id = $id";
    $result = mysqli_query($connect, $query);
    // jika setelah dikurangi amount bernilai 0
    mysqli_query($connect, "DELETE FROM cart WHERE amount = 0");
}

header('location: index.php?menu=cart');
?>