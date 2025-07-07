<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ./login.php");
    exit();
}

session_regenerate_id(true); // regenerate session id to avoid fixation
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Dashboard</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>
<body>
    <main class="container py-5">
        <h1>Admin Dashboard</h1>

        <div class="mb-3">
            <p>Welcome, <strong><?= htmlspecialchars($_SESSION['email']); ?></strong></p>
        </div>

        <form action="./logout.php" method="post">
            <button type="submit" name="logout" class="btn btn-danger">Logout</button>
        </form>
    </main>
</body>
</html>