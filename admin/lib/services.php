<?php
require("../config/dbconfig.php");

$email = "";
$password = "";
$errors = [];

if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['login'])) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
}
else {
    header("Location: ../");
}