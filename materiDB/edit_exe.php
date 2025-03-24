<?php
include "koneksi.php";
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$alamat = $_POST['alamat'];
$no = $_POST['no_spt'];
$sql = "UPDATE mahasiswa SET nama = '$nama', npm = '$npm', alamat = '$alamat', nomor_sepatu = '$no' WHERE id = " . $_POST['id'];

if (mysqli_query($mysqli, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
header('Location: home.php');
exit();
