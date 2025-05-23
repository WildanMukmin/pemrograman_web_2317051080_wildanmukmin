<?php
session_start();
include 'koneksi/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $checkQuery = "SELECT * FROM admin WHERE email='$email'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if ($checkResult && mysqli_num_rows($checkResult) > 0) {
        $_SESSION['error'] = "Email sudah terdaftar.";
        header("Location: register-page.php");
        exit;
    }

    $insertQuery = "INSERT INTO admin (email, pass) VALUES ('$email', '$password')";
    if (mysqli_query($conn, $insertQuery)) {
        $_SESSION['success'] = "Registrasi berhasil! Silakan login.";
        header("Location: login-page.php");
        exit;
    } else {
        $_SESSION['error'] = "Terjadi kesalahan saat menyimpan data.";
        header("Location: register-page.php");
        exit;
    }
}
?>
