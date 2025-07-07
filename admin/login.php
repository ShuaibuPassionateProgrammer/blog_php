<?php
session_start();
include("config/dbconfig.php");
include("includes/header.php");

$errors = [];

if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['login'])) {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if(empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if(empty($password)) {
        $errors[] = "Password is required.";
    }

    if(empty($errors)) {
        $stmt = $connection->prepare("SELECT email, password FROM WHERE email = ?");
        if($stmt) {}
        else {
            $errors[] = "Something went wrong. Please try again.";
        }
    }
}
?>