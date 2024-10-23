<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Biodata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="containerbd">
        <h2>Isi Biodata Anda</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nama Lengkap:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="address">Alamat:</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="file">Unggah Foto (JPG):</label>
                <input type="file" id="file" name="file" accept="image/jpeg" required>
            </div>

            <input type="submit" value="Kirim">
        </form>
    </div>
</body>
</html>