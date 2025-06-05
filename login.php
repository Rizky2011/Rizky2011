<?php
session_start();
require 'db.php';

$username = trim($_POST['username']);
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        session_regenerate_id(true);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    }
}

echo "Username atau password salah.";
?>