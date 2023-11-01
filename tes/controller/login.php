<?php
session_start();
include '../config/conn.php';

if (isset($_SESSION['nama'])) {
    header("Location: ../dasboard.php");
    exit();
}


if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM user WHERE username = '$username' AND password='$password'";
    // echo $query;
    $result = mysqli_query($conn, $query);


    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nama'] = $row['nama'];
        header("Location: ../dasboard.php");
        exit();
    } else {
        echo "<script>alert('Email / Password Salah, Coba Lagi')</script>";
    }
}
