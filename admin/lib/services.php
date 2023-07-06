<?php
session_start();
require("../config/dbconfig.php");

$email = "";
$password = "";
$errors = [];

if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['login'])) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    if(empty($email)) {
        array_push($errors, "Email Address should not be empty!");
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Enter a valid email address.");
    }

    if(empty($password)) array_push($errors, "Password field should not be empty!");

    if(count($errors) === 0) {
        $user_check_query = "SELECT * FROM admin WHERE email=?";
        if($stmt = mysqli_prepare($connection, $user_check_query)) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $user = mysqli_fetch_assoc($result);

            if($user && password_verify($password, $user['password'])) {
                $_SESSION['email'] = $user['email'];
            }
        }
    }
}
else {
    header("Location: ../");
}