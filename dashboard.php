<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login_form.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <a href="logout.php">Logout</a>
</body>
</html>