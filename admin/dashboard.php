<?php
session_start();

// Security: Check login
if (!isset($_SESSION['email'])) {
    header("Location: ./login.php");
    exit();
}

// Security: Prevent session fixation
session_regenerate_id(true);

// Optional: Generate CSRF token for logout
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

  <!-- Favicon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />

  <!-- Fonts & Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />

  <!-- MDB UI Kit -->
  <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">Admin Panel</a>
      <span class="navbar-text text-white ms-auto">
        Logged in as: <strong><?= htmlspecialchars($_SESSION['email']); ?></strong>
      </span>
    </div>
  </nav>

  <!-- Main content -->
  <main class="container my-5">
    <div class="card shadow-sm">
      <div class="card-body">
        <h2 class="card-title">Welcome to the Admin Dashboard</h2>
        <p class="card-text">You are logged in as <strong><?= htmlspecialchars($_SESSION['email']); ?></strong>.</p>

        <!-- Logout Form -->
        <form action="./logout.php" method="post">
          <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']); ?>" />
          <button type="submit" name="logout" class="btn btn-danger">
            <i class="fas fa-sign-out-alt me-1"></i> Logout
          </button>
        </form>
      </div>
    </div>
  </main>

  <!-- MDB JS -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>