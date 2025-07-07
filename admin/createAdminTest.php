<?php
// Run once to create a user with a hashed password
include('config/dbconfig.php');

$email = 'admin@example.com';
$password = 'YourPassword123';
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $connection->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->bind_param('ss', $email, $hashedPassword);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "User created successfully!";
} else {
    echo "User creation failed.";
}

$stmt->close();
$connection->close();
