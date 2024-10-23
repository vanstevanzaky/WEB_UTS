<?php
session_start();

$valid_username = "StevanZaky";
$valid_password = "Web123";

$username = $_POST['username'];
$password = $_POST['password'];

$response = array();

if ($username == $valid_username && $password == $valid_password) {
    $_SESSION['username'] = $username;
    $response['success'] = true;
    $response['redirect'] = 'biodata.php';
} else {
    $response['success'] = false;
    $response['message'] = "Login gagal! Nama pengguna atau kata sandi salah.";
}

echo json_encode($response);
?>