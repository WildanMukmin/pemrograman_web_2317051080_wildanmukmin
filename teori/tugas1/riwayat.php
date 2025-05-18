<?php
include "koneksi.php";

// Ambil data dari tabel pembelian
$sql = "SELECT * FROM pembelian ORDER BY tanggal DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/teori/tugas1/">Toko Online</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/teori/tugas1/" class="btn btn-outline-light">Kembali ke Katalog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Riwayat -->
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h3>Riwayat Pembelian</h3>
        </div>
        <div class="card-body">
            <?php if ($result->num_rows > 0): ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Total</th>
                                <th>Diskon</th>
                                <th>Total Akhir</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            while ($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>Rp<?= number_format($row['total_belanja'], 0, ',', '.') ?></td>
                                    <td>Rp<?=  number_format($row['diskon'], 0, ',', '.') ?></td>
                                    <td>Rp<?= number_format($row['total_bayar'], 0, ',', '.') ?></td>
                                    <td><?= date("d M Y H:i", strtotime($row['tanggal'])) ?></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p class="text-muted">Belum ada riwayat pembelian.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>
</html>

<?php $conn->close(); ?>
