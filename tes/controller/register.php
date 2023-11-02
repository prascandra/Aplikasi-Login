<?php
session_start();
include '../config/conn.php';

if (isset($_SESSION['nama'])) {
    header("Location: ../index.php");
    exit();
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = hash('sha256', $_POST['password']);
    $cpassword = hash('sha256', $_POST['cpassword']);
    $role = $_POST['role'];
    if ($password == $cpassword) {
        $query = "SELECT * FROM user WHERE username='$username'";
        // echo $query;
        $output = mysqli_query($conn, $query);
        if (!$output->num_rows > 0) {
            $query = "INSERT INTO user (nama, username, passsword, role) VALUES ('$nama', '$username', '$password', '$role')";
            // echo $query;
            $output = mysqli_query($conn, $query);
            if ($output) {
                echo "<script>alert('Registrasi Berhasil')</script>";
                $nama = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                $role = "";
            } else {
                echo "<script>alert('Terjadi Kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('User Sudah Terdaftar')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak sesuai')</script>";
    }
    header("Location: ../index.php");
}
