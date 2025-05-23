
<?php 
include "koneksi/db.php"; 
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login-page.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h2>Data Mahasiswa</h2>
    <div class="d-flex justify-content-between">

        <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Mahasiswa</a>
        <a href="logout.php" class="btn btn-danger mb-3">Logout</a>
    </div>
        <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>USIA</th>
                <th>FOTO</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // $no = 1;
            $result = mysqli_query($conn, "SELECT * FROM users");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['npm']}</td>
                        <td>{$row['usia']}</td>
                        <td><img src='{$row['path']}' width='100' height='100'></td>
                        <td>
                            <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                            <a href='hapus.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Hapus data ini?\")'>Hapus</a>
                        </td>
                    </tr>";
                // $no++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>