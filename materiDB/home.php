<?php
include "koneksi.php";
session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php");
}
$query_mysql = mysqli_query($mysqli, "SELECT * FROM mahasiswa");
$nomor = 1;
echo "<a href='tambah.php'>tambah</a><br>";
while ($data = mysqli_fetch_array($query_mysql)) {
?>

    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['npm']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['nomor_sepatu']; ?></td>
    </tr>
    <br>
<?php
}

?>
<br>
<br>
<a href="logout.php">LOGOUT</a>