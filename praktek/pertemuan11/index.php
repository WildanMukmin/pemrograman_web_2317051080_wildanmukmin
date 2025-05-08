<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 11</title>
</head>

<body>
    <form method="POST" action="tampil.php">
        <div>
            <label for="nama">Masukkan nama:</label>
            <input type="text" id="nama" name="nama">
        </div>
        <br>
        <div>
            <label for="usia">Masukkan usia:</label>
            <input type="number" id="usia" name="usia">
        </div>
        <br>
        <div>
            <label for="npm">Masukkan NPM:</label>
            <input type="text" id="npm" name="npm">
        </div>
        <br>
        <div>
            <label for="alamat">Masukkan alamat:</label>
            <textarea id="alamat" name="alamat"></textarea>
        </div>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>