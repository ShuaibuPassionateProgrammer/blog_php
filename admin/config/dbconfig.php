<?php
// Improved: Use error handling for DB connection
$connection = new mysqli("localhost", "root", "", "php_blog");

if ($connection->connect_error) {
    die("Database connection failed: " . $connection->connect_error);
}

// Set charset to avoid charset issues
$connection->set_charset("utf8mb4");