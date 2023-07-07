<?php
session_start();

if(!isset($_SESSION['email'])) {
    header("Location: ./login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>

    <?php if(isset($_SESSION['email'])): ?>
        <div>
            <p>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?></p>
        </div>
    <?php endif; ?>

    <form action="./logout.php" method="post">
        <button type="submit" name="logout" class="btn btn-danger">Logout</button>
    </form>
</body>
</html>