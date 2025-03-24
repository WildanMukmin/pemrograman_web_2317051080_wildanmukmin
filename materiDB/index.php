<?php
session_start();
include "koneksi.php";
if (isset($_SESSION['status']) && $_SESSION['status'] == "login") {
    header("location:home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            text-align: left;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .button {
            width: 100%;
            background: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }

        .button:hover {
            background: #0056b3;
        }

        .register {
            margin-top: 15px;
            font-size: 14px;
        }

        .register a {
            text-decoration: none;
            color: #007bff;
        }

        .register a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Login</h2>

    <form action="login.php" method="post">
        <label>Username:</label>
        <input type="text" name="user" required>

        <label>Password:</label>
        <input type="password" name="pass" required>

        <button type="submit" class="button">Login</button>
    </form>

    <p class="register">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
</div>

</body>
</html>
