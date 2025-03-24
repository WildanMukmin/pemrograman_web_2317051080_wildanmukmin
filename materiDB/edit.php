<!DOCTYPE html>
<?php
include "koneksi.php";
$id = $_GET['id'];

// Pastikan ID adalah angka untuk menghindari SQL Injection
$id = intval($id);

$query_mysql = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id=$id");
$user = mysqli_fetch_array($query_mysql);
?>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        .container {
            width: 90%;
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            text-align: left;
            font-weight: bold;
            margin: 10px 0 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
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
        }

        .button:hover {
            background: #0056b3;
        }

        .back {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            background: #6c757d;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
        }

        .back:hover {
            background: #5a6268;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Data Mahasiswa</h2>

    <form action="edit_exe.php" method="POST">
        <input type="hidden" name="id" value="<?= $user['id']; ?>">

        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($user['nama']); ?>" required>

        <label for="npm">NPM:</label>
        <input type="text" name="npm" value="<?= htmlspecialchars($user['npm']); ?>" required>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="<?= htmlspecialchars($user['alamat']); ?>" required>

        <label for="no_spt">No Sepatu:</label>
        <input type="text" name="no_spt" value="<?= htmlspecialchars($user['nomor_sepatu']); ?>" required>

        <button type="submit" class="button">Update</button>
    </form>

    <a href="home.php" class="back">Kembali</a>
</div>

</body>
</html>
