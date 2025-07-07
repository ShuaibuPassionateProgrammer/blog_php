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
    </style>
</head>
<body>
    //
</body>
</html>