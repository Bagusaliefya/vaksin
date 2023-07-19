<?php

include 'koneksi.php';

if (isset($_POST['sign_up'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($koneksi, "INSERT INTO users VALUES(NULL, '$username', '$password')");
    header('location:index.php');
}
