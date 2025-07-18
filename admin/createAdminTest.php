<?php
// Run once to create a user with a hashed password
include('config/dbconfig.php');

$email = 'admin@example.com';
$password = '1234';
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $connection->prepare("INSERT INTO admin (email, password) VALUES (?, ?)");
$stmt->bind_param('ss', $email, $hashedPassword);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "User created successfully!";
} else {
    echo "User creation failed.";
}

$stmt->close();
$connection->close();