<?php include "koneksi/db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h2>Tambah Data Mahasiswa</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>NPM</label>
            <input type="text" name="npm" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Usia</label>
            <input type="number" name="usia" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control" required>
        </div>

        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $npm = $_POST['npm'];
        $usia = $_POST['usia'];
        $targetDir = "uploads/";
        $fileName = basename($_FILES["foto"]["name"]);
        $targetFile = $targetDir . time() . "_" . $fileName;
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFile)) {
            $query = "INSERT INTO users (nama, npm, usia, path) 
                      VALUES ('$nama', '$npm', $usia, '$targetFile')";
            mysqli_query($conn, $query);

            echo "<div class='alert alert-success mt-3'>Data berhasil disimpan.</div>
                <script>
                    alert('Data Berhasil Ditambah');
                    window.location.href = 'index.php';
                </script>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Gagal mengupload file.</div>";
        }
    }
    ?>
</body>

</html>
