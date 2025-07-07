<?php
session_start();
include("config/dbconfig.php");
include("includes/header.php");

$errors = [];

if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['login'])) {}
?>