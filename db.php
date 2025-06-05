<?php
$host = 'localhost';
$db = 'your_database';
$user = 'your_username';rizky123
$pass = 'your_password';2011

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}
?>