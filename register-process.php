<?php
include 'connect.php';

$full_name = $_POST['full_name'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "INSERT INTO users VALUES ('','$full_name','$username','$password')";
$result = mysqli_query($connect, $query);

if ($result) {
    echo "
    <script type='text/javascript'>
    alert('Registrasi Success! Silahkan Login.');
    window.location='login.php';
    </script>";
}
?>