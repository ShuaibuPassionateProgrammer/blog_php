<?php
// Database configuration
$host = "localhost";
$user = "root";
$password = "";
$dbname = "php_blog";

// Create connection
$connection = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Optional: set charset to utf8mb4 for better unicode support
mysqli_set_charset($connection, "utf8mb4");