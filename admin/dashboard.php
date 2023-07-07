<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
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