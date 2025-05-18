<?php
include "koneksi.php";

function hitungDiskon($total) {
    if ($total >= 100000) return $total * 0.10;
    elseif ($total >= 50000) return $total * 0.05;
    else return 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["produk"])) {
        $total = array_sum($_POST["produk"]);
        $diskon = hitungDiskon($total);
        $totalBayar = $total - $diskon;
    } elseif (isset($_POST["bayar"])) {
        $total = $_POST["total"];
        $diskon = $_POST["diskon"];
        $totalBayar = $_POST["totalBayar"];

        $stmt = $conn->prepare("INSERT INTO pembelian (total_belanja, diskon, total_bayar) VALUES (?, ?, ?)");
        $stmt->bind_param("iii", $total, $diskon, $totalBayar);
        $stmt->execute();
        $stmt->close();

        echo "<!DOCTYPE html>
        <html lang='id'>
        <head>
            <meta charset='UTF-8'>
            <title>Pembayaran Sukses</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
        </head>
        <body class='bg-light'>
        <div class='container mt-5'>
            <div class='alert alert-success text-center'>
                <h4 class='mb-3'>Pembayaran Berhasil!</h4>
                <a href='index.php' class='btn btn-primary'>Kembali ke Katalog</a>
            </div>
        </div>
        </body>
        </html>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Diskon & Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h3>Detail Pembayaran</h3>
        </div>
        <div class="card-body">
            <?php if (isset($total)) : ?>
                <ul class="list-group mb-4">
                    <li class="list-group-item">Total Belanja: <strong>Rp <?= number_format($total, 0, ',', '.') ?></strong></li>
                    <li class="list-group-item">Diskon: <strong>Rp <?= number_format($diskon, 0, ',', '.') ?></strong></li>
                    <li class="list-group-item bg-light">Total Bayar: <strong>Rp <?= number_format($totalBayar, 0, ',', '.') ?></strong></li>
                </ul>

                <form method="post" action="diskon.php">
                    <input type="hidden" name="total" value="<?= $total ?>">
                    <input type="hidden" name="diskon" value="<?= $diskon ?>">
                    <input type="hidden" name="totalBayar" value="<?= $totalBayar ?>">
                    <button type="submit" name="bayar" class="btn btn-success">Bayar</button>
                    <a href="/teori/tugas1/" class="btn btn-secondary ms-2">Kembali</a>
                </form>
            <?php else : ?>
                <div class="alert alert-warning">Tidak ada produk yang dipilih.</div>
                <a href="/teori/tugas1/" class="btn btn-secondary">Kembali</a>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>
</html>
