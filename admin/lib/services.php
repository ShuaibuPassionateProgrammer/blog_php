<?php
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
}
else {
    header("Location: ../");
}