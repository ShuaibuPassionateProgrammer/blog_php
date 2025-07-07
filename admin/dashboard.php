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

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Custom Style -->
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
    }

    .sidebar {
      height: 100vh;
      background-color: #0d6efd;
      color: white;
      padding-top: 1rem;
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      transition: all 0.3s;
      z-index: 1000;
    }

    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 0.75rem 1rem;
      transition: 0.2s;
    }

    .sidebar a:hover {
      background-color: #0b5ed7;
    }

    .sidebar .active {
      background-color: #084298;
    }

    .main-content {
      margin-left: 250px;
      padding: 2rem;
      transition: margin-left 0.3s;
    }

    .sidebar-collapsed {
      width: 70px;
    }

    .main-content.collapsed {
      margin-left: 70px;
    }

    .sidebar .nav-link i {
      margin-right: 10px;
    }

    .sidebar .nav-link span {
      display: inline;
    }

    .sidebar-collapsed .nav-link span {
      display: none;
    }

    .top-navbar {
      margin-left: 250px;
      transition: margin-left 0.3s;
    }

    .top-navbar.collapsed {
      margin-left: 70px;
    }
  </style>
</head>

<body>
  <!-- Sidebar -->
  <div id="sidebar" class="sidebar">
    <div class="text-center mb-4">
      <h5><i class="fas fa-user-shield"></i> Admin</h5>
    </div>
    <a href="dashboard.php" class="nav-link active"><i class="fas fa-home"></i> <span>Dashboard</span></a>
    <a href="#" class="nav-link"><i class="fas fa-users"></i> <span>Users</span></a>
    <a href="#" class="nav-link"><i class="fas fa-chart-line"></i> <span>Reports</span></a>
    <a href="#" class="nav-link"><i class="fas fa-cog"></i> <span>Settings</span></a>
    <a href="#" id="logoutLink" class="nav-link text-white mt-4 px-3">
        <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
    </a>

    <form id="logoutForm" action="logout.php" method="post" class="d-none">
        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']); ?>">
    </form>

  </div>

  <!-- Top Navbar -->
  <nav id="topNavbar" class="navbar navbar-expand-lg navbar-dark bg-primary top-navbar shadow-sm">
    <div class="container-fluid">
      <button id="toggleSidebar" class="btn btn-outline-light me-3">
        <i class="fas fa-bars"></i>
      </button>
      <span class="navbar-text text-white">
        Logged in as: <strong><?= htmlspecialchars($_SESSION['email']); ?></strong>
      </span>
    </div>
  </nav>

  <!-- Main Content -->
  <main id="mainContent" class="main-content">
    <div class="container">
      <h2>Welcome to the Admin Dashboard</h2>
      <p>You are logged in as <strong><?= htmlspecialchars($_SESSION['email']); ?></strong>.</p>
    </div>
  </main>

  <!-- Toggle Sidebar Script -->
  <script>
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    const topNavbar = document.getElementById('topNavbar');

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('sidebar-collapsed');
      mainContent.classList.toggle('collapsed');
      topNavbar.classList.toggle('collapsed');
    });
  </script>
</body>
</html>