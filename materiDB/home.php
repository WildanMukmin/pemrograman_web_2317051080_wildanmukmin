<?php
include "koneksi.php";
session_start();

if ($_SESSION['status'] != "login") {
    header("location:index.php");
    exit;
}

$query_mysql = mysqli_query($mysqli, "SELECT * FROM mahasiswa");
$nomor = 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
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
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            text-decoration: none;
            background: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .button:hover {
            background: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        tr:hover {
            background: #ddd;
        }

        .action-links a {
            text-decoration: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .edit {
            background: #28a745;
        }

        .edit:hover {
            background: #218838;
        }

        .delete {
            background: #dc3545;
        }

        .delete:hover {
            background: #c82333;
        }

        .logout {
            margin-top: 20px;
            display: inline-block;
            background: #ff6b6b;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
        }

        .logout:hover {
            background: #e63946;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Mahasiswa</h2>
    <a href="tambah.php" class="button">Tambah Mahasiswa</a>

    <table>
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Alamat</th>
            <th>No Sepatu</th>
            <th>Aksi</th>
        </tr>

        <?php while ($data = mysqli_fetch_array($query_mysql)) { ?>
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= htmlspecialchars($data['nama']); ?></td>
                <td><?= htmlspecialchars($data['npm']); ?></td>
                <td><?= htmlspecialchars($data['alamat']); ?></td>
                <td><?= htmlspecialchars($data['nomor_sepatu']); ?></td>
                <td class="action-links">
                    <a href="/materiDB/edit.php?id=<?= $data['id']; ?>" class="edit">Edit</a>
                    <a href="/materiDB/delete_exe.php?id=<?= $data['id']; ?>" class="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <a href="logout.php" class="logout">LOGOUT</a>
</div>

</body>
</html>
