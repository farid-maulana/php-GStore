<?php

include "connect.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

if (!isset($username) || !isset($password)) {
    header('location: login.php');
} else {
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);
    $check = mysqli_num_rows($result);

    if ($check) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header('location: index.php');
    } else {
        echo "
        <script type='text/javascript'>
        alert('Username & Password Anda Salah!');
        history.back(self);
        </script>";
    }
}

?>