<?php include "koneksi/db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Gambar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h2>Upload File</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        Pilih file: <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
    </form>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // $no = 1;
            $result = mysqli_query($conn, "SELECT * FROM image");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td><img src='{$row['path']}' width='100'></td>
                    </tr>";
                // $no++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>