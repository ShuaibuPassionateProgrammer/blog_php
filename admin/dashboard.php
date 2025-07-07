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

    <style>
        :root {
            --sidebar-width: 250px;
            --sidebar-collapsed-width: 70px;
        }
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
        }
        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: var(--sidebar-width);
            background-color: #0d6efd;
            color: white;
            padding-top: 1rem;
            z-index: 1040;
            transition: all 0.3s ease;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            transition: background 0.2s;
        }
        .sidebar a:hover {
            background-color: #0b5ed7;
        }
        .sidebar .active {
            background-color: #084298;
        }
        .sidebar i {
            margin-right: 10px;
        }
        .sidebar .nav-link span {
            display: inline;
        }
        .sidebar.sidebar-collapsed {
            width: var(--sidebar-collapsed-width);
        }
        .sidebar.sidebar-collapsed .nav-link span {
            display: none;
        }
        .sidebar.sidebar-collapsed .text-center h5 {
            display: none;
        }
        /* Top Navbar */
        .top-navbar {
            position: fixed;
            top: 0;
            left: var(--sidebar-width);
            width: calc(100% - var(--sidebar-width));
            z-index: 1030;
            transition: left 0.3s, width 0.3s;
        }
        .top-navbar.collapsed {
            left: var(--sidebar-collapsed-width);
            width: calc(100% - var(--sidebar-collapsed-width));
        }
        /* Main Content */
        .main-content {
            margin-top: 56px;
            margin-left: var(--sidebar-width);
            padding: 2rem;
            transition: margin-left 0.3s;
        }
        .main-content.collapsed {
            margin-left: var(--sidebar-collapsed-width);
        }
        /* Mobile Behavior */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                width: var(--sidebar-width);
            }

            .sidebar.mobile-visible {
                transform: translateX(0);
            }

            .top-navbar {
                left: 0;
                width: 100%;
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar.sidebar-collapsed {
                width: var(--sidebar-width); /* disable collapse on small screens */
            }
        }

        .mobile-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1030;
        }

        .mobile-overlay.active {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Mobile Overlay -->
    <div id="overlay" class="mobile-overlay"></div>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <div class="text-center mb-4">
            <h5><i class="fas fa-user-shield"></i> <span>Admin</span></h5>
        </div>
        <a href="dashboard.php" class="nav-link active"><i class="fas fa-home"></i> <span>Dashboard</span></a>
        <a href="#" class="nav-link"><i class="fas fa-users"></i> <span>Users</span></a>
        <a href="#" class="nav-link"><i class="fas fa-chart-line"></i> <span>Reports</span></a>
        <a href="#" class="nav-link"><i class="fas fa-cog"></i> <span>Settings</span></a>

        <!-- Logout Button -->
        <a href="#" id="logoutLink" class="nav-link mt-4"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
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

    <script>
        //
    </script>
</body>
</html>