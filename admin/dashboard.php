<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ./login.php");
    exit();
}

session_regenerate_id(true);

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Dashboard</title>
</head>
<body>
    //
</body>
</html>