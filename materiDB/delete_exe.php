<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "DELETE FROM mahasiswa WHERE id=$id";

if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
header('Location: home.php');
exit();
