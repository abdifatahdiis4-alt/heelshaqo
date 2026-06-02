<?php
require_once 'src/config/database.php';

$conn = getDBConnection();

// New password
$newPassword = 'admin123';
$hash = password_hash($newPassword, PASSWORD_BCRYPT);

$sql = "UPDATE admin_users SET password_hash = :hash WHERE username = 'admin'";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':hash', $hash);
$stmt->execute();

echo "Password has been reset successfully!<br>";
echo "Username: <strong>admin</strong><br>";
echo "Password: <strong>admin123</strong><br>";
echo "<br><a href='admin/index.php'>Go to Admin Login</a><br>";
echo "<br><strong>Delete this file after use for security!</strong>";