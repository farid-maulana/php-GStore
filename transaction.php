<?php
include 'connect.php';

session_start();
$sid = $_SESSION['username'];
$name = $_POST['full_name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$date = date('Y-m-d');
$id = "T".date('dhinA');
$query_trans = mysqli_query($connect, "INSERT INTO transactions VALUES ('$id','$sid','$name','$address','$phone_number','$date')");
$query_detail = mysqli_query($connect, "INSERT INTO transaction_detail(product_id, amount) 
                SELECT product_id, amount FROM cart WHERE session_id = '$sid'");
$query_delete = mysqli_query($connect, "DELETE FROM cart WHERE session_id = '$sid'");
$query_update = mysqli_query($connect, "UPDATE transaction_detail SET transaction_id = '$id' WHERE transaction_id IS NULL");

header('location: success.php');
?>