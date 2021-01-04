<?php
include "connect.php";

$id = $_GET['id'];

$query = "DELETE FROM cart WHERE id = $id";
$result = mysqli_query($connect, $query);

header("location: index.php?menu=cart");
?>