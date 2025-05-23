<?php
include "koneksi/db.php";

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id=$id"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h2>Edit Data Mahasiswa</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($data['nama']) ?>" required>
        </div>
        <div class="mb-3">
            <label>NPM</label>
            <input type="text" name="npm" class="form-control" value="<?= htmlspecialchars($data['npm']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Usia</label>
            <input type="number" name="usia" class="form-control" value="<?= htmlspecialchars($data['usia']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control">
            <small class="form-text text-muted">Foto saat ini: <?= htmlspecialchars($data['path']) ?></small>
        </div>

        <button type="submit" name="update" class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $npm = $_POST['npm'];
        $usia = $_POST['usia'];

        mysqli_query($conn, "UPDATE users SET nama='$nama', npm='$npm', usia='$usia' WHERE id=$id");

        echo "<div class='alert alert-success mt-3'>Data berhasil diupdate.</div>";
    }
    ?>
</body>
</html>
