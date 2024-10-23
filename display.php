<?php
session_start();
if (!isset($_SESSION['biodata'])) {
    header("Location: index.html");
    exit;
}

$biodata = $_SESSION['biodata'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tersimpan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="containerds">
        <h2>Data Tersimpan</h2>
        <div class="data-display">
            <p><strong>Nama Lengkap:</strong> <?php echo $biodata['name']; ?></p>
            <p><strong>Email:</strong> <?php echo $biodata['email']; ?></p>
            <p><strong>Alamat:</strong> <?php echo $biodata['address']; ?></p>
            <div class="photo-display">
                <p><strong>Foto:</strong></p>
                <img src="<?php echo $biodata['file']; ?>" alt="Foto Profil" width="400">
            </div>
        </div>
    </div>
</body>
</html>