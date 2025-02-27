<?php
// Simulasi data statistik (biasanya ini diambil dari database)
$total_users = 120;
$total_orders = 50;
$total_revenue = 2500000; // dalam rupiah
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="/">🏠 Home</a></li>
                <li><a href="#">👤 Users</a></li>
                <li><a href="#">🛒 Orders</a></li>
                <li><a href="#">💰 Revenue</a></li>
                <li><a href="#">⚙ Settings</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Selamat Datang di Dashboard</h1>
            </div>

            <div class="stats">
                <div class="card">
                    <h3>Pengguna</h3>
                    <p><?= $total_users; ?> Orang</p>
                </div>
                <div class="card">
                    <h3>Pesanan</h3>
                    <p><?= $total_orders; ?> Order</p>
                </div>
                <div class="card">
                    <h3>Pendapatan</h3>
                    <p>Rp <?= number_format($total_revenue, 0, ',', '.'); ?></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>