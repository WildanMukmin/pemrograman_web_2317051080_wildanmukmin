
<?php include "koneksi/db.php";
if (isset($_POST['submit'])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);

    // Check if file was uploaded without errors
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        mysqli_query($conn, "INSERT INTO image (path) VALUES('$targetFile')");
        echo "File " . htmlspecialchars(basename($_FILES["file"]["name"])) . " berhasil diupload.";
        header("Location: index.php");
    } else {
        echo "Terjadi kesalahan saat upload file.";
    }
}
?>
