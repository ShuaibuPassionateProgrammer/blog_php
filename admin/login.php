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
        if($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows === 1) {
                $user = $result->fetch_assoc();

                if (password_verify($password, $user['password'])) {
                    session_regenerate_id(true);
                    $_SESSION['email'] = $user['email'];
                    header("Location: dashboard.php");
                    exit();
                } else {
                    $errors[] = "Incorrect password.";
                }
            } else {
                $errors[] = "No account found with that email.";
            }
        }
        else {
            $errors[] = "Something went wrong. Please try again.";
        }
    }
}
?>