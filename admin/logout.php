<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic CSRF token check
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('Invalid CSRF token.');
    }

    // Destroy session
    session_unset();
    session_destroy();

    header("Location: ./login.php");
    exit();
} else {
    header("Location: ./dashboard.php");
    exit();
}