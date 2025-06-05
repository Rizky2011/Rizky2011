<?php
require 'db.php';

$username = trim($_POST['username']);
$password = $_POST['password'];

if (empty($username) || empty($password)) {
    die('Username dan password wajib diisi.');
}

$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashed_password);

if ($stmt->execute()) {
    echo "Registrasi berhasil.";
} else {
    echo "Error: " . $stmt->error;
}
?>