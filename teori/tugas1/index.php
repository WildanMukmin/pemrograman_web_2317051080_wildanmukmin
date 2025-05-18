<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Toko Online</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="riwayat.php" class="btn btn-outline-light">Riwayat Pembelian</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Katalog Produk -->
<div class="container mt-5">
    <h3 class="mb-4 text-center">Katalog Produk</h3>

    <form action="diskon.php" method="post">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

            <!-- Kaos -->
            <div class="col">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1657364891013-8324e4db9dc9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8a2Fvc3xlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;" alt="Kaos">
                    <div class="card-body">
                        <h5 class="card-title">Kaos</h5>
                        <p class="card-text">Harga: Rp30.000</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="produk[]" value="30000" id="kaos">
                            <label class="form-check-label" style="width: 100%;" for="kaos">Pilih Kaos</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Jaket -->
            <div class="col">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8amFja2V0fGVufDB8fDB8fHww" class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;" alt="Jaket">
                    <div class="card-body">
                        <h5 class="card-title">Jaket</h5>
                        <p class="card-text">Harga: Rp50.000</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="produk[]" value="50000" id="jaket">
                            <label class="form-check-label" style="width: 100%;" for="jaket">Pilih Jaket</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Topi -->
            <div class="col">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1556306535-0f09a537f0a3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aGF0fGVufDB8fDB8fHww" class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;" alt="Topi">
                    <div class="card-body">
                        <h5 class="card-title">Topi</h5>
                        <p class="card-text">Harga: Rp40.000</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="produk[]" value="40000" id="topi">
                            <label class="form-check-label" style="width: 100%;" for="topi">Pilih Topi</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sepatu -->
            <div class="col">
                <div class="card h-100">
                    <img src="https://plus.unsplash.com/premium_photo-1682125177822-63c27a3830ea?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8c2VwYXR1fGVufDB8fDB8fHww" class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;" alt="Sepatu">
                    <div class="card-body">
                        <h5 class="card-title">Sepatu</h5>
                        <p class="card-text">Harga: Rp60.000</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="produk[]" value="60000" id="sepatu">
                            <label class="form-check-label" style="width: 100%;" for="sepatu">Pilih Sepatu</label>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success btn-lg">Checkout</button>
        </div>
    </form>
</div>

</body>
</html>
