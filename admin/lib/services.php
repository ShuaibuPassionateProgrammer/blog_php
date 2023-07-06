<?php
require("../config/dbconfig.php");

$email = "";
$password = "";
$errors = [];

if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['login'])) {}
else {
    header("Location: ../");
}