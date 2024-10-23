<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit;
}

// Simpan data biodata
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];

// Simpan foto ke folder 'uploads'
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if ($imageFileType != "jpg" && $imageFileType != "jpeg") {
    echo "Hanya file JPG yang diperbolehkan.";
    exit;
}

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    $_SESSION['biodata'] = array(
        "name" => $name,
        "email" => $email,
        "address" => $address,
        "file" => $target_file
    );
    header("Location: display.php");
} else {
    echo "Terjadi kesalahan saat mengupload file.";
}
?>
